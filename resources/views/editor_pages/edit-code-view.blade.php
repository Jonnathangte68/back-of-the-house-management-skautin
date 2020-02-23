<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Script File</title>
        <link rel="stylesheet" href="/assets/styles/edit-code-view.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.6.2/src/toastify.js"></script>
    </head>
    <body>

        <div id="editor"></div>

        <!-- OPTIONS -->
        <button class="btn btn-primary custom-save-exit" onClick="saveContent()">Save</button>
        <button class="btn btn-primary custom-exit" onClick="closeEditor()">Close Editor</button>
            
        <script src="/assets/js/ace-builds-master/src-min/ace.js" type="text/javascript" charset="utf-8"></script>

        <!-- minifier dependencies -->
        <script src="/assets/UglifyJS2/lib/utils.js" ></script>
        <script src="/assets/UglifyJS2/lib/ast.js"></script>
        <script src="/assets/UglifyJS2/lib/minify.js"></script>
        <script src="/assets/UglifyJS2/lib/mozilla-ast.js"></script>
        <script src="/assets/UglifyJS2/lib/output.js"></script>
        <script src="/assets/UglifyJS2/lib/parse.js"></script>
        <script src="/assets/UglifyJS2/lib/propmangle.js"></script>
        <script src="/assets/UglifyJS2/lib/scope.js"></script>
        <script src="/assets/UglifyJS2/lib/sourcemap.js"></script>
        <script src="/assets/UglifyJS2/lib/transform.js"></script>
        <script src="/assets/UglifyJS2/lib/compress.js"></script>

        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.session.setMode("ace/mode/javascript");
            const initialContent = {!! $fileContent !!};
            if(initialContent) {
                let finalContent = JSON.parse(initialContent);
                // Replace content
                editor.setValue(finalContent);
            }

            function closeEditor() {
                window.history.back();
            }

            function saveContent() {
                const html = editor.getValue();
                const minifiedCode = minify(html).code;
                const data = {
                    file_name: {!! json_encode($file) !!},
                    content: html,
                    min_content: minifiedCode
                }
                axios({
                    method: "post",
                    url: "/update-script-file-content",
                    data: data
                }).then(function (response) {
                    Toastify({
                        text: "Changes have been saved!",
                        duration: 1500,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        backgroundColor: "#00a673",
                        className: "info-toast",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        onClick: function() {} // Callback after click
                    }).showToast();
                });
            }

        </script>
    </body>
</html>