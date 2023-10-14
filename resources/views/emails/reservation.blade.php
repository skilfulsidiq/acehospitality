<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            background-color: #8e4f27;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #8e4f27;
            color: #ffffff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reservation Confirmation</h1>
        </div>
        <div class="content">
            <p>Dear {{ @$booking->user->firstname }},</p>
            <p>Your hotel reservation has been successfully received. Below are the details of your reservation:</p>
               <p><strong>Confirmation Number:</strong> {{ $booking->booking_ref }}</p>
            <p><strong>Hotel Name:</strong> {{ @$booking->hotel->hotel_name }}</p>

               
                          @forelse ($booking->room_bookings as $item )
                            <tr>
                                <p>Check-In Date: <strong> {{ $item->arrival_date }} </strong>   </p>
                                <p>Check-Out Date: <strong> {{ $item->departure_date }} </strong>   </p>
                                <p>Room Type <strong> {{ $item->name }} </strong>   </p>
                                <p>Quantity <strong> {{ $item->quantity }} </strong>   </p>
                                <p>Nigt <strong> {{ $item->night }} </strong>   </p>
                            </tr>
                            @empty

                             @endforelse

                             <p>Total <strong>{{ number_format($booking->grand_total) }}</strong></p>





            <p>We look forward to welcoming you to our hotel. If you have any questions or need to make changes to your reservation, please don't hesitate to contact us at <b>info@acehospitalityng.com</b>.</p>
            <p>Thank you for choosing to stay with us!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} All rights reserved.</p>
        </div>
    </div>
</body>
</html>
