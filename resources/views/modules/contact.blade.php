@extends('layouts.sections',['sectionName' => 'contact', 'titleText' => 'title-text', 'link' => '#home'])

@section('title')                  
              <h2> <span> // </span> <span class="title"> CONTACT </span> </h2>
@overwrite
@section('content')
            <div class="text-content">
              <h5> <i class="fa fa-external-link" aria-hidden="true"></i> You can reach me out via the following <em> networks</em>: </h5>
              <div class="outside-links">                
                <a href="{{ url('https://www.github.com/rexixuel') }}"> <img src="{{ asset('images/github.svg') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.kalibrr.com/') }}"> <img src="{{ asset('images/kalibrr.png') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.monster.com/') }}"> <img src="{{ asset('images/monster.png') }}" width="50px" class=""/> </a>
                <a href="{{ url('https://www.jobstreet.com/') }}"><img src="{{ asset('images/jobstreet.jpg') }}" width="50px" class="" class="rounded"/> </a>
                <a href="{{ url('https://www.linkedin.com/in/mark-reuel-cabal-89266a148/') }}"><img src="{{ asset('images/linkedin.png') }}" width="50px" class=""/> </a>
              </div>
              
              <h5> ...Or shoot me a message <em> below</em>: </h5>
            </div>
            <form class="form" action="{{ asset('contact') }}" method="POST" role="form">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="subject"> Subject </label>
                <input type="text" id="subject" name="subject" placeholder="What do you want to talk about?" class="form-control" />
              </div>
              <div class="form-group">
                <label for="message"> Message </label>
                <textarea id="message" name="message" placeholder="What do you want to say?" class="form-control" rows="15"></textarea>
              </div>
              <div class="form-group">
                <label for="reply"> Reply to </label>
                <input type="email" id="reply" name="sender" placeholder="Whom should I reply to?" class="form-control" />
              </div>
              <div class="btn-group">
                <button type="submit" class="btn btn-primary"> Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>              
            </form>

            <div class="text-content">
              <h5> Prefer something more <em> traditional</em>? </h5>
              <div class="">
                <ul class="list-unstyled">
                  <li> e-Mail: <a  href="mailto:reuelcabal@gmail.com"> reuelcabal@gmail.com </a> </li>
                  <li> Mobile: (+63) 917 8399 565 </li>
                  <li> Phone: (+63) (02) 646 - 2631 </li>
                  <li> Mailing Address: 95 Evangelista St. Santolan, Pasig City, Philippines 1610 </li>
                </ul>
              </div>
            </div>            
@overwrite