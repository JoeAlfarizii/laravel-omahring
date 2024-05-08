@section('layoutContent')

@extends('client/layouts/commonLayout' )

@include('client/layouts/sections/navbar/navbar')

<!-- Sections:Start -->
<div class="main-content">
    @yield('content')
</div>
<!-- / Sections:End -->

@include('client/layouts/sections/footer/footer')
@endsection