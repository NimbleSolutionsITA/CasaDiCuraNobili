<div id="th-navigation" class="collapse navbar-collapse th-navigation">
    <ul>
        @foreach($items as $menu_item)
            @php
                $submenu = $menu_item->children;
            @endphp
            <li class="@if(count($submenu) != 0)th-hasdropdown @endif @if(url($menu_item->link()) == url()->current())th-active @endif">
                <a class="text-center" href="{{ url($menu_item->url) }}">{{ $menu_item->getTranslatedAttribute('title') }} @if(count($submenu) != 0)<i class="fa fa-angle-down"></i>@endif</a>

                @if(count($submenu) != 0)
                    <ul class="th-menudropdown">
                        @foreach($submenu as $item)
                            <li class="@if(count($item->children) != 0) th-hasdropdown @endif @if(url($item->link()) == url()->current()) th-active @endif">
                                <a href="{{url($item->url)}}">{{$item->getTranslatedAttribute('title')}} @if(count($item->children) != 0)<i class="fa fa-angle-right"></i>@endif</a>
                                @if(count($item->children) != 0)
                                    <ul class="th-menudropdown">
                                        @foreach($item->children as $item2)
                                            <li @if(url($item2->link()) == url()->current()) class="th-active" @endif >
                                                <a href="{{url($item2->url)}}">{{$item2->getTranslatedAttribute('title')}} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
