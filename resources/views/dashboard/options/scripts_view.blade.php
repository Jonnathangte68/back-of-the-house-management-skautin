@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Frontend Scripting Functionality</h2>
        <br/>
        <div class="card">
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th style="width: 76%">File Name</th>
                    <td style="width: 8%;text-align:center;">Update</td>
                    <td style="width: 10%;text-align:center;">Page ID.</td>
                    <td style="width: 6%;text-align:center;">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr data-file-id="1">
                    <th style="width: 76%" scope="row">Landing buttons redirects</th>
                    <td style="width: 8%;text-align:center;">05/15/2019</td>
                    <td style="width: 10%;text-align:center;">1</td>
                    <td style="width: 6%;">
                        <i class="fa fa-pencil-square-o edit-field" aria-hidden="true" style="color:blue;cursor: pointer;"  data-toggle="tooltip" title="Edit"></i>
                        <i class="fa fa-trash delete-field" aria-hidden="true" style="color:red;cursor: pointer;margin-left:15px;" data-toggle="tooltip" title="Delete"></i>
                    </td>
                    </tr>
                </tbody>
            </table>
            <button id="add-new-script-file" class="btn btn-primary full-button">
                    (+) ADD NEW
                </button>
            </div>
        </div>
    </div>
    @include('dashboard.partials.popup_add_script_file')
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/scripts_view.css" /> 
@endsection

@section('scripts')
    @parent
    <script src="/assets/js/scripts_view.js"></script>
@endsection