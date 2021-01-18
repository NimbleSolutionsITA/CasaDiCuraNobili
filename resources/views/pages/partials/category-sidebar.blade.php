<div class="th-widget th-widgetcategories th-widgetcount th-leficon">
    <div class="th-widgettitle">
	    <span class="th-widgeticon">
		    <i><img src="/images/icon/img-26.png" alt="image description"></i>
	    </span>
        <h3>{{ trans('app.categories') }}</h3>
    </div>
    <ul>
        @foreach($categories as $categoria)
            <li>
                <a href="/news/{{ $categoria->slug }}">
                    <span @if($category == $categoria->slug) style="font-weight: bold; text-decoration: underline;" @endif>{{ $categoria->name }}</span>
                    <span>({{ $categoria->news->count() }})</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>