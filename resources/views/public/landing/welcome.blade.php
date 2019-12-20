@extends('base.structure')

@section('styles')
    <link rel="stylesheet" href="/assets/styles/login.css" /> 
    <link rel="stylesheet" href="/assets/styles/base.styles.css" /> 
@endsection

@section('content')
    <form onsubmit="loginMethod(); return false;">
        <div class="login-box">
            <img src="/assets/images/admin-profile.png" class="image-user" />
            <h2 class="title-login">Administrator Login</h2>
            <ul class="error-bag"></ul>
            <input type="text" name="username" id="username" placeholder="jhon.doe@email.com" class="login-input" />
            <br>
            <input type="password" name="password" id="password" placeholder="•••••••••••••••••••••" class="login-input" />
            <br>
            <button type="button" class="btn-login">Enter</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/assets/js/login.js" type="text/javascript"></script>
@endsection