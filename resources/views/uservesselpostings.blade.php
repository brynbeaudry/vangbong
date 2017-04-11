@extends('layouts.app')
@section('scripts')
@endsection
@section('styles')
@endsection
@section('content')

    <div id="uservesselpostings">
        <!-- Banner -->
        <div id="banner-wrapper">
            <div id="banner" class="box container">
                <div class="row">
                    <div>
                        <h2>Van Bong Trader</h2>
                    </div>
                </div>
            </div>
        </div>






        
    {{--@if(count($postings) > 0 )--}}
            {{--foreach($posting in postings--}}
        <!-- Features -->
        @if(isset($uservessels))
            <div class="container">
                <h2>Bong Trade Posts</h2>
                @if(count($uservessels))
                    <ul>
                    @foreach($uservessels as $vessel)
                        <li>{{$vessel}}</li>
                    @endforeach
                    </ul>
                @else
                    <h2>NO POSTS</h2>
                @endif
            </div>
        @elseif(isset($title))
            @if(count($title))
                <div class="container">
                    <h2>{{$title}}</h2>
                    <p>{{$description}}</p>
            @else
                    <p>No description available</p>
            @endif
                </div>
        @endif
    </div>




@endsection
