<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Script File</title>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .custom-save-exit {
        position: absolute;
        top: 5%;
        right: 10%;
        background-color: #36629B;
        border-color: #36629B;
        color: #FFFFFF;
        font-weight: bold;
        font-size: 0.9em;
        padding: 15px;
        cursor: pointer;
    }
    .custom-exit {
        position: absolute;
        top: 5%;
        right: 1%;
        background-color: #FB0303;
        border-color: #FB0303;
        color: #FFFFFF;
        font-weight: bold;
        font-size: 0.9em;
        padding: 15px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div id="editor">
    {!! $fileContent !!}
</div>

<!-- OPTIONS -->
<button class="btn btn-primary custom-save-exit">Save</button>
<button class="btn btn-primary custom-exit">Close Editor</button>
    
<script src="/assets/js/ace-builds-master/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");
</script>
</body>
</html>