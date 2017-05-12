<!DOCTYPE html>
<html>
    <head>

        <title>HealthEPet</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Google Font Open Sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

		<!-- Personalized Stylesheet -->
        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body>

    @if (Auth::check())
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-paw" aria-hidden="true"> Menu </i>
                    </button>
                        
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ action('PetsController@index') }}">HealthEPet</a>
                        </li>
<!--                         @if (Auth::user()->user_type === 'vet')
                        <ul>
                            <nav class="navbar navbar-left">
                              <form class="" action="" method="POST">
                                <input class="form-control searchBar" type="text" placeholder="Search">
                              </form>
                            </nav>
                        </ul>
                        @endif -->
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/auth/logout">Logout</a></li>
                        <li><a href="{{ action('UsersController@show') }}">Account</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif


    @yield('content')


    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/788edc112b.js"></script>

    <!-- Personalized Scripts -->
    <script src="/js/main.js"></script>
    <script src="/js/velocity.min.js"></script>

    </body>
</html>


