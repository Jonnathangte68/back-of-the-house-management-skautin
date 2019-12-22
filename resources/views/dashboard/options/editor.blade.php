@extends('dashboard.content')

@section('title', 'Page Title')

@section('main_section')
    <div class="container center-dashboard">
        <!-- Landing Page -->
        <h2 class="title-container">Landing, Main or Principal website webpages.</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/lading_page_icon.png" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Landing
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Landing Page -->
        <!-- Registration -->
        <h2 class="title-container second-row">Registration -- Sign Up.</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/form-ui.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Sign Up Talent
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/form-ui.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Sign Up Recruiter
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END registration -->
        <!-- General Search -->
        <h2 class="title-container second-row">Search</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/search-animation.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            General Search
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/loc-search.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Smpl Search Rec
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/loc-search.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Smpl Search Tal
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END search -->
        <!-- Profile Pages -->
        <h2 class="title-container second-row">Profile Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/talent-profile.png" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Talent Profile
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/precc.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Recruiter Profile
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Profile Pages -->
        <!-- Jobs Pages -->
        <h2 class="title-container second-row">Vacant Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/officejobicon.png" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Rec. Vacant List
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/job-descriptions.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Vacant Detail
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Jobs Pages -->
        <!-- Connections Pages -->
        <h2 class="title-container second-row">Connections Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/connections.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Connect. Talent
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/connectionsmovement.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Conn. Recruiter
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Connections Pages -->
        <!-- Chat Pages -->
        <h2 class="title-container second-row">Chat Conversations Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/chat-talent.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Chat Talent
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/chat-recruiter.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Chat Recruiter
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Chat Pages -->
        <!-- Settings Pages -->
        <h2 class="title-container second-row">Settings Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/computer-settings.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Settings Talent
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/settings-navigaton.gif" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Settings Recruiter
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Settings Pages -->
        <!-- Action Pages -->
        <h2 class="title-container second-row">Action Pages</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/list182735728934.png" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Tals for recruiters
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/hiring-_facebook-_post_template.png" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">
                            Posted Jobs Rec
                            <a href="#" class="btn btn-primary edit-button">
                                <i class="fa fa-edit"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Action Pages -->
    </div>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="/assets/styles/general.css" />
    <link rel="stylesheet" href="/assets/styles/editor.css" />  
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" type="text/javascript"></script>
@endsection