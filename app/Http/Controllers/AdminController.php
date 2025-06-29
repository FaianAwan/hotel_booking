<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype =='user')
            {  
                 $room = Room::all();
                return view('home.index',compact('room'));
            }
            else if($usertype == 'admin')
            {
                // Get real hotel booking statistics
                $totalRooms = Room::count();
                $totalBookings = Booking::count();
                $recentBookings = Booking::with('room')->orderBy('created_at', 'desc')->take(5)->get();
                
                // Calculate total revenue
                $totalRevenue = 0;
                foreach($recentBookings as $booking) {
                    if($booking->room) {
                        $start = \Carbon\Carbon::parse($booking->start_date);
                        $end = \Carbon\Carbon::parse($booking->end_date);
                        $days = $start->diffInDays($end);
                        $totalRevenue += $booking->room->price * $days;
                    }
                }
                
                // Add contact statistics
                $totalContacts = \App\Models\Contact::count();
                $unreadContacts = \App\Models\Contact::unread()->count();
                
                return view('admin.index', compact('totalRooms', 'totalBookings', 'totalRevenue', 'recentBookings', 'totalContacts', 'unreadContacts'));
            }
            else 
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function home()
    {
        $totalRooms = Room::count();
        $totalBookings = Booking::count();
        $recentBookings = Booking::with('room')->orderBy('created_at', 'desc')->take(5)->get();
        
        // Calculate total revenue
        $totalRevenue = 0;
        foreach($recentBookings as $booking) {
            if($booking->room) {
                $start = \Carbon\Carbon::parse($booking->start_date);
                $end = \Carbon\Carbon::parse($booking->end_date);
                $days = $start->diffInDays($end);
                $totalRevenue += $booking->room->price * $days;
            }
        }
        
        // Add contact statistics
        $totalContacts = \App\Models\Contact::count();
        $unreadContacts = \App\Models\Contact::unread()->count();
        
        return view('admin.body', compact('totalRooms', 'totalBookings', 'recentBookings', 'totalRevenue', 'totalContacts', 'unreadContacts'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room;

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        
        // Handle image upload or online URL
        if ($request->hasFile('image')) {
            // File upload
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        } elseif ($request->filled('image_url')) {
            // Online image URL
            $data->image = $request->image_url;
        } else {
            // Use default placeholder based on room type
            switch(strtolower($request->type)) {
                case 'deluxe':
                    $data->image = 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&h=600&fit=crop';
                    break;
                case 'premium':
                    $data->image = 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop';
                    break;
                default:
                    $data->image = 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&h=600&fit=crop';
                    break;
            }
        }

        $data->save();

        return redirect()->back()->with('success', 'Room added successfully!');
    }

    public function view_room()
    {
        $data = Room::all();

        return view('admin.view_room',compact('data'));
    }

    public function room_delete($id)
    {
        $data = Room::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function room_update($id)
    {
        $data = Room::find($id);
        return view('admin.update_room',compact('data'));
    }
    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->image;

        if ($image)
        {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    // Booking management methods
    public function view_bookings()
    {
        $bookings = Booking::with('room')->orderBy('created_at', 'desc')->get();
        return view('admin.view_bookings', compact('bookings'));
    }

    public function booking_delete($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success', 'Booking deleted successfully');
    }

    public function booking_details($id)
    {
        // Debug: Check if user is authenticated
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Please login to view booking details');
        }
        
        // Debug: Check if user is admin
        if (auth()->user()->usertype !== 'admin') {
            return redirect()->back()->with('error', 'Access denied. Admin privileges required.');
        }
        
        $booking = Booking::with('room')->find($id);
        
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found');
        }
        
        // Debug: Log the booking data
        \Log::info('Booking details accessed', [
            'booking_id' => $id,
            'booking_data' => $booking->toArray()
        ]);
        
        return view('admin.booking_details', compact('booking'));
    }
} 