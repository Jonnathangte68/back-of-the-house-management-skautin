@extends('dashboard.content')

@section('dashboard.sidebar')
    @parent
<div class="sidebar-container">
    <div class="sidebar-header">
        <img class="sidebar-img" src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png"/>
        <span class="company-title">Skautin</span>
    </div>
    <a class="no-style-link" href="http://google.com" >
        <div class="option-container">
            <p class="option-text option-selected"><i class="fa fa-area-chart" aria-hidden="true"></i> General & Stats</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com" >
        <div class="option-container">
            <p class="option-text"><i class="fa fa-paint-brush" aria-hidden="true"></i> Editor</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com" >
        <div class="option-container">
            <p class="option-text"><i class="fa fa-file-text" aria-hidden="true"></i> Labels</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com">
        <div class="option-container">
            <p class="option-text"><i class="fa fa-university" aria-hidden="true"></i> Corporate Information</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com">
        <div class="option-container">
            <p class="option-text"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i> Query</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com">
        <div class="option-container">
            <p class="option-text"><i class="fa fa-trademark" aria-hidden="true"></i> Advertisement</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com">
        <div class="option-container">
            <p class="option-text"><i class="fa fa-cog" aria-hidden="true"></i> Settings</p>
        </div>
    </a>
    <a class="no-style-link" href="http://google.com">
        <div class="option-container">
            <p class="option-text"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Notes</p>
        </div>
    </a>
</div>
@endsection