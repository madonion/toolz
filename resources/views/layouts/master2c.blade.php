<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{$title or 'ToolsZone.ro Magazin online de scule si unelte profesionale'}}</title>
        <link href="<?=Request::root()?>/css/app.css" rel="stylesheet">
        <link href="<?=Request::root()?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" class="index">

        @include('layouts.partials._header')
    
        @include('layouts.partials._top_navigation')


        <div class="container">
            <div class="row">
                @include('pages.sidebar_left')

                    <div class="col-md-9 no-padding">

                        @include('layouts.partials._breadcrumbs')

                        @yield('content')

                    </div>


            </div>
        </div>

        @include('layouts.partials._footer')
    
    </body>
</html>