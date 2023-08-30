<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login to Eveger</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/toastr.css') }}">


    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <script src="{{ asset('assets/vendor/js/jquery.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('assets/vendor/js/feather.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/toastr.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="d-flex pb-4 justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  
                  <span class="app-brand-text demo text-body fs-2 fw-bolder centurygothic-bold" style="color: black !important">ev<span style="color: rgb(239, 90, 74)">e</span>ger</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Eveger</h4>
              <p class="mb-4">Begin your best event managing experience!</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('login_authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <div class="d-flex justify-content-start gap-1">

                    <label for="username" class="form-label @error('username')
                      text-error @enderror @if (Session::has('login_error')) text-error @endif">Username</label>
                  @error('username')
    <div class="text-error fst-italic"> - {{ $message }}</div>
@enderror
                  @if (Session::has('login_error'))
<div class="text-error fst-italic"> - Login or password is invalid</div>
@endif
                </div>
                  <input
                    type="text"
                    class="form-control @error('username') is-invalid @enderror @if (Session::has('login_error')) is-invalid @endif"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    value="{{ old('username') }}"
                    autofocus
                  />
                  
                </div>
                
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-start gap-1">
                    <label class="form-label @error('password')
                      text-error @enderror @if (Session::has('login_error')) text-error @endif" for="password">Password</label>
                    @error('password')
    <div class="text-error fst-italic"> - {{ $message }}</div>
@enderror
                    @if (Session::has('login_error'))
<div class="text-error fst-italic"> - Login or password is invalid</div>
@endif
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password') is-invalid @enderror @if (Session::has('login_error')) is-invalid @endif"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    
                  </div>
                </div>
                <div class="mb-3">
                  
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>

              <p class="text-center">
                <span>Don't have account?</span>
                <a href="{{ route('register_index') }}">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    

    
  </body>
</html>
