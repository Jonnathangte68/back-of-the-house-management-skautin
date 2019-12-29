@extends('base.logged-in-structure')

@section('content')
    @include('dashboard.partials.sidebar')
    <section class="section-dashboard">
        @yield('main_section')
    </section>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/dashboard.css" /> 
    <link rel="stylesheet" href="/assets/styles/base.styles.css" /> 
    <link rel="stylesheet" href="/assets/styles/sidebar.css" />
@endsection

@section('scripts')
    @parent
    <script src="/assets/js/sidebar.js" type="text/javascript"></script>
@endsection