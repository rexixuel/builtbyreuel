@extends('layouts.projects',['projectLink' => 'http://compass.uptmc.com', 'projectName' => 'compass'])

@section('projectName')
                <a href="{{ url('http://compass.uptmc.com') }}">
                  // COMPASS //
                 </a>
@overwrite

@section('projectImages')
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ asset('images/projects/compassScreen1.png') }}" alt="First slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> COMPASS - Log In Page </h3>				    
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/compassScreen2.png') }}" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> COMPASS - Welcome Page </h3>
				  </div>			      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/compassScreen3.png') }}" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> COMPASS - Take Quiz </h3>
				  </div>			      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/compassScreen4.png') }}" alt="Fourth slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> COMPASS - Upload Modules </h3>
				  </div>			      
			    </div> 
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/compassScreen5.png') }}" alt="Fifth slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> COMPASS - Browse Modules </h3>
				  </div>			      
			    </div> 
@overwrite

@section('projectDetails')
	Compass is a comprehensive examination online learning tool for students taking up the graduate program of Master of Technology Management (MTM) under the University of the Philippines Technology Management Center (UPTMC). Compass aims to provide MTM students a repository of relevant materials and a venue to test their knowledge in preparation for the MTM comprehensive examination ( <a href="{{ url('http://compass.uptmc.com/about') }}"> COMPASS - About  </a>).
	<br />
	<br />

	Compass is a commissioned work from the MTM students of UP Diliman. I lead the designing, building, and implementing of this system.
@overwrite