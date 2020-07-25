@component('mail::message')

    Hi {{ $details['name'] }},
    <p>Your order has been received successfully and we thank you.</p>
    <p>Here is your order id : <b>{{ $details['orderid'] }}</b></p>
    <p>You can in touch with us using live chat here <a href="{{config('app.url')}}">Live Chat</a></p>

    <p>Regards</p>
    <p>ECOMNEEDS</p>



@endcomponent
