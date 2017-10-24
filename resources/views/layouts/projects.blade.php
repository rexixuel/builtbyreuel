            <div class="card">            
              <div class="card-header text-right">
                <h6> @yield('projectName') <i class="fa fa-external-link" aria-hidden="true"></i> </h6>
              </div>
              <!-- <div class="project-thumbnail"> -->
              <div id="{{$projectName}}" class="carousel slide carousel-news" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  @yield('projectImages')
                </div>
                <a class="carousel-control-prev" href="#{{$projectName}}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#{{$projectName}}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>                
              </div>
              <div class="card-body project-description">
                <p class="text-justify">
                <small>
                @yield('projectDetails')
                </small>
                </p>
                <a href="{{ $projectLink }}" class="btn btn-primary">Launch <i class="fa fa-external-link" aria-hidden="true"></i> </a>
              </div>
            </div>                    