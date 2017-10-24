
        <section class="{{$sectionName}}" id="{{ $sectionName }}">
          <div class="content mr-auto">
            <div class="title {{$titleText}}">
              @yield('title')
            </div>
            @yield('content')
          </div>
          @if(isset($link) && $link == '#projects')
            @include('modules.scroll', ['link' => $link])
          @elseif(isset($link) && $link == '#home')
          	@include('modules.scrollDown', ['link' => $link])          
          @endif
        </section>
