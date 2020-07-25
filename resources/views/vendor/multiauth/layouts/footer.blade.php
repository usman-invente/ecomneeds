<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>

</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('public/admin/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('public/admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('public/admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('public/admin/dist/js/pages/dashboard2.js')}}"></script>

<script src="https://js.pusher.com/6.0/pusher.min.js"></script>

<script>
    Pusher.logToConsole = true;
    let csrf = document.head.querySelector('meta[name="csrf-token"]').content;
    var pusher = new Pusher('5468902bd733125f2c23', {
        authEndpoint: '{{url('/channels/authorize')}}',
        cluster: 'ap2',
        encrypted: true,
        auth: {

            headers: {

                'X-CSRF-Token': csrf

            }

        }


    });

    var channel = pusher.subscribe('private-Bitfumes.Multiauth.Model.Admin.' + 1);

    channel.bind('Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', function (data) {

        $("#append_notif").prepend('    <a href="#" class="dropdown-item">\n' +
            '<div class="media">\n' +
            '<img src="' + data.src + '" alt="User Avatar"\n' +
            'class="img-size-50 mr-3 img-circle">\n' +
            '<div class="media-body">\n' +
            ' <p class="dropdown-item-title">\n' +
            'You have received new order from <b>' + data.name + '</b>\n' +
            '<span class="float-right text-sm text-danger"><i\n' +
            'class="fas fa-star"></i></span>\n' +
            '</p>\n' +
            '\n' +
            '<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>\n' +
            '</div>\n' +
            '</div>\n' +
            '</a>');

        //play notification beep
        var url = "{{asset('/public/sound/notify_beep.mp3')}}";
        const audio = new Audio(url);
        audio.play();
    });


</script>

@yield('datables-js')
</body>
</html>
