@extends('base.structure')

@section('content')
    {!! $content !!}

    <script>
        const editor = grapesjs.init({
            // Indicate where to init the editor. You can also pass an HTMLElement
            container: '#gjs',
            // Get the content for the canvas directly from the element
            // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
            fromElement: true,
            // Size of the editor
            height: '300px',
            width: 'auto',
            // Disable the storage manager for the moment
            storageManager: false,
            // Avoid any default panel
            panels: { defaults: [] },
        });
    </script>

    <script>
        $('#0x817').click(function() {
            const htmlContent = editor.getHtml();
            atomic('store-website', {
                method: 'POST',
                data: {
                    code: "landing2", 
                    content: htmlContent 
                }
            })
                .then(function (response) {
                    console.log(response.data); // xhr.responseText
                    console.log(response.xhr);  // full response
                })
                .catch(function (error) {
                    console.log(error.status); // xhr.status
                    console.log(error.statusText); // xhr.statusText
                });
        });
    </script>
@endsection