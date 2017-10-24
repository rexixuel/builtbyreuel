@extends('layouts.sections',['sectionName' => 'projects', 'titleText' => 'title-text', 'link' => '#about'])

@section('title')                  
              <h2> <span> // </span> <span class="title"> Projects </span> </h2>
@overwrite
@section('content')
  @include('projects.teams')
  @include('projects.compass')
@overwrite