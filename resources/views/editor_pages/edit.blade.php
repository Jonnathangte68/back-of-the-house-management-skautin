@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div id="gjs">
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/editor-edit.css" /> 
@endsection

@section('scripts')
    @parent
    <script>
        const page = '{{ $page }}';
    </script>
    <script src="/assets/js/editor-edit.js"></script>
@endsection