<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'unread'
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        try {
            $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
            $unreadCount = Contact::unread()->count();
            $totalCount = Contact::count();
            
            // Debug information
            \Log::info('ContactController@index called', [
                'total_contacts' => $totalCount,
                'unread_count' => $unreadCount,
                'contacts_loaded' => $contacts->count()
            ]);
            
            return view('admin.contacts.index', compact('contacts', 'unreadCount', 'totalCount'));
        } catch (\Exception $e) {
            \Log::error('Error in ContactController@index: ' . $e->getMessage());
            return response('Error: ' . $e->getMessage(), 500);
        }
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        
        // Mark as read if unread
        if ($contact->status === 'unread') {
            $contact->update(['status' => 'read']);
        }
        
        return view('admin.contacts.show', compact('contact'));
    }

    public function updateStatus(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['status' => $request->status]);
        
        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return redirect()->route('admin.contacts.index')->with('success', 'Message deleted successfully!');
    }
}
