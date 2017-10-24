@extends('layouts.sections',['sectionName' => 'about', 'titleText' => 'title-text', 'link' => '#contact'])

@section('title')                  
              <h2 class="row d-flex" id="about">
                <div class="col-md-9 col-sm-6">
                  // <span class="title"> ABOUT </span> 
                </div>                
                <div class="col-md-3 col-sm-6 ml-auto float-right">
                  <i class="fa fa-external-link" aria-hidden="true"></i>
                  <a href="{{ url('https://www.github.com/rexixuel') }}"> <img src="{{ asset('images/github.svg') }}" width="40px" class="ml-auto"/> </a>                
                  <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/kalibrr.png') }}" width="40px" class="ml-auto"/> </a>
                  <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/monster.png') }}" width="40px" class="ml-auto"/> </a>
                  <a href="{{ url('https://www.jobstreet.com/') }}"><img src="{{ asset('images/jobstreet.jpg') }}" width="40px" class="ml-auto" class="rounded"/> </a>
                  <a href="{{ url('https://www.linkedin.com/in/mark-reuel-cabal-89266a148/') }}"><img src="{{ asset('images/linkedin.png') }}" width="40px" class="mr-auto"/> </a>
                </div>
              </h2>
@overwrite
@section('content')
          <div class="text-content">
            <h3> I am a <em> Programmer.</em> </h3>
            <p class="">
              I use the following tools and languages for my works.
            </p>
          </div>
          <div class="showcase">
              <h5 class="text-center"> Web Development </h5> <br/>
              <div class="d-flex flex-sm-wrap">
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/php.png') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> PHP 7.0 </strong>
                  </figcaption>               
                </figure>
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/HTML5.png') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> HTML5 </strong>
                  </figcaption>               
                </figure>            
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/css3.png') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> CSS3  </strong>
                  </figcaption>               
                </figure>            
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/laravel.svg') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> Laravel >5.0 </strong>
                  </figcaption>         
                </figure>
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/bootstrap.png') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> Bootstrap 4.0 </strong>
                  </figcaption>         
                </figure>
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/Mysql.png') }}" width="100px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> MySQL </strong>
                  </figcaption>         
                </figure>                   
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/javascript.png') }}" width="72px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> JavaScript </strong>
                  </figcaption>         
                </figure>       
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/jquery.png') }}" width="105px"/>
                  <figcaption class="figure-caption text-center">
                    <strong> JQuery </strong>
                  </figcaption>         
                </figure>       
              </div>            
            <h5 class="text-center"> Legacies </h5>
            <div class="d-flex">
              <figure class="figure mx-auto">
                <img class="figure img-fluid circle" src="{{ asset('images/cobol.png') }}" width="100px"/>
                <figcaption class="figure-caption text-center">
                  <strong> COBOL </strong>
                </figcaption>         
              </figure>
              <figure class="figure mx-auto">
                <img class="figure img-fluid circle" src="{{ asset('images/CICS.png') }}" width="100px" height=""/>
                <figcaption class="figure-caption text-center">
                  <strong> CICS </strong>
                </figcaption>         
              </figure>
              <figure class="figure mx-auto">
                <img class="figure img-fluid circle" src="{{ asset('images/mainframe.png') }}" width="100px" height=""/>
                <figcaption class="figure-caption text-center">
                  <strong> JCL </strong>
                </figcaption>         
              </figure>            
              <figure class="figure mx-auto">
                <img class="figure img-fluid circle" src="{{ asset('images/mainframe.png') }}" width="100px" height=""/>
                <figcaption class="figure-caption text-center">
                  <strong> z/VSE </strong>
                </figcaption>         
              </figure>
            </div>
            <h5 class="text-center"> Version Control </h5>
            <div class="d-flex">
              <figure class="figure mx-auto">
                <img class="figure img-fluid circle" src="{{ asset('images/git.png') }}" width="100px" height=""/>
                <figcaption class="figure-caption text-center">
                  <strong> Git </strong>
                </figcaption>         
              </figure>   
                <figure class="figure mx-auto">
                  <img class="figure img-fluid circle" src="{{ asset('images/github.svg') }}" width="100px" height=""/>
                  <figcaption class="figure-caption text-center">
                    <a href="{{ url('https://github.com/rexixuel') }}">
                     <strong> Github </strong> 
                    </a>
                  </figcaption>         
                </figure>   
            </div>
          </div>

          <div class="text-content">
            <h3> I am an <em> Analyst.</em> </h3>
            <p class="text-justify">
              I have experience with designing custom solutions for different industries. Moreoever, I have also supported, maintained, and enhanced legacy systems for banking institutions. These experiences, combined with my undertaking of a Master in Information System course, have gained me skills and knowledge for the following tools and methodologies as an analyst:

              <ul class="">
                <li> Kanban Software Methodology </li>
                <li> Gantt Chart </li>
                <li> System Requirement Specification </li>
                <li> Strategic Information Systems Plan </li>
                <li> Functional Requirements Specification </li>
                <li> Technical Requirements Specification </li>
                <li> Technical Implementation Plan </li>
              </ul>

            </p>
          </div>

          <div class="text-content">
            <h3> I am a <em> Web Developer.</em> </h3>
            <p class="text-justify">
              I always had a passion for building web-based systems. Though I had worked as a mainframe developer for the past seven (7) years, I have been able to build a web-based attendance management system (TEAM:S) and a comprehensive examination online learning tool (COMPASS). I have experience in using PHP, MySQL, HTML5, CSS3, and JavaScript for building these web-based systems. I also use frameworks such as Bootstrap, JQuery, and Laravel for web development projects. You can see more details of my work in the <a href="{{ url('#projects') }}"> Projects </a> section.
            </p>
          </div>

          <div class="text-content outside-links">
            <h3> <i class="fa fa-external-link" aria-hidden="true"></i> Delve more in my other <em> profiles</em>: </h3>
            <div class="">
                <a href="{{ url('https://www.github.com/rexixuel') }}"> <img src="{{ asset('images/github.svg') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/kalibrr.png') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.monster.com/') }}"> <img src="{{ asset('images/monster.png') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.jobstreet.com/') }}"><img src="{{ asset('images/jobstreet.jpg') }}" width="50px" class="" class="rounded"/> </a>
                <a href="{{ url('https://www.linkedin.com/in/mark-reuel-cabal-89266a148/') }}"><img src="{{ asset('images/linkedin.png') }}" width="50px" class=""/> </a>
            </div>
          </div>
          <div class="clearfix"> </div>
@overwrite