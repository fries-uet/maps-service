<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @yield('title')
    <link rel="icon" href="{{ url('/') }}/assets/img/favicon.ico" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet">
    @yield('css')

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Fries Maps</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{{ route('bot') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Bot <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('bot') }}">List Q&A</a></li>
                        <li><a href="{{ route('bot.chat') }}">Chat</a></li>
                        <li><a href="{{ route('bot.setup') }}">Setup</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Traffic <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('traffic') }}">All notification</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Documentation <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('docs.v2.bot') }}">Bot</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('download.beta') }}">Try now <span class="glyphicon glyphicon-phone"></span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">GitHub <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="//github.com/fries-uet/maps-android">Fork Android</a></li>
                        <li><a href="//github.com/fries-uet/maps-service">Fork Service</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
@yield('script')
</body>
</html>