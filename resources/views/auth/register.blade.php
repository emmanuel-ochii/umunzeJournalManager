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
        <div class="bg-image" style="background-image: url('media/photos/photo12@2x.jpg');">
          <div class="row g-0 justify-content-center bg-black-75">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                    <div class="col-md-12" style="display: block; margin-left: auto; margin-right: auto; width: 100%;">
                        <img class="authLogo" src="{{asset('/media/logo/bida_logo.png')}}" alt="logo"  width="550"/>
                        <img class="authLogoMobile mb-2" src="{{asset('/media/logo/rsz_bida_logo.png')}}" alt="logo"  width="200"/>
                    </div>
                  <a class="link-fx fw-bold fs-1" href="{{route('welcome')}}">
                    <span class="text-umunze-green">Journal</span><span class="text-umunze-brown">Manager</span>
                  </a>
                  <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-6">
                    <form class="js-validation-signup" action="{{ route('register') }}" method="POST">
                        @csrf
                      <div class="py-3">
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Username">

                          @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                          <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email...">

                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                        <div class="mb-4">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms">
                            <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-umunze-brown">
                          <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                        </button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('login')}}">
                            <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                          </a>
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('welcome')}}">
                            <i class="fa fa-home opacity-50 me-1"></i> Go Home
                          </a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END Sign Up Form -->
              </div>
            </div>
            <!-- END Main Section -->
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
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
  </body>
</html>
