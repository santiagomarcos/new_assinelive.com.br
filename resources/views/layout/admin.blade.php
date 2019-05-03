<!DOCTYPE html>
<html>

<head>
    <title>Assine Live - Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        @include('components.admin._header')
        <div class="side-menu sidebar-inverse">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <div class="icon fa fa-paper-plane"></div>
                            <div class="title">Assine Live - Admin</div>
                        </a>
                        <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav">
                        @include('components.admin._menu')

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">
                @yield('content')
            </div>
        </div>
    </div>
    @include('components.admin._footer')
        <!-- Javascript Libs -->
        <script type="text/javascript" src="/js/admin.js"></script>
</div>
</body>

</html>
