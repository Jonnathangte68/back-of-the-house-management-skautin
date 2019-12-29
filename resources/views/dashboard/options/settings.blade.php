@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Global Settings - Advanced Settings</h2>
        <br/>
        <div class="card">
            <div class="card-body">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ssh_enabled" name="ssh_enabled">
                    <label class="custom-control-label" for="ssh_enabled">SSH Enabled:</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="name">Website Domain:</label>
                    <input type="text" class="form-control" placeholder="https://" id="website_domain">
                </div>
                <div class="form-group">
                    <label for="name">API Domain:</label>
                    <input type="text" class="form-control" placeholder="https://" id="api_domain">
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="app_access_enabled">
                    <label class="custom-control-label" for="app_access_enabled">App Access Enabled</label>
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="website_access_enabled">
                    <label class="custom-control-label" for="website_access_enabled">Website Access Enabled</label>
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="website_access_enabled">
                    <label class="custom-control-label" for="website_access_enabled">Website Access Enabled</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="payment_gateway">Payment Gateway URL:</label>
                    <input type="text" class="form-control" placeholder="https://" id="payment_gateway">
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="advertisement_enabled">
                    <label class="custom-control-label" for="advertisement_enabled">Advertisement Enabled</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="whitelist">Domains Whitelist:</label>
                    <textarea class="form-control" id="whitelist">
                        *
                        http://localhost:8000
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="blacklist">Domains Blacklist:</label>
                    <textarea class="form-control" id="blacklist">
                        http://china.ch
                    </textarea>
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="email_enabled">
                    <label class="custom-control-label" for="email_enabled">Email Enabled</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="email_outgoing_domain">Outgoing Email Domain:</label>
                    <input type="text" class="form-control" placeholder="support.skautin@gmail.com" id="email_outgoing_domain">
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="email_enabled">
                    <label class="custom-control-label" for="email_enabled">SMS Enabled</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="outgoing_phone_number">Outgoing Phone Number:</label>
                    <input type="text" class="form-control" placeholder="+52(686)4052570" id="outgoing_phone_number">
                </div>
                <div class="form-group">
                    <label for="login_max">Max intents Login:</label>
                    <input type="text" class="form-control" placeholder="" id="login_max">
                </div>
                <br/>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="slow_login" name="slow_login">
                    <label class="custom-control-label" for="slow_login">Login Throttling:</label>
                </div>
                <br/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="captcha_enabled">
                    <label class="custom-control-label" for="captcha_enabled">Captcha Enabled</label>
                </div>
                <br/>
                <hr/>
                <br/>
                <div class="row">
                    <div class="col-sm-3">
                        <button id="erase-data-button" name="erase-data-button" class="btn btn-danger">ERASE<br/>I'm sure delete it!</button>
                    </div>
                    <div class="col-sm-9">
                        <p class="warning-text-red"><b>WARNING: </b> This would erase all content on the database.</p>
                        <p class="warning-text">The deleted information will be permanently deleted and cannot be recovered.</p>
                    </div>
                </div>
                <br/>
                <hr/>
                <br/>
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
    <link rel="stylesheet" href="/assets/styles/settings.css" /> 
@endsection

@section('scripts')
    @parent
@endsection