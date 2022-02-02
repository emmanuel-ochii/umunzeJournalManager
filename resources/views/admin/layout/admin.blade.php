<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Journal Manager | Federal College of Education (Technical) Umunze')</title>

        <meta name="description" content="Journal Manager | Federal College of Education (Technical) Umunze">
        <meta name="author" content="Tenece">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Journal Manager | Federal College of Education (Technical) Umunze">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Journal Manager | Federal College of Education (Technical) Umunze">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('/media/favicons/favicon.ico')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/media/favicons/android-icon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/media/favicons/apple-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{asset('/css/dashmix.min.css')}}">
        @stack('styles')
        <link rel="stylesheet" href="{{asset('/css/added.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="/css/themes/xwork.min.css"> -->
        <!-- END Stylesheets -->
    </head>
  <body>
    <!-- Page Container -->

    <div id="page-container" class="sidebar-o sidebar-dark side-scroll page-header-fixed main-content-boxed">

      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
          <div class="content-header bg-black-10">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{route('admin.dashboard')}}">
              D<span class="opacity-75">x</span>
            </a>
            <!-- END Logo -->
          </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->

        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
          <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{route('admin.dashboard')}}">
              FCE<span class="opacity-75">Umunze</span>
              <span class="fw-normal">Journal</span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-lg-none">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Actions -->
          <div class="content-side content-side-full text-center bg-black-10">
            <div class="smini-hide">
              <img class="img-avatar" src="{{asset('/media/avatars/avatar15.jpg')}}" alt="">
              <div class="mt-2 fw-semibold">{{ Auth::user()->name }}</div>
              <div class="mb-1 text-capitalize fw-normal" style="font-size: 13px;">Administrator</div>
              <a class="text-white-50 me-1" href="javascript:void(0)">
                <i class="fa fa-fw fa-user-md"></i>
              </a>
              <a class="text-white-50 me-1" href="javascript:void(0)">
                <i class="fa fa-fw fa-cog"></i>
              </a>
              <a class="text-white-50" href="javascript:void(0)">
                <i class="fa fa-fw fa-sign-out-alt"></i>
              </a>
            </div>
          </div>
          <!-- END Side Actions -->

          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="">
                  <i class="nav-main-link-icon fa fa-hospital"></i>
                  <span class="nav-main-link-name">Overview</span>
                </a>
              </li>
              <li class="nav-main-heading">Manage</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-folder"></i>
                  <span class="nav-main-link-name">Categories</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('category.create')}}">
                      <span class="nav-main-link-name">Add New Category</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('category.index')}}">
                      <span class="nav-main-link-name">All Categories</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-book-open"></i>
                  <span class="nav-main-link-name">Journals</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('admin.allJournal')}}">
                      <span class="nav-main-link-name">All Journals</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">Edited</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">Published</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">Pending</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-users"></i>
                  <span class="nav-main-link-name">Users</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">All Users</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">Active</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Settings</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-user-circle"></i>
                  <span class="nav-main-link-name">Profile Overview</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                  <span class="nav-main-link-name">Edit Profile</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-lock"></i>
                  <span class="nav-main-link-name">Password Update</span>
                </a>
              </li>
              <li class="nav-main-heading">Help</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-book"></i>
                  <span class="nav-main-link-name">Knowledge Base</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-main-link-icon fa fa-sign-out-alt"></i>
                  <span class="nav-main-link-name">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div>
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->



            <!-- Search form in larger screens -->
            <div class="d-none d-lg-inline-block">
              Welcome Admin!
            </div>
            <!-- END Search form in larger screens -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div>

            <!-- Shortcuts Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-shortcuts-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-th-large"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-shortcuts-dropdown">
                <div class="bg-image" style="background-image: url('/media/photos/photo21.jpg');">
                  <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
                    <div class="fs-4">Quick Links</div>
                    <div class="fs-6 fw-normal text-white-75">Shortcuts</div>
                  </div>
                </div>
                <div class="row g-0 bg-body-extra-light push">
                  <div class="col-6">
                    <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                      <div class="block-content block-content-full ratio ratio-4x3">
                        <div class="d-flex justify-content-center align-items-center">
                          <div>
                            <i class="fa fa-2x fa-book text-xeco"></i>
                            <div class="fs-sm fw-semibold mt-2 text-uppercase">Knowledge</div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                      <div class="block-content block-content-full ratio ratio-4x3">
                        <div class="d-flex justify-content-center align-items-center">
                          <div>
                            <i class="fa fa-2x fa-book-open text-xsmooth"></i>
                            <div class="fs-sm fw-semibold mt-2 text-uppercase">Journals</div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="block block-transparent block-link-pop text-center mb-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      <div class="block-content block-content-full ratio ratio-4x3">
                        <div class="d-flex justify-content-center align-items-center">
                          <div>
                            <i class="fa fa-2x fa-sign-out-alt text-xsmooth"></i>
                            <div class="fs-sm fw-semibold mt-2 text-uppercase">Logout</div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Shortcuts Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
      </header>
      <!-- END Header -->


      @yield('content')

      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-0">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                Powered <i class="fa fa-laptop-code text-danger"></i> by <a class="fw-semibold" href="https://tenece.com" target="_blank">Tenece Professional Services</a>
              </div>
              <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                <a class="fw-semibold" href="#" target="_blank">FCE Umunze</a> &copy; <span data-toggle="year-copy"></span>
              </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at /_js/main/app.js
    -->
    <script src="{{asset('/js/dashmix.app.min.js')}}"></script>
    @stack('scripts')
  </body>
</html>

