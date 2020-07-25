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
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@yield('datables-js')
@yield('store-img')
<script>
    $(document).ready(function(){
        $('.usefor').on('change', function() {
            var id = $(this).find(':selected').attr('data-id');
            if(this.value=="web"){
                $(".for"+id).html("<label>Return Formate</label>\n" +
                    "<select name='returnformat["+id+"]' class='form-control'>\n" +
                    "                                            <option value='JPG'>JPG</option>\n" +
                    "                                            <option value='PNG'>PNG</option>\n" +
                    "                                            <option value='GIF'>GIF</option>\n" +
                    "                                        </select>");
            }
            if(this.value=="print"){
                $(".for"+id).html("<label>Return Formate</label>\n" +
                    "<select name='returnformat["+id+"]' class='form-control'>\n" +
                    "                                            <option value='PSD'>PSD</option>\n" +
                    "                                            <option value='TIFF'>TIFF</option>\n" +
                    "                                            <option value='JPG'>JPG</option>\n" +
                    "                                            <option value='PNG'>PNG</option>\n" +
                    "                                            <option value='EPS'>EPS</option>\n" +
                    "                                        </select>");
            }

        });
        $("#ins").click(function(){
            $("#ins_div").show();
            $("#upload_img").hide();
            showImages();
        });

        $("#img_upload").click(function(){
            $("#ins_div").hide();
            $("#upload_img").show();
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        var $form         = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">
    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time + file.name;
        },
        removedfile: function(file)
        {
            var name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: '{{ url("image/delete") }}',
                data: {"_token":"{{ csrf_token() }}",filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        success: function(file, response) {
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }
    };
</script>
<script>
    $(document).ready(function(){
        $(".removefile").click(function(){
            var file = $(this).data('file');
            $.ajax({
                type: 'POST',
                url: '{{ url("image/delete") }}',
                data: {"_token":"{{ csrf_token() }}",filename: file},
                success: function (data){
                    location.reload();
                },
                error: function(e) {
                    console.log(e);
                }});
        });
    });
</script>
{{-- <script src="https://js.pusher.com/6.0/pusher.min.js"></script>--}}

{{-- <script>--}}
{{--     Pusher.logToConsole = true;--}}

{{--     var pusher = new Pusher('5468902bd733125f2c23', {--}}
{{--     });--}}
{{--         cluster: 'ap2'--}}

{{--     var channel = pusher.subscribe('private-App.User.1');--}}
{{--     channel.bind('Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', function(data) {--}}
{{--         alert(JSON.stringify(data));--}}
{{--     });--}}
{{-- </script>--}}
@yield('clearsorage')

</body>
</html>
