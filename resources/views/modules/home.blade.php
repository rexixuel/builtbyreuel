@extends('layouts.sections',['sectionName' => 'home', 'titleText' => 'intro-text', 'link' => '#projects'])

@section('title')          
              <h1 class=""> Hello! </h1>
              <h1 class="display-5"> 
                I'm 
                <span class="display-3 text-inline"> 
                  <a href="{{ url('#about') }}"> Mark Reuel Cabal</a>.
                </span>
              </h1>
              <h1 class="display-5"> Programmer. Analyst. </h1>
              <h1 class="display-5"> Web Developer. </h1>
@overwrite
@section('content')

@overwrite
