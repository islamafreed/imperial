<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('public/admin_assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('public/admin_assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Font Awesome 4.7 Css -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="{!! asset('public/admin_assets/plugins/sweetalert2/sweetalert2.css') !!}">

    <!-- Waves Effect Css -->
    <link href="{{asset('public/admin_assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('public/admin_assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('public/admin_assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('public/admin_assets/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('public/admin_assets/css/themes/all-themes.css')}}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">Imperial Estate</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    
    @include('admin_layouts.menu')

    <section class="content">
     <div class="container-fluid">

        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible">
              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        @yield('content')

     </div>
    </section>

    <!-- Jquery Core Js -->
    {{-- <script src="{{asset('public/admin_assets/plugins/jquery/new_jquery.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{asset('public/admin_assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    
    <!-- Select Plugin Js -->
    <script src="{{asset('public/admin_assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
   
    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('public/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('public/admin_assets/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('public/admin_assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/admin_assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('public/admin_assets/js/admin.js')}}"></script>
    <script src="{{asset('public/admin_assets/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('public/admin_assets/js/pages/index.js') }}"></script>
    <script src="{{asset('public/admin_assets/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Sweet Alert 2 js -->
<script type="text/javascript" src="{!! asset('public/admin_assets/plugins/sweetalert2/sweetalert2.min.js') !!}"></script>
<script>

@if (Session::has('error'))

swal(
    'Error',
    '{{ Session::get("error") }}',
    'error'
    );

@endif

@if (Session::has('success'))

swal(
    'Success',
    '{{ Session::get("success") }}',
    'success'
    );

@endif


</script>

  @yield('scripts')
</body>

</html>