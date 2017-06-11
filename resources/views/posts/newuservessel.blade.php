@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <span>Post a FAT RIP or a SICK BONG</span>
                  <br />
                  <span id="mobile-warning">Post a FAT RIP or a SICK BONG</span>
                </div>
                <div class="panel-body">

                    <form class="" action="/vessels" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="title" value="" placeholder="Title">
                    <input type="text" name="description" value="" placeholder="description">
                    <input type="hidden" name="ownerId" value="{{Auth::user()->id}}">
                    <input type="file" id="jimage"  accept="image/*" name="image" value="" required>
                    <p class="text-danger" id="imageerror"></p>
                    <input type="submit" name="submit" value="Submit"><br />
                    <img id="uploadedimage" class="img-responsive" />
                    </form>
                    <script>
                       $(document).ready(function() {

                      /**
                      * Determine the mobile operating system.
                      * This function returns one of 'iOS', 'Android', 'Windows Phone', or 'unknown'.
                      *
                      * @returns {String}
                      */
                      function getMobileOperatingSystem() {
                       var userAgent = navigator.userAgent || navigator.vendor || window.opera;

                           // Windows Phone must come first because its UA also contains "Android"
                         if (/windows phone/i.test(userAgent)) {
                             return "Windows Phone";
                         }

                         if (/android/i.test(userAgent)) {
                             return "Android";
                         }

                         // iOS detection from: http://stackoverflow.com/a/9039885/177710
                         if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                             return "iOS";
                         }

                         return "unknown";
                      }

                      if(getMobileOperatingSystem()==="iOS"){
                        $('#mobile-warning').html('An iPhone!<br>Please take the photo in <big>Landscape</big> or <big>Upload</big>');
                      }

                           document.getElementById("jimage").onchange = function () {
                               var reader = new FileReader();

                               reader.onload = function (e) {
                                 //Max 8 MB
                                   if (e.total > 8000000) {
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
@endsection
