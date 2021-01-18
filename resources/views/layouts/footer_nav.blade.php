<ul class="th-usefullinks">
    @foreach($items as $menu_item)
        @php
            $submenu = $menu_item->children;
        @endphp
        <li>
            <a style="@if(url($menu_item->link()) == url()->current())font-weight: bold; color: #859CC9; @endif" href="{{ $menu_item->url }}">{{ $menu_item->getTranslatedAttribute('title') }} </a>
        </li>
    @endforeach
</ul>
