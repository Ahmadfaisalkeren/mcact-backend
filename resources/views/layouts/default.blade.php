<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mcact Laravue</title>
    <meta name="description" content="Mcact Laravue">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style -->
    @include('includes.style')
</head>

<body>
    <!-- Sidebar -->
    @include('includes.sidebar')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header -->
        <!-- Navbar -->
        @include('includes.navbar')
        <div class="content">
           <!-- Content -->
           @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @stack('before-script')
    @include('includes.script')
    @method('after-script')

    <!--Local Stuff-->
    <!-- Script -->
</body>
</html>
