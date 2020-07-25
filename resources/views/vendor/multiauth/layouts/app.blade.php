@auth
@include('multiauth::layouts.header')

@include('multiauth::layouts.navbar')

@yield('content')

@include('multiauth::layouts.footer')

@else

@include('multiauth::layouts.header')

@yield('content')

@endauth