<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Journal Manager | Federal College of Education (Technical) Umunze </title>

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
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class=" enable-page-overlay side-scroll page-header-fixed page-header-dark page-header-glass main-content-narrow">

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
                <button type="button" class="btn btn-umunze-green">
                  <a href="{{route('login')}}" class="text-white"><i class="fa fa-fw fa-user d-sm-none"></i>
                  <span class="d-none d-sm-inline-block">Login</span>
                  <i class="fa fa-fw fa-sign-in-alt opacity-50 ms-1 d-none d-sm-inline-block"></i></a>
                </button>
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
