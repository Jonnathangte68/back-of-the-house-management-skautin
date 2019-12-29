@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Diary</h2>
        <br/>
        <div class="info-box">
            <p><i class="fa fa-info-circle"></i> INSTRUCTIONS: </p>
            <p>
                Here you can place important information to and I would kept it stored so you can review anytime later.<br/>
                For Example: You can store information like, clean latest deleted user on May 22 or add a new box under the sign up page<br/>
                I would never lose any of this information unless you deleted from the diary.
            </p>
        </div>
        <input id="hidden-color" type="hidden" value="">
        <div class="todo-box">
            <h5 class="empty-message">Nothing to show...</h5>
        </div>
        @include('dashboard.partials.calendar-content')
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/notes.css" />
@endsection

@section('scripts')
    @parent
    <script src="/assets/js/notes.js" type="text/javascript"></script>
    <script src="/assets/js/todo.js" type="text/javascript"></script>
@endsection