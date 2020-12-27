<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Akij admin</title>
    <!-- base:css -->

    @include('partials.allcss')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-left navbar-brand-wrapper d-flex align-items-center justify-content-between">
                <a class="navbar-brand brand-logo" href="{{url('/')}}">Home</a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="https://www.akij.net/wp-content/uploads/2019/02/logo-60px.svg" alt="logo" /></a>
                <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav">
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                            id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline mx-0"></i>
                            <p class="notification-ripple notification-ripple-bg">
                                <span class="ripple notification-ripple-bg"></span>
                                <span class="ripple notification-ripple-bg"></span>
                                <span class="ripple notification-ripple-bg"></span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link d-flex">
                            {{-- <div class="profile-name">
                                <p class="name">
                                    <strong>{{ Auth::user()->name}}</strong>

                            <p class="designation">
                                Your joined : {{ Auth::user()->created_at->diffForHumans() }}
                            </p>
                        </div> --}}
        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">
                <i class="mdi mdi-shield-check menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-view-array menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('category.create') }}">Add
                            Category</a></li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">Post
                    List</a>
        </li>
        </ul> --}}

    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#subCategory" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-view-array menu-icon"></i>
            <span class="menu-title">Sub Category</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="subCategory">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('subCategory.create') }}">Add
                        Sub Category</a></li>
                {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('subCategory.index') }}"> Sub Category
                List</a>
    </li> --}}
    </ul>

    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-view-array menu-icon"></i>
            <span class="menu-title">Post</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="post">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('post.create') }}">Add
                        Post</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('post.index') }}">Post
                        List</a></li>
            </ul>

        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tag" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-view-array menu-icon"></i>
            <span class="menu-title">Tag</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tag">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.tag.create') }}">Add
                        Tag</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.tag.index') }}">Tag
                        List</a></li>
            </ul>
        </div>
    </li>

    {{-- 
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="mdi mdi-pencil menu-icon"></i>
            <span class="menu-title">Country</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.country.create') }}">Add
    Country</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.country.index') }}">Country List</a>
    </li>
    </ul>
    </div>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#author" aria-expanded="false" aria-controls="editors">
            <i class="mdi mdi-pencil menu-icon"></i>
            <span class="menu-title">Author</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="author">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.author.create') }}">Add
                        Author</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.author.index') }}">Author
                        List</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#fileupload" aria-expanded="false" aria-controls="editors">
            <i class="mdi mdi-pencil menu-icon"></i>
            <span class="menu-title">File Upload</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="fileupload">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.fileupload.create') }}">Add
                        File Upload</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.fileupload.index') }}">File Upload
                        List</a></li>
            </ul>
        </div>
    </li>
    </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @yield('adminContent')
        </div>
    </div><!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    </div>


    @include('partials.alljs')
    @yield('script')
</body>

</html>