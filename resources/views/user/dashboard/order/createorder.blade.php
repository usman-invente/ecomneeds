@extends('user.dashboard.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">




                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="upload_img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        @if (Session::has('file-error'))
                        <div class="alert alert-warning text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('file-error') }}</p>
                        </div>
                        @endif
                        <form method="post" action="{{route('storeimgsession')}}" enctype="multipart/form-data"
                            class="dropzone" id="dropzone">
                            @csrf
                        </form>


                    </div>
                </div>
            </div>

            <a class="btn btn-info" href="{{route('previewimages')}}">Next</a>


        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content" style="display:none;" id="ins_div">
        <form method="POST" action="{{route('createorder')}}">
            {{csrf_field()}}
            <div id="preview"></div>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection

@section('store-img')
<script src="{{asset('public/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<script>
function uploadImage(event) {


    var name = event.target.files[0].name;
    console.log(name);
    var reader = new FileReader();
    reader.addEventListener("load", function() {
        if (this.result && localStorage) {
            window.localStorage.setItem(name, this.result);
        } else {
            alert();
        }
    });
    reader.readAsDataURL(event.target.files[0]);
}

function showImages() {
    var img = document.getElementById("img");
    var peopleHTML = "";
    var parentDiv = document.getElementById('preview');
    if (parentDiv.contains(img)) {
        parentDiv.prepend(img);
    } else if (parentDiv.contains(img) == false) {
        for (let i = 0; i < window.localStorage.length; i++) {
            let res = window.localStorage.getItem(window.localStorage.key(i));
            if (res.includes('data')) {
                var image = new Image();
                image.src = res;
                image.setAttribute('id', 'img');
                peopleHTML += "<div class='container'>";
                peopleHTML += "<div class='row'>";
                peopleHTML += "<div class='col-md-4'>";
                peopleHTML += "<img class='img-responsive' src='" + res +
                    "'  style='width:300px;height:300px'><br><br>";
                peopleHTML += "</div>";
                peopleHTML += "<div class='col-md-6'>";
                peopleHTML +=
                    "<textarea class='form-control'  name='instruction[]' style='width:100%'>Please Provide Instructions</textarea>";
                peopleHTML += "<br>";
                peopleHTML += "<label>Select Level</label>";
                peopleHTML += "<br>";
                peopleHTML += "<input type='radio' required value='2.00' name='level[" + i +
                    "]'>  Basic ($2.00 per image)<br>";
                peopleHTML += "<input type='radio' required value='5.00' name='level[" + i +
                    "]'>  Pro  ($5.00 per image)<br>";
                peopleHTML += "<input type='radio' required value='10.00' name='level[" + i +
                    "]'> High End ($10.00 per image)<br>";
                peopleHTML += "<input type='radio'  class='usman' data-name='show' data-id='" + i +
                    "'required value='10.00' name='level[" + i + "]'> Extra ($10.00 per image)<br>";
                peopleHTML +=
                    "<input type='radio' data-name='show Manipulations & Restorations ($25.00 per image)' required value='25.00' name='level[" +
                    i + "]'> Photo Manipulations & Restorations ($25.00 per image)<br>";
                peopleHTML += "<hr>";
                peopleHTML += "<label>Color Correction</label>";
                peopleHTML += "<select  name='colorcorrection[" + i + "]' class='form-control' required>";
                peopleHTML += "<option value=''>---</option>";
                peopleHTML += "<option value='Yes'>Yes</option>";
                peopleHTML += "<option value='No'>No</option>";
                peopleHTML += "</select>";
                peopleHTML += "<br>";
                peopleHTML += "<div  id='sr" + i + "' ";
                peopleHTML += "<label>Skin Retouching</label>";
                peopleHTML += "<select name='skinretouching[" + i + "]' class='form-control' required>";
                peopleHTML += "<option value=''>---</option>";
                peopleHTML += "<option value='Yes'>Yes</option>";
                peopleHTML += "<option value='No'>No</option>";
                peopleHTML += "</select>";
                peopleHTML += "</div>";
                peopleHTML += "<br>";
                peopleHTML += "<label>Return Formats</label>";
                peopleHTML += "<select name='returnformat[" + i + "]' class='form-control'>";
                peopleHTML += "<option value='JPG (High Res)'>JPG (High Res)</option>";
                peopleHTML += "<option value='NoTIFF'>TIFF</option>";
                peopleHTML += "<option value='PSD (without layers)'>PSD (without layers)</option>";
                peopleHTML += "<option value='PNG'>PNG (without layers)</option>";
                peopleHTML += "</select>";
                peopleHTML += "<br>";
                peopleHTML += "<label>Psd with Layer</label><br>";
                peopleHTML += "<input type='checkbox'  name='psdwithlayer[" + i + "]'> price + 100% (double price)";
                peopleHTML += "</div>";
                peopleHTML += "</div>";
                peopleHTML += "</div>";
                peopleHTML += "</div>";
                peopleHTML += "<br><br><br>";

            }





        }
        peopleHTML += "<div class='row' style='background:	#D3D3D3;padding-top: 28px;padding-bottom: 28px'>";
        peopleHTML += "<div class='col-md-12'>";
        peopleHTML += "<textarea class='form-control' name='comment' style='width:100%'>Comments</textarea><br>";
        peopleHTML += "<label>Select Free Reference Photo</label><br>";
        peopleHTML += "<input type='file' class='form-control'>";
        peopleHTML += "</div>";
        peopleHTML += "</div>";
        peopleHTML += "</div>";
        peopleHTML += "<br>";
        peopleHTML += "<button type='submit' class='btn btn-info'>Create Order</button>";
        peopleHTML += "<br><br>";
        $(preview).html(peopleHTML);
    }



    // $("input[type='radio']").change(function() {

    // if ($(".usman").prop("checked")) {
    //         var id = $(this).data('id');
    //         $('#sr'+id).show();
    //     }else{
    //         var id = $('.usman').data('id');
    //         $('#sr'+id).hide();

    //     }
    // });

}
</script>
<script type="text/javascript">
$(document).ready(function() {

    $(".btn-success").click(function() {
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click", ".btn-danger", function() {
        $(this).parents(".control-group").remove();
    });

});
</script>



@endsection
