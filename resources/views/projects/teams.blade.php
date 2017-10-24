@extends('layouts.projects',['projectLink' => 'http://teams295.xyz', 'projectName' => 'teams'])

@section('projectName')
				
                <a href="{{ url('http://teams295.xyz') }}">
                  // TEAM:S //
                 </a>
@overwrite

@section('projectImages')
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ asset('images/projects/teamsScreen1.png') }}" alt="First slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> TEAM:S - Log In Page </h3>				    
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/teamsScreen2.png') }}" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> TEAM:S - Attendance Page </h3>				    
				  </div>			      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/teamsScreen3.png') }}" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> TEAM:S - Leaves Page </h3>
				  </div>			      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/projects/teamsScreen4.png') }}" alt="Fourth slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h3> TEAM:S - Leaves Filing Page </h3>
				  </div>			      
			    </div>
@overwrite

@section('projectDetails')
                  TEAM:S is my final project for my Master in Information Systems course at the University of the Philippines - Open University. 
                  <br/> <br/>
                  It is a web-based employee attendance management system designed and built for TeraSystem, Inc. It features logging of employee attendances from a .csv biometrics hand-off file. There is a also a leave filing facility featured in the system. HR department can send notifications to employees with discrepancies in attendances. Employees can monitor their own leaves and attendances. Supervisors can also approve or reject their subordinates' leave requests and monitor their attendances and leaves.
@overwrite