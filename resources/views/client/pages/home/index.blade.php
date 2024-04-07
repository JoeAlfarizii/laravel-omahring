@extends('client/layouts/layout')

@section('title', 'Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
@endsection

@section('page-style')
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
@endsection

@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection

@section('content')
    <h1 class="text-2xl font-bold underline text-clifford">
        Hello world!
    </h1>
    <div class="lg:content-auto">
        <!-- ... -->
    </div>
@endsection

@section('page-script')
    
@endsection