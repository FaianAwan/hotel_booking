<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <title>View Bookings</title>
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">All Bookings</h2>
            </div>
        </div>
        
        <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Booking List</strong></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Guest Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Room</th>
                                            <th>Check-in</th>
                                            <th>Check-out</th>
                                            <th>Total Days</th>
                                            <th>Total Price</th>
                                            <th>Booking Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->name }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td>{{ $booking->phone }}</td>
                                            <td>
                                                @if($booking->room)
                                                    {{ $booking->room->room_title }}
                                                @else
                                                    <span class="text-danger">Room Deleted</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y') }}</td>
                                            <td>
                                                @php
                                                    $start = \Carbon\Carbon::parse($booking->start_date);
                                                    $end = \Carbon\Carbon::parse($booking->end_date);
                                                    $days = $start->diffInDays($end);
                                                @endphp
                                                {{ $days }} days
                                            </td>
                                            <td>
                                                @if($booking->room)
                                                    ${{ number_format($booking->room->price * $days, 2) }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $booking->created_at->format('M d, Y H:i') }}</td>
                                            <td>
                                                <a href="{{ route('booking_details', $booking->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <a href="{{ route('booking_delete', $booking->id) }}" class="btn btn-sm btn-danger" 
                                                   onclick="return confirm('Are you sure you want to delete this booking?')">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    @include('admin.footer')
</body>
</html> 