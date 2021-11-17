<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Journal Manager | Federal College of Education (Technical) Umunze')</title>

    <meta name="description" content="Journal Manager | Federal College of Education (Technical) Umunze">
    <meta name="author" content="pixelcave">
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

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/plugins/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/plugins/simplemde/simplemde.min.css')}}">
    @stack('links')

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('/css/dashmix.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/added.css')}}">


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->

    <div id="page-container" class="enable-page-overlay side-scroll page-header-fixed page-header-dark page-header-glass main-content-narrow" style="min-height: 0;">

        <!-- Header -->
        <header id="page-header">
          <!-- Header Content -->
          <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
              <!-- Toggle Sidebar -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
              <button type="button" class="btn btn-umunze-green" >
                <a href="/" class="text-white"><i class="fa fa-fw fa-home"></i></a>
              </button>
              <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
              <!-- User Dropdown -->
              <div class="dropdown d-inline-block">
                @guest
                    @if (Route::has('login'))
                        <button type="button" class="btn btn-umunze-green">
                            <a href="{{route('login')}}" class="text-white"><i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">Login</span>
                            <i class="fa fa-fw fa-sign-in-alt opacity-50 ms-1 d-none d-sm-inline-block"></i></a>
                        </button>
                    @endif
                    @else
                    <button type="button" class="btn btn-umunze-green" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="#" class="text-white"><i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i></a>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                          <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                          </div>
                          <div class="p-2">
                            <a class="dropdown-item" href="{{route('user.viewProfile')}}">
                              <i class="far fa-fw fa-user me-1"></i> Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                              <span><i class="far fa-fw fa-envelope me-1"></i> Journals</span>
                              <span class="badge bg-primary rounded-pill">3</span>
                            </a>
                            <div role="separator" class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="{{route('user.editProfile')}}" data-toggle="layout" data-action="side_overlay_toggle">
                              <i class="far fa-fw fa-building me-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                          </div>
                        </div>
                    </div>
                @endguest
              </div>
              <!-- END User Dropdown -->

            </div>
            <!-- END Right Section -->
          </div>
          <!-- END Header Content -->
        </header>
        <!-- END Header -->


    @yield('content')



    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
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
