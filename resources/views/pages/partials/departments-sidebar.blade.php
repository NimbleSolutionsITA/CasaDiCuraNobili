<div class="th-widget th-widgetcategories th-widgetcount">
    <div class="th-widgettitle">
        <span class="th-widgeticon">
            <i><img src="images/icon/img-26.png" alt="image description"></i>
        </span>
        <h3>{{ trans('app.departments') }}</h3>
    </div>
    <ul>
        @foreach($departments as $department)
            <li>
                <a style="float: left;" href="/attivita/{{ $department->slug }}">
                    <div style="color: #849cc9; font-size: 30px; width: 15%; float: left;">{!! $department->iconTag() !!}</div><span style="text-transform: uppercase; line-height: 20px; margin-top: 5px; width: 85%;">{{ $department->name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>