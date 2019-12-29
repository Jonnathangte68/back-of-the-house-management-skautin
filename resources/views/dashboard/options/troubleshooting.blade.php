@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <h2 class="title-container">Troubleshooter</h2>
        <br/>
        <h3>Customer Messages</h3>
        <br/>
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/12/2019</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>+1 273-2831766</td>
                    <td>Complain about missing credentials</td>
                    <td><p class="long-and-truncated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ultrices ligula. Pellentesque vulputate iaculis justo non luctus. Morbi vehicula rhoncus aliquet. Morbi suscipit vitae tortor a pharetra. Morbi accumsan odio id velit ullamcorper ornare. Praesent tincidunt et velit eget facilisis. Suspendisse vel purus non tortor placerat rutrum. Integer lobortis aliquet imperdiet. Nullam facilisis metus vel ultrices vehicula. Aenean vitae orci nibh. Quisque in finibus ante. Cras at laoreet urna. In et pharetra risus. Aliquam pharetra orci quis ex iaculis sagittis. Donec nec elit orci. Aliquam eu felis gravida quam dignissim venenatis. Mauris pellentesque dui ipsum, ut dignissim nisi placerat sit amet. Aenean luctus fermentum nulla non lobortis. Mauris tristique urna et nibh pharetra, sit amet volutpat magna sollicitudin. Nullam bibendum ullamcorper ligula non congue. Fusce felis metus, viverra vitae justo vitae, luctus vestibulum nisi. Morbi consequat pretium lorem eu eleifend. Morbi nec vulputate libero, in malesuada felis. Nam molestie porta fermentum. Aenean ac suscipit odio. Phasellus vel eleifend ipsum. Praesent vel massa tincidunt, suscipit dui non, accumsan sapien.Vivamus quis commodo orci, vitae efficitur nunc. Maecenas rutrum mauris quis turpis consectetur pharetra. Nam ullamcorper neque sed augue gravida, ultricies sollicitudin nibh eleifend. Nunc ac dignissim odio. Quisque non mattis dolor. Sed maximus accumsan eros, non hendrerit tellus laoreet vel. Morbi in augue velit. Donec id dictum diam. Nunc faucibus erat quam, quis maximus ipsum dapibus posuere. Nulla nec velit iaculis, malesuada justo nec, dignissim nisl. Mauris bibendum facilisis elit quis pulvinar. Donec sit amet gravida orci. Nam nec tristique augue.Fusce gravida turpis sit amet metus laoreet ullamcorper. Maecenas interdum volutpat neque. Nulla et velit eu ante viverra pellentesque. Integer efficitur odio a mi auctor consequat. Pellentesque pretium tempus orci vel commodo. Morbi in lacinia velit, nec cursus nisl. Fusce ultrices, sapien non eleifend fringilla, ipsum leo consequat ante, eget consectetur massa ipsum a tortor. Donec at efficitur turpis, id tempor ex. Nunc nec lorem eros. Vivamus consequat facilisis leo et malesuada. Maecenas eget sodales quam. Vivamus laoreet leo elit, at feugiat massa ullamcorper et. Sed tristique, justo vitae vehicula maximus, lacus massa commodo ligula, sed pellentesque metus lacus ut quam. Mauris nec commodo sem. Praesent eget orci finibus, viverra ante a, scelerisque magna. Duis vehicula nisi lacinia fringilla eleifend.</p></td>
                    <td><a href="#">Details</a></td>
                </tr>
                <tr>
                    <td>12/12/2019</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>+1 273-2831766</td>
                    <td>Complain about missing credentials</td>
                    <td><p class="long-and-truncated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ultrices ligula. Pellentesque vulputate iaculis justo non luctus. Morbi vehicula rhoncus aliquet. Morbi suscipit vitae tortor a pharetra. Morbi accumsan odio id velit ullamcorper ornare. Praesent tincidunt et velit eget facilisis. Suspendisse vel purus non tortor placerat rutrum. Integer lobortis aliquet imperdiet. Nullam facilisis metus vel ultrices vehicula. Aenean vitae orci nibh. Quisque in finibus ante. Cras at laoreet urna. In et pharetra risus. Aliquam pharetra orci quis ex iaculis sagittis. Donec nec elit orci. Aliquam eu felis gravida quam dignissim venenatis. Mauris pellentesque dui ipsum, ut dignissim nisi placerat sit amet. Aenean luctus fermentum nulla non lobortis. Mauris tristique urna et nibh pharetra, sit amet volutpat magna sollicitudin. Nullam bibendum ullamcorper ligula non congue. Fusce felis metus, viverra vitae justo vitae, luctus vestibulum nisi. Morbi consequat pretium lorem eu eleifend. Morbi nec vulputate libero, in malesuada felis. Nam molestie porta fermentum. Aenean ac suscipit odio. Phasellus vel eleifend ipsum. Praesent vel massa tincidunt, suscipit dui non, accumsan sapien.Vivamus quis commodo orci, vitae efficitur nunc. Maecenas rutrum mauris quis turpis consectetur pharetra. Nam ullamcorper neque sed augue gravida, ultricies sollicitudin nibh eleifend. Nunc ac dignissim odio. Quisque non mattis dolor. Sed maximus accumsan eros, non hendrerit tellus laoreet vel. Morbi in augue velit. Donec id dictum diam. Nunc faucibus erat quam, quis maximus ipsum dapibus posuere. Nulla nec velit iaculis, malesuada justo nec, dignissim nisl. Mauris bibendum facilisis elit quis pulvinar. Donec sit amet gravida orci. Nam nec tristique augue.Fusce gravida turpis sit amet metus laoreet ullamcorper. Maecenas interdum volutpat neque. Nulla et velit eu ante viverra pellentesque. Integer efficitur odio a mi auctor consequat. Pellentesque pretium tempus orci vel commodo. Morbi in lacinia velit, nec cursus nisl. Fusce ultrices, sapien non eleifend fringilla, ipsum leo consequat ante, eget consectetur massa ipsum a tortor. Donec at efficitur turpis, id tempor ex. Nunc nec lorem eros. Vivamus consequat facilisis leo et malesuada. Maecenas eget sodales quam. Vivamus laoreet leo elit, at feugiat massa ullamcorper et. Sed tristique, justo vitae vehicula maximus, lacus massa commodo ligula, sed pellentesque metus lacus ut quam. Mauris nec commodo sem. Praesent eget orci finibus, viverra ante a, scelerisque magna. Duis vehicula nisi lacinia fringilla eleifend.</p></td>
                    <td><a href="#">Details</a></td>
                </tr>
                <tr>
                    <td>12/12/2019</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>+1 273-2831766</td>
                    <td>Complain about missing credentials</td>
                    <td><p class="long-and-truncated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ultrices ligula. Pellentesque vulputate iaculis justo non luctus. Morbi vehicula rhoncus aliquet. Morbi suscipit vitae tortor a pharetra. Morbi accumsan odio id velit ullamcorper ornare. Praesent tincidunt et velit eget facilisis. Suspendisse vel purus non tortor placerat rutrum. Integer lobortis aliquet imperdiet. Nullam facilisis metus vel ultrices vehicula. Aenean vitae orci nibh. Quisque in finibus ante. Cras at laoreet urna. In et pharetra risus. Aliquam pharetra orci quis ex iaculis sagittis. Donec nec elit orci. Aliquam eu felis gravida quam dignissim venenatis. Mauris pellentesque dui ipsum, ut dignissim nisi placerat sit amet. Aenean luctus fermentum nulla non lobortis. Mauris tristique urna et nibh pharetra, sit amet volutpat magna sollicitudin. Nullam bibendum ullamcorper ligula non congue. Fusce felis metus, viverra vitae justo vitae, luctus vestibulum nisi. Morbi consequat pretium lorem eu eleifend. Morbi nec vulputate libero, in malesuada felis. Nam molestie porta fermentum. Aenean ac suscipit odio. Phasellus vel eleifend ipsum. Praesent vel massa tincidunt, suscipit dui non, accumsan sapien.Vivamus quis commodo orci, vitae efficitur nunc. Maecenas rutrum mauris quis turpis consectetur pharetra. Nam ullamcorper neque sed augue gravida, ultricies sollicitudin nibh eleifend. Nunc ac dignissim odio. Quisque non mattis dolor. Sed maximus accumsan eros, non hendrerit tellus laoreet vel. Morbi in augue velit. Donec id dictum diam. Nunc faucibus erat quam, quis maximus ipsum dapibus posuere. Nulla nec velit iaculis, malesuada justo nec, dignissim nisl. Mauris bibendum facilisis elit quis pulvinar. Donec sit amet gravida orci. Nam nec tristique augue.Fusce gravida turpis sit amet metus laoreet ullamcorper. Maecenas interdum volutpat neque. Nulla et velit eu ante viverra pellentesque. Integer efficitur odio a mi auctor consequat. Pellentesque pretium tempus orci vel commodo. Morbi in lacinia velit, nec cursus nisl. Fusce ultrices, sapien non eleifend fringilla, ipsum leo consequat ante, eget consectetur massa ipsum a tortor. Donec at efficitur turpis, id tempor ex. Nunc nec lorem eros. Vivamus consequat facilisis leo et malesuada. Maecenas eget sodales quam. Vivamus laoreet leo elit, at feugiat massa ullamcorper et. Sed tristique, justo vitae vehicula maximus, lacus massa commodo ligula, sed pellentesque metus lacus ut quam. Mauris nec commodo sem. Praesent eget orci finibus, viverra ante a, scelerisque magna. Duis vehicula nisi lacinia fringilla eleifend.</p></td>
                    <td><a href="#">Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" /> 
    <link rel="stylesheet" href="/assets/styles/troubleshooting.css" /> 
@endsection

@section('scripts')
    @parent
@endsection