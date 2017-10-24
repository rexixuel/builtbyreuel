<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Built by Reuel </title>

        <!-- Fonts -->        
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/vendor/twbs/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bbr.css') }}" rel="stylesheet" type="text/css">

        <!-- JS  -->
        <script src="{{ asset('css/vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js')}}"></script>
        <script src="{{ asset('css/vendor/twbs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('css/vendor/twbs/bootstrap/js/dist/util.js')}}"></script>
        <script src="{{ asset('css/vendor/twbs/bootstrap/js/dist/carousel.js')}}"></script>
        <script src="{{ asset('css/vendor/twbs/bootstrap/js/dist/scrollspy.js')}}"></script>


    </head>
    <body class="container-fluid" data-spy="scroll" data-target="#navSpy" data-offset="50">
        <header>
            <div>
              <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand"> 
                  <img src="{{ asset('images/microsite-logo-placeholder.png') }}" height="40px" />
                </div>

                <div class="mr-auto align-self-center">
                  <a href="{{ url('https://www.github.com/rexixuel') }}"> <img src="{{ asset('images/github.svg') }}" width="20px" class="ml-auto"/> </a>                
                  <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/kalibrr.png') }}" width="20px" class="ml-auto"/> </a>
                  <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/monster.png') }}" width="20px" class="ml-auto"/> </a>
                  <a href="{{ url('https://www.jobstreet.com/') }}"><img src="{{ asset('images/jobstreet.jpg') }}" width="20px" class="ml-auto rounded"/> </a>
                  <a href="{{ url('https://www.linkedin.com/in/mark-reuel-cabal-89266a148/') }}"><img src="{{ asset('images/linkedin.png') }}" width="20px" class="ml-auto"/> </a>
                </div>

                <ul class="navbar-nav flex-row align-items-center" id="navSpy">
                  <li class="nav-item"> 
                    <a href="#home" class="nav-link"> Home </a> 
                  </li>                  
                  <li class="nav-item">
                   / 
                  </li>
                  <li class="nav-item">
                    <a href="#projects" class="nav-link"> Projects </a> 
                  </li>
                  <li class="nav-item">
                   / 
                  </li>                  
                  <li class="nav-item"> 
                    <a href="#about" class="nav-link"> About </a> 
                  </li>
                  <li class="nav-item">
                   / 
                  </li>
                  <li class="nav-item"> 
                    <a href="#contact" class="nav-link"> Contact </a>
                  </li>
                </ul>
              </nav>        
            </div>
        </header>
        <div>
          @yield('onePageContent')        
        </div>


<!--         <footer>
          <div class="footer">
            <ul class="nav">
              <li class="nav-item"> 
                <a href="/" class="nav-link"> Home </a> 
              </li>                  
              <li class="nav-item">
                <a href="#projects" class="nav-link"> Projects </a> 
              </li>
              <li class="nav-item"> 
                <a href="#about" class="nav-link"> About </a> 
              </li>
              <li class="nav-item"> 
                <a href="#contact" class="nav-link"> Contact </a>
              </li>
            </ul>
          </div>
        </footer> -->
    </body>
</html>
