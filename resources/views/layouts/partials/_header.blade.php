<?php

        use app\Toolz;

$thisPage =  Request::path()
?>

<header class="container">
    <div id="first-row" class="row" itemscope="" itemtype="https://schema.org/Organization">
        <div id="logo" class="col-md-3">
            <a href="{{url('/')}}" itemprop="url" title="ToolsZone.ro - Magazin online de scule profesionale"><img src="{{asset('images/store_logo.gif')}}" alt="ToolsZone.ro - Magazin online de scule profesionale" title=" ToolsZone.ro - Magazin online de scule profesionale " width="235" height="108" itemprop="logo"></a>        </div>
        <div class="col-md-9">
            <div class="col-md-8 phone">
                <div class="phone col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <span class="glyphicon glyphicon-earphone"></span>
                    <span class="tel">+4 0368 004 674</span>
                </div>
                <div class="phone col-lg-4 col-md-4 col-sm-4 col-xs-4 pspace">
                    <span>|</span>
                    <span class="tel"> +4 0748 106 900</span>
                </div>
                <div class="phone col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <span>|</span>
                    <span class="tel"> +4 0727 387 799</span>
                </div>
            </div>
        </div><!--md-9-->
        <div class="col-md-9">
            <div class="col-md-8 searchbox">
                <form name="quick_find" action="{{url('cautare-avansata')}}" method="get">                <div class="input-group">
                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="keywords" id="searchField" class="form-control searchfield ui-autocomplete-input" placeholder="Cauta in peste 110 mii de produse.." autocomplete="off">                    <div class="input-group-btn searchfield">
                            <button type="submit" class="btn btn-danger">Cauta</button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="{{url('cautare-avansata')}}">Cautare avansata</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div id="cartnclient" class="col-md-4 no-padding">
                <div id="buttons">
                    <div class="btn-group btn-xl btn-group-justified">
                        @include('layouts.partials._auth_header')
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span> <span>Cosul meu<br>
              <strong>Nu ai produse</strong>
            </span>
                            </button>
                        </div>
                    </div>

                </div><!--buttons-->
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <form class="form-horizontal" name="login" id="login" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Autentificare:</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="user" class="control-label">Adresa de email</label>
                                        <input id="user" class="form-control" type="text" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="parola" class="control-label">Parola:</label>
                                        <input type="password" class="form-control" name="password" id="parola">
                                    </div>



                                    <div>
                                        <a class="forgotten" href="{{url('parola-uitata')}}">Ai uitat parola?</a>
                                    </div>
                                    <div>
                                        Nu ai cont? Fa-ti un <a class="create" href="{{url('register')}}">cont nou</a>
                                    </div>

                                </div>
                                <div class="modal-footer">

                                    <div class="col-xs-6 col-sm-6 col-md-6 stanga">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">
                                                Tine-ma minte
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">

                                        <button type="button" class="btn btn-labeled btn-success" id="loginBttn">
                                            <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Login</button>
                                        <button type="button" class="btn btn-labeled btn-danger" data-dismiss="modal">
                                            <span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Inchide</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="second-row" class="row">
        <div class="main-nav-group">
            <nav id="main-nav" class="navbar navbar-default nav-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">

                            <li class="active"><a href="{{url('/')}}">Acasa</a></li>
                            <li class=""><a href="{{url('despre')}}">Despre ToolsZone</a></li>
                            <li class=""><a href="{{url('cum-comand')}}">Cum comand</a></li>
                            <li class=""><a href="{{url('contact')}}">Contact</a></li>
                            <li><a href="#" onclick="alert('Forumul temporat dezactivat,\nVa rugam sa reveniti');return false;">Forum</a></li>
                            <li class="dropdown">
                                <a class=" dropdown-toggle" data-toggle="dropdown" href="">Contul meu <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class=""><a href="{{url('favorite')}}">Lista favorite</a></li>
                                    <li class=""><a href="{{url('comenzile-mele')}}">Comenzile mele</a></li>
                                    <li class=""><a href="{{url('agenda')}}">Agenda</a></li>
                                    <li class="divider"></li>
                                    <li class=""><a href="{{url('logoff')}}">Logout</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{url('comanda-rapida')}}">Comanda rapida</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right navbar_r_bg">
                            <li class=""><a href="{{url('oferte-speciale')}}">Oferte speciale</a></li>
                            <li class=""><a href="{{$siteurl}}/solduri-c-2017123009.html">Solduri</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
            <div class="subnav">
                <nav id="specialisti-nav" class="navbar navbar-default nav-bottom navbar_b_bg" role="navigation">
                    <div class="container-fluid">
                        <!--<ul class="nav navbar-nav navbar-left">
                        <li class="categorii"><a href="">Categorii produse</a></li>
                    </ul>-->
                        <ul class="nav navbar-nav navbar-left">
                            <li class=" "><a href="{{$siteurl}}/instalatori-c-2017123010.html">Instalatori</a></li><li class=" "><a href="{{$siteurl}}/constructori-c-2017123011.html">Constructori</a></li><li class=" "><a href="{{$siteurl}}/electricieni-c-2017123012.html">Electricieni</a></li><li class=" "><a href="{{$siteurl}}/mecanici-c-2017123013.html">Mecanici</a></li><li class=" "><a href="{{$siteurl}}/electronisti-c-2017123014.html">Electronisti</a></li><li class=" "><a href="{{$siteurl}}/tamplari-c-2017123015.html">Tamplari</a></li><li class=" "><a href="{{$siteurl}}/agricultori-c-2017124403.html">Agricultori</a></li><li class=" "><a href="{{$siteurl}}/sudori-c-2017124404.html">Sudori</a></li><li class=" "><a href="{{$siteurl}}/topografi-c-2017124405.html">Topografi</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>