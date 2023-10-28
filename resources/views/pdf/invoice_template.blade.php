<div class="container-fluid">
    <div class="page-container">
        {{-- Page 1
        <span class="page"></span>
        of
        <span class="pages"></span> --}}
    </div>
    @php
        $checking_total = 0;
    @endphp
    <div class="logo-container">
        <img style="height: 2rem" src="{{ asset('assets/img/' . $websiteInfo->logo) }}">
    </div>

    <table class="invoice-info-container">
        <tr>
            <td rowspan="2" class="client-name">
                {{$booking->customer_name}}
            </td>
            <td rowspan="2" class="client-name2">
                {{-- {{$booking->customer_name}} --}}
            </td>

        </tr>
        <tr>
            <td>
                {{-- 123 Main Street --}}
            </td>
        </tr>
        <tr>
            <td>
                {{$booking->customer_phone}}
            </td>
            <td>
                Invoice Date: <strong>{{\Carbon\Carbon::parse($booking->created_at)->format('d-M,Y')}}</strong>

            </td>
        </tr>
        <tr>
            <td>
                {{$booking->customer_email}}

            </td>
            <td>
                Booking Ref: <strong>{{$booking->booking_number}}</strong>
            </td>
        </tr>
    </table>

    <table class="line-items-container">

        <thead>
            <tr>
                <th class="heading-quantity">s/n</th>
                {{-- <th class="heading-quantity">Qty</th> --}}
                <th class="heading-description">Description</th>
                <th class="heading-date">Date</th>
                {{-- <th class="heading-description">Night</th> --}}
                <th class="heading-price">Price</th>
                <th class="heading-subtotal">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($booking->roomBookingItem as $key=> $item )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->quantity}} {{$item->name}} for {{$item->night}} Night</td>
                <td>{{$item->arrival_date}} {{$item->departure_date}}</td>
                {{-- <td>{{$item->night}}</td> --}}
                <td>N {{number_format($item->price)}}</td>
                {{-- <td>{{$item->quantity}}</td>
                <td>{{$item->night}}</td> --}}
                @php
                $sub = $item->price*$item->quantity*$item->night;
                @endphp
                <td>N {{number_format($sub)}}</td>
            </tr>
            @empty

            @endforelse
            @forelse ($booking->roomBookingChecking as $key=> $item )
            <tr>
                {{-- <td>{{$loop->iteration}}</td> --}}
                <td></td>
                {{-- <td></td> --}}
                <td>{{ucwords($item->reason)}}</td>
                <td>{{$item->checked_in}} {{$item->checked_out}}</td>
                {{-- <td></td> --}}
                {{-- <td>N {{number_format($item->price)}}</td> --}}
                <td></td>

                <td>N {{number_format($item->price)}}</td>
            </tr>
            @empty

            @endforelse

        </tbody>
    </table>
    <hr>
    <table>
        <tr>
            <td style="width:50%">

            </td>
            <td style="width:10%"></td>
            <td>
                <table class="table table-striped">
            @php
            $discount = $booking->discount;
            $total = $booking->bookingPayments->grand_total;
            $total_discount =1;
            $grand_total = 0;
            if($discount){
            $total_discount = $discount->sum('value');
            $grand_total = $total - (($total_discount * $total)/100);

            }else{
            $grand_total = $details->bookingPayments->grand_total;
            }


            @endphp
                    <tbody>
                        <tr class="summary-row">

                            <td class="summary-title">SubTotal</td>
                            <td class="largew total2">N {{number_format($booking->bookingPayments->total)}}</td>
                        </tr>
                        <tr class="summary-row">
                            <td class="summary-title">
                                Taxes ({{$websiteInfo->booking_consumption_tax}}%)

                            </td>
                            <td> N {{number_format($booking->bookingPayments->tax)}} </td>
                        </tr>
                        <tr class="summary-row">
                            <td class="summary-title">
                                VAT ({{$websiteInfo->booking_vat}}%)

                            </td>
                            <td> N {{number_format($booking->bookingPayments->vat)}} </td>
                        </tr>

                        <tr class="summary-row">
                            <td class="summary-title">
                                TOTAL

                            </td>
                            <td> N {{number_format($total)}}</td>
                        </tr>
                        <tr class="summary-row">
                            <td class="summary-title">
                                APPLIED DISCOUNT (%)

                            </td>
                            <td> {{$total_discount}}% </td>
                        </tr>
                        <tr class="summary-row">
                            <td class="summary-title">GRAND TOTAL</td>
                            <td><b>N {{number_format($grand_total)}}</b>
                            </td>

                        </tr>

                        {{-- <tr class="summary-row">
                            <td class="summary-title">TOTAL PAID</td>
                            <td>N {{number_format($booking->bookingPayments->history->sum('amount'))}}</td>

                        </tr>
                        <tr>
                            <td class="summary-title">BALANCE</td>
                            <td>N {{number_format($balance)}}</td>

                        </tr> --}}
                    </tbody>
                </table>
            </td>
        </tr>

    </table>
    @php
    $balance = $grand_total - $booking->bookingPayments->history->where('is_confirmed',1)->sum('amount');
    @endphp
    <table class="line-items-container has-bottom-border summary-amount">
        <thead>
            <tr>
                <th>Total Due</th>
                <th>Total Paid</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="large">
                    N {{number_format($booking->bookingPayments->grand_total)}}
                </td>
                <td class="large total">N {{number_format($booking->bookingPayments->history->where('is_confirmed',1)->sum('amount'))}}</td>
                <td class="large total">N {{number_format($balance)}}</td>
            </tr>
        </tbody>
    </table>
    <div style="font-size:10px">
        <h6>Note</h6>
        {!!$websiteInfo->booking_terms!!}
    </div>
    <hr>
    <div class="footer">
        <div class="footer-info" style="padding-top:1rem">
            <span>{{$websiteInfo->support_email}}</span> |
            <span>{{$websiteInfo->support_contact}}</span> |
            <span>{{$websiteInfo->address}}</span>
        </div>
        <div class="footer-thanks">
            {{-- <img src="https://github.com/anvilco/html-pdf-invoice-template/raw/main/img/heart.png" alt="heart">
            --}}
            <span>Thank you!</span>
        </div>
    </div>
</div>
