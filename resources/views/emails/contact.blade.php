<x-email-layout>
    <x-slot name="header">Enquiry/x-slot>
    <x-slot name="body">
        <p>Dear Team</p>
            <p>Below is the details </p>
            <table>
                <tr>
                    <td>Name: {{ $arr['fullname'] }}</td>
                    <td>Phone: {{$arr['phone']}}</td>
                    <td>Email: {{ $arr['email'] }}</td>
                </tr>


            </table>
             <div>
                <p>Message:</p>
                    {{ $arr['message'] }}
                </div>
    </x-slot>
</x-email-layout>
