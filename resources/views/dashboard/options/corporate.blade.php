@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <p>Corporate</p>
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/labels.css" /> 
@endsection

@section('scripts')
    @parent
@endsection