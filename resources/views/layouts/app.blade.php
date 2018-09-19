<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div id="app" class="container-fluid" style="padding: 0;">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <h1 class="navbar-brand" style="margin-bottom: 0">Kevin JANIKY</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">{{ trans('app.home') }}<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ trans('app.portfolio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">{{ trans('app.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">{{ trans('app.blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">{{ trans('app.contact') }}</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ trans('app.language') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                @endforeach
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">{{ trans('app.login') }}</a>
                    </li>
                </ul>

            </nav>
        </header>

        <main >
            @yield('content')
        </main>
        <footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </footer>
    </div>
</body>
</html>
