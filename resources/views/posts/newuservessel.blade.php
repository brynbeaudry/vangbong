@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post a FAT RIP or a SICK BONG</div>

                <div class="panel-body">

                    <form class="" action="/vessels" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="title" value="" placeholder="Title">
                    <input type="text" name="description" value="" placeholder="description">
                    <input type="hidden" name="ownerId" value="{{Auth::user()->id}}">
                    <input type="file" id="jimage" name="image" value="">
                    <input type="submit" name="submit" value="Submit">
                    <img id="uploadedimage" width="500px" />
                    </form>
                    <script>
                       $(document).ready(function() {
                           document.getElementById("jimage").onchange = function () {
                               var reader = new FileReader();

                               reader.onload = function (e) {
                                   if (e.total > 250000) {
                                       $('#imageerror').text('Image too large');
                                       $jimage = $("#jimage");
                                       $jimage.val("");
                                       $jimage.wrap('<form>').closest('form').get(0).reset();
                                       $jimage.unwrap();
                                       $('#uploadedimage').removeAttr('src');
                                       return;
                                   }
                                   $('#imageerror').text('');
                                   document.getElementById("uploadedimage").src = e.target.result;
                               };
                               reader.readAsDataURL(this.files[0]);
                           };
                       });
                   </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
