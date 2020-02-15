@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Frontend Scripting Functionality</h2>
        <br/>
        <div class="card">
            <div class="card-body">
                <p>Test.</p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/queries.css" /> 
@endsection

@section('scripts')
    @parent
@endsection