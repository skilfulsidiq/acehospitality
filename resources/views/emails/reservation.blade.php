<x-email-layout>
    <x-slot name="header">Reservation Received</x-slot>
    <x-slot name="body">
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
                                <p>Night <strong> {{ $item->night }} </strong>   </p>
                            </tr>
                            @empty

                             @endforelse

                             <p>Total <strong>{{ number_format($booking->grand_total) }}</strong></p>





            <p>We look forward to welcoming you to our hotel. If you have any questions or need to make changes to your reservation, please don't hesitate to contact us at <b>info@acehospitalityng.com</b>.</p>
            <p>Thank you for choosing to stay with us!</p>
    </x-slot>
</x-email-layout>
