<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Писатели</title>
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/offcanvas.css') }}" rel="stylesheet">

</head>

<body>

    @section('navigation')
    @include('navigation')
    @show


    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="jumbotron">

                    @section('maincontent')
                    @include('home')
                    @show

                </div>

            </div>
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

                @section('sidebar')
                <x-sidebar-menu />
                @show

            </div>
        </div>
        <footer>
        </footer>

    </div>

</body>

</html>