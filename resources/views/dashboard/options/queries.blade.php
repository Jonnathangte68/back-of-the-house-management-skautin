@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">DB Management - Query executor</h2>
        <br/>
        <div class="row">
            <div class="col-sm-3">
                <div class="table-container">
                    <h5 class="table-title">Tables</h5>
                    <hr/>
                    <br/>
                </div>
            </div>
            <div class="col-sm-9 detail-container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#view_data">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#query_runner">Run Query</a>
                    </li>
                </ul>
                <br/>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="view_data">
                        <table class="table" id="data-results"></table>
                    </div>
                    <div class="tab-pane container fade" id="query_runner">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ex: SELECT * FROM recruiters WHERE id > 3;" id="query">
                            <hr/>
                            <table class="table" id="query-results"></table>
                        </div>
                    </div>
                </div>
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