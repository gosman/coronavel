@isset($link['submenu'])
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi  {{$link['icon']}}"></i>
              </span>
            <span class="menu-title">{{$link['title']}}</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">

                @foreach($link['submenu'] as $submenu)
                    <li class="nav-item">
                        <a class="nav-link" href="{{$submenu['route']}}">{{$submenu['title']}}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </li>
@else
    <li class="nav-item menu-items @if(request()->path() === $link['route']) active @endif">
        <a class="nav-link" href="{{$link['route']}}">
              <span class="menu-icon">
                <i class="mdi {{$link['icon']}}"></i>
              </span>
            <span class="menu-title">{{$link['title']}}</span>
        </a>
    </li>
@endif
