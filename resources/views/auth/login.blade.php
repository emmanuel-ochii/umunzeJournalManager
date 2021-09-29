<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Journal Manager | Federal College of Education (Technical) Umunze </title>

    <meta name="description" content="Journal Manager | Federal College of Education (Technical) Umunze ">
    <meta name="author" content="Journal Manager | Federal College of Education (Technical) Umunze ">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Journal Manager | Federal College of Education (Technical) Umunze ">
    <meta property="og:site_name" content="Journal Manager | Federal College of Education (Technical) Umunze ">
    <meta property="og:description" content="Journal Manager | Federal College of Education (Technical) Umunze ">
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
    <link rel="stylesheet" id="css-main" href="{{asset('/css/added.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->

    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image login-bg">
          <div class="row g-0" style="background-color: rgba(151, 59, 13, 0.5)">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                    <div class="col-md-12" style="display: block; margin-left: auto; margin-right: auto; width: 100%;">
                        <img class="authLogo" src="{{asset('./media/logo/bida_logo.png')}}" alt="logo"  width="550"/>
                        <img class="authLogoMobile mb-2" src="{{asset('./media/logo/rsz_bida_logo.png')}}" alt="logo"  width="200"/>
                    </div>
                  <a class="link-fx fw-bold fs-1" href="{{route('login')}}">
                    <span class="text-umunze-green">Journal</span><span class="text-umunze-brown">Manager</span>
                  </a>
                  <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-6">

                    @if( session('success'))
                        <div class="alert alert-danger show mb-2" role="alert">{{ session('success') }}</div>
                    @endif
                    
                    @if (session('error'))
                    <div class="alert alert-danger show flex items-center mb-2" role="alert"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
                            {{ session('error') }}
                    </div>
                    @endif

                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                        @csrf

                      <div class="py-3">
                        <div class="mb-4">
                          <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">

                          @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-umunze-brown">
                          <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                        </button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                            @if (Route::has('password.request'))
                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
                                    <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot password
                                </a>
                                {{-- <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="signup.html">
                                    <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                </a> --}}
                            @endif
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END Sign In Form -->
              </div>
            </div>
            <!-- END Main Section -->

            <!-- Meta Info Section -->
            <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
              <div class="p-3">
                <p class="display-4 fw-bold text-white mb-3">
                  Welcome to FCE Umunze Journals
                </p>
                <p class="fs-lg fw-semibold text-white-75 mb-0">
                  Copyright &copy; <span data-toggle="year-copy"></span>
                </p>
              </div>
            </div>
            <!-- END Meta Info Section -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at /_js/main/app.js
    -->
    <script src="/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="/js/pages/op_auth_signin.min.js"></script>
  </body>
</html>
