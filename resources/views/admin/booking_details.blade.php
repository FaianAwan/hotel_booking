<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .booking_info {
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .booking_info h3 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .info_row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
        }

        .info_label {
            font-weight: bold;
            color: #495057;
        }

        .info_value {
            color: #212529;
        }

        .back_button {
            margin-top: 30px;
            text-align: center;
        }
    </style>
    <title>Booking Details - ID: {{ $booking->id ?? 'N/A' }}</title>
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_center">
                    <h1 style="font-size: 30px; font-weight: bold;">Booking Details</h1>
                    
                    @if(isset($booking) && $booking)
                    <div class="booking_info">
                        <h3>Customer Information</h3>
                        <div class="info_row">
                            <span class="info_label">Booking ID:</span>
                            <span class="info_value">{{ $booking->id }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Customer Name:</span>
                            <span class="info_value">{{ $booking->name }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Email Address:</span>
                            <span class="info_value">{{ $booking->email }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Phone Number:</span>
                            <span class="info_value">{{ $booking->phone }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Booking Date:</span>
                            <span class="info_value">{{ $booking->created_at->format('F d, Y \a\t H:i') }}</span>
                        </div>
                    </div>

                    <div class="booking_info">
                        <h3>Stay Information</h3>
                        <div class="info_row">
                            <span class="info_label">Check-in Date:</span>
                            <span class="info_value">{{ \Carbon\Carbon::parse($booking->start_date)->format('F d, Y') }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Check-out Date:</span>
                            <span class="info_value">{{ \Carbon\Carbon::parse($booking->end_date)->format('F d, Y') }}</span>
                        </div>
                        @php
                            $start = \Carbon\Carbon::parse($booking->start_date);
                            $end = \Carbon\Carbon::parse($booking->end_date);
                            $days = $start->diffInDays($end);
                        @endphp
                        <div class="info_row">
                            <span class="info_label">Duration:</span>
                            <span class="info_value">{{ $days }} days</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Room Type:</span>
                            <span class="info_value">{{ $booking->room ? $booking->room->room_type : 'Room Deleted' }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Price per Night:</span>
                            <span class="info_value">${{ $booking->room ? number_format($booking->room->price, 2) : 'N/A' }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Total Price:</span>
                            <span class="info_value" style="color: #28a745; font-weight: bold;">${{ $booking->room ? number_format($booking->room->price * $days, 2) : 'N/A' }}</span>
                        </div>
                    </div>

                    @if($booking->room)
                    <div class="booking_info">
                        <h3>Room Details</h3>
                        <div class="info_row">
                            <span class="info_label">Room Title:</span>
                            <span class="info_value">{{ $booking->room->room_title }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">Description:</span>
                            <span class="info_value">{{ Str::limit($booking->room->description, 100) }}</span>
                        </div>
                        <div class="info_row">
                            <span class="info_label">WiFi:</span>
                            <span class="info_value">{{ ucfirst($booking->room->wifi) }}</span>
                        </div>
                        @if($booking->room->image)
                        <div class="info_row">
                            <span class="info_label">Room Image:</span>
                            <span class="info_value">
                                <img width="100" src="room/{{ $booking->room->image }}" style="border-radius: 5px;">
                            </span>
                        </div>
                        @endif
                    </div>
                    @endif

                    <div class="back_button">
                        <a onclick="return confirm('Are you sure to delete this booking?');" class="btn btn-danger" href="{{url('booking_delete',$booking->id)}}">Delete Booking</a>
                        <a class="btn btn-warning" href="{{url('view_bookings')}}">Back to Bookings</a>
                    </div>
                    @else
                    <div class="booking_info">
                        <h3 style="color: #dc3545;">Error</h3>
                        <p style="text-align: center; color: #dc3545;">Booking information not found or invalid.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @include('admin.footer')
</body>
</html> 