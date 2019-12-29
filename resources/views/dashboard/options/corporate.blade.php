@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Corporate Information</h2>
        <br/>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Company Name:</label>
                    <input type="text" class="form-control" placeholder="" id="name">
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="" id="title">
                </div>
                <div class="form-group">
                    <label for="phone-1">Phone 1:</label>
                    <input type="text" class="form-control" placeholder="" id="phone-1">
                </div>
                <div class="form-group">
                    <label for="phone-2">Phone 2:</label>
                    <input type="text" class="form-control" placeholder="" id="phone-2">
                </div>
                <div class="form-group">
                    <label for="email-1">Email 1:</label>
                    <input type="text" class="form-control" placeholder="" id="email-1">
                </div>
                <div class="form-group">
                    <label for="email-2">Email 2:</label>
                    <input type="text" class="form-control" placeholder="" id="email-2">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" placeholder="" id="address"></textarea>
                </div>
                <button id="company-update" class="btn btn-primary full-button">
                    SAVE
                </button>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/corporate.css" /> 
@endsection

@section('scripts')
    @parent
@endsection