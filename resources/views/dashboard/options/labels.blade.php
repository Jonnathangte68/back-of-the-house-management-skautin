@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Dictionaries</h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="box-file">
                        <b>Code: </b><span>en</span><br/>
                        <b>Lang: </b><span>English</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-file">
                        <b>Code: </b><span>fi</span><br/>
                        <b>Lang: </b><span>Finnish</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-file">
                        <b>Code: </b><span>es</span><br/>
                        <b>Lang: </b><span>Spanish</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-file">
                        <b>Code: </b><span>sv</span><br/>
                        <b>Lang: </b><span>Swedish</span>
                    </div>
                </div>
                <div class="col-sm-3 top-space">
                    <div class="box-file">
                        <b>Code: </b><span>no</span><br/>
                        <b>Lang: </b><span>Norwegian</span>
                    </div>
                </div>
                <div class="col-sm-3 top-space">
                    <div class="box-file">
                        <b>Code: </b><span>da</span><br/>
                        <b>Lang: </b><span>Danish</span>
                    </div>
                </div>
                <div class="col-sm-3 top-space">
                    <div class="box-file">
                        <b>Code: </b><span>de</span><br/>
                        <b>Lang: </b><span>German</span>
                    </div>
                </div>
                <div class="col-sm-3 add-new-language top-space">
                    <i id="add-language-btn" class="fa fa-plus-square plus-add-language-icon"></i>
                </div>
            </div>
        <h2 class="title-container top-space">Dictionary entries</h2>
        <div id="accordion">

            <div class="card">
                <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    Landing Page
                </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <!-- Inputs -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-001</span>
                        </div>
                        <input type="text" class="form-control" value="Welcome to my page">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-002</span>
                        </div>
                        <input type="text" class="form-control" value="Login">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-003</span>
                        </div>
                        <input type="text" class="form-control" value="Sign Up">
                    </div>
                    <!-- END inputs -->
                    <button class="btn btn-primary button-add">ADD</button>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    Collapsible Group Item #2
                </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <!-- Inputs -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-001</span>
                        </div>
                        <input type="text" class="form-control" value="Welcome to my page">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-002</span>
                        </div>
                        <input type="text" class="form-control" value="Login">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-003</span>
                        </div>
                        <input type="text" class="form-control" value="Sign Up">
                    </div>
                    <!-- END inputs -->
                    <button class="btn btn-primary button-add">ADD</button>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Collapsible Group Item #3
                </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <!-- Inputs -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-001</span>
                        </div>
                        <input type="text" class="form-control" value="Welcome to my page">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-002</span>
                        </div>
                        <input type="text" class="form-control" value="Login">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">sm-003</span>
                        </div>
                        <input type="text" class="form-control" value="Sign Up">
                    </div>
                    <!-- END inputs -->
                    <button class="btn btn-primary button-add">ADD</button>
                </div>
                </div>
            </div>

        </div>
    </div>

    <div class="change-device-container">
        <button class="top-web-device"><i class="fa fa-desktop icon-option-change-device" aria-hidden="true"></i><br/><span class="text-menu-option-change-device">Web</span></button>
        <br/>
        <button class="down-mobile-device"><i class="fa fa-mobile icon-option-change-device" aria-hidden="true"></i><br/><span class="text-menu-option-change-device">Mobile</span></button>
    </div>

    @include('dashboard.partials.popup_add_language')
    @include('dashboard.partials.popup_add_language_key')

@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/labels.css" /> 
@endsection

@section('scripts')
    @parent
    <script>
        $('.button-add').click(function() {
            $('#add_language_label').modal('show');
        });

        $('#add-language-btn').click(function() {
            $('#add_language_modal').modal('show');
        });
    </script>
@endsection