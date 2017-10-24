<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Built by Reuel </title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/vendor/twbs/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bbr.css') }}" rel="stylesheet" type="text/css">
        <style>

        </style>
    </head>
    <body class="container-fluid">
        <header>
            <div>
              <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand mr-auto"> 
                  <img src="{{ asset('images/microsite-logo-placeholder.png') }}" height="40px" />
                </div>
                <ul class="navbar-nav flex-row align-items-center">
                  <li class="nav-item"> 
                    <a href="/" class="nav-link active"> Home </a> 
                  </li>                  
                  <li class="nav-item">
                   / 
                  </li>
                  <li class="nav-item">
                    <a href="/" class="nav-link"> Projects </a> 
                  </li>
                  <li class="nav-item">
                   / 
                  </li>                  
                  <li class="nav-item"> 
                    <a href="/" class="nav-link"> About </a> 
                  </li>
                  <li class="nav-item">
                   / 
                  </li>
                  <li class="nav-item"> 
                    <a href="/" class="nav-link"> Contact </a>
                  </li>
                </ul>
              </nav>        
            </div>
        </header>

        <section class="home">
          <div class="content mr-auto">
            <div class="intro-text">
              <h1 class="display-4"> Hi! </h1>
              <h1 class="display-4"> 
                I'm 
                <span class="display-2 text-inline"> 
                  <a href="{{ url('about') }}"> Mark Reuel Cabal</a>.
                </span>
              </h1>
              <h1 class="display-4"> Programmer. System Analyst. </h1>
              <h1 class="display-4"> Web Developer. </h1>
            </div>
            <div class="scroll-down mx-auto">
              <a href="#projects"> 
                <i class="fa fa-angle-double-down display-1" aria-hidden="true"></i>
                <p> See More </p>
              </a>
            </div>
          </div>
        </section>

        <div class="clearfix" id="projects">
        </div>

        <section class="projects">
          <div class="content mr-auto">
            <div class="title-text">
              <h2> <span> // </span> <span class="title"> PROJECTS </span> </h2>
            </div>
            <div class="card">
              <div class="card-header text-right">
                <a href="{{ url('http://teams295.xyz') }}">
                  // TEAM:S //
                 </a>
              </div>
              <div class="project-thumbnail">
                <img src="http://via.placeholder.com/1080x300" class="card-img-top"/> 
              </div>
              <div class="card-body project-description">
                <p class="blockquote"> 
                <small>
                  Bacon ipsum dolor amet swine porchetta kielbasa chicken brisket drumstick bresaola. Alcatra chuck filet mignon beef ribs spare ribs pancetta biltong kevin leberkas ham hock ham tenderloin hamburger pork meatloaf. Doner chuck pork ball tip bresaola, pork loin leberkas spare ribs drumstick ham shoulder beef ribs cupim turkey. Corned beef ham hock pork chop sirloin tongue. Pig hamburger biltong shankle rump porchetta.
                </small>
                </p>
                <a href="#" class="btn btn-primary">Launch</a>
              </div>
            </div>
          </div>
        </section>        
    </body>
</html>
