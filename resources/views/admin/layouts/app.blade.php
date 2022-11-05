<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Upzet - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon"  href="{{ asset('images/favicon.ico') }}"/>

    <!-- jvectormap -->
    <link href="{{ asset('libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css'"/>
   <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>

  </head>

    <body data-sidebar="dark">      
      <div id="layout-wrapper">
        @include('admin.layouts.navigation')
        @include('admin.layouts.sidebar')
        <!-- Page Content -->
        <div class="main-content">
          <div class="page-content">
            <div class="container-fluid">
              <main>
                {{ $slot }}
              </main>
            </div>
          </div>
        </div>
        <div class="rightbar-overlay"></div>
      </div>
      
    </body>

    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts js -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
