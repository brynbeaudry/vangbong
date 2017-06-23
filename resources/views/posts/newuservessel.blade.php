@extends('layouts.app')

@section('content')
<style>
</style>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="container">
                    <div class="row">
                        <div class="float-left">
                          <span>Post a FAT RIP or a SICK BONG</span>
                          <br />
                          <span id="mobile-warning" class="text-warning text-center"></span>
                        </div>
                        <div class="float-right">
                          <i class="fa fa-camera fa-2x float-right" id="camera-new"></i>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel-body">

                    <form id="new-bong-form" class="" action="/vessels" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="title" value="" placeholder="Title">
                    <input type="text" name="description" value="" placeholder="description">
                    <input type="hidden" name="ownerId" value="{{Auth::user()->id}}">
                    <input type="file" id="jimage" class="hidden" accept="image/*" name="image" value="">
                    <input type="hidden" id='img-data' name="img" value="" />
                    <p class="text-danger" id="imageerror"></p>
                    <input type="submit" name="submit" value="Submit"><br />

                    </form>
                    <div id="result" class="result">
                        <p></p>
                    </div>
                   <div id="exif" class="exif" style="display:none;">
                      <h2>Exif meta data</h2>
                      <p id="thumbnail" class="thumbnail" style="display:none;"></p>
                      <table></table>
                  </div>
                    <script src="{{asset('js/jsli_ex.js')}}"></script>
                    <script>
                      $(document).ready(function() {

                      /**
                      * Determine the mobile operating system.
                      * This function returns one of 'iOS', 'Android', 'Windows Phone', or 'unknown'.
                      *
                      * @returns {String}
                      */
                      /*
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
                        $('#mobile-warning').html('<large>An iPhone!</large><br>Please take the photo in <big>Landscape</big> or <big>Upload</big>');
                      }
                      */


                      $('i#camera-new').on('click', function(event){
                        event.preventDefault();
                        $('#jimage').trigger('click');
                      });



                      //dropChangeHandler is from mit include
                      /*
                      $('#jimage')
                        .on('change', dropChangeHandler);
                        */




                    });
                   </script>
                </div>
            </div>
        </div>
    </div>
@endsection
