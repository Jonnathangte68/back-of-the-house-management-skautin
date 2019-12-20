@extends('base.logged-in-structure')

@section('styles')
    <link rel="stylesheet" href="/assets/styles/dashboard.css" /> 
    <link rel="stylesheet" href="/assets/styles/base.styles.css" /> 
    <link rel="stylesheet" href="/assets/styles/sidebar.css" />
@endsection

@section('content')
    @section('navigation.sidebar')
    @show
    <div class="section-dashboard">
        @yield('content')
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/login.js" type="text/javascript"></script>
@endsection