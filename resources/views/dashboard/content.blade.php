@extends('base.logged-in-structure')

@section('content')
    @include('dashboard.partials.sidebar')
    <section class="section-dashboard">
        @yield('main_section')
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="/assets/styles/dashboard.css" /> 
    <link rel="stylesheet" href="/assets/styles/base.styles.css" /> 
    <link rel="stylesheet" href="/assets/styles/sidebar.css" />
@endsection

@section('scripts')
    <script src="/assets/js/login.js" type="text/javascript"></script>
@endsection