
@extends('main')

@section('title', trans('app.admissionGuidelines'))

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
				Main Start
		*************************************-->
    <main id="th-main" class="th-main th-haslayout">
        <div class="container">
            <div class="row">
                <div id="th-twocolumns" class="th-twocolumns">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div id="th-content" class="th-content">
                            <ul class="th-faqlist">
                                @foreach($ricovero as $item)
                                    <li><a href="#{{ $item->key }}">{{ $loop->iteration }}. <i class="{{ $item->icon }}"></i> {{ $item->getTranslatedAttribute('title') }}</a></li>
                                @endforeach
                            </ul>
                            <div class="th-faqcontent">
                                @foreach($ricovero as $item)
                                    <div class="th-faqdescription">
                                        <h3 id="{{ $item->key }}">{{ $loop->iteration }}. <i class="{{ $item->icon }}"></i> {{ $item->getTranslatedAttribute('title') }}</h3>
                                        {!! $item->body !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside id="th-sidebar" class="th-sidebar">
                            @foreach($departments as $department)
                            <div class="th-widget th-widgetcategories th-widgetcount th-leficon">
                                <div class="th-widgettitle" style="padding: 5px 20px 5px 80px; min-height: 50px; display: table;">
										<span class="th-widgeticon">
											<i class="{{ $department->icon }}"></i>
										</span>
                                    <a href="/attivita/{{ $department->slug }}" style="color: white; text-transform: uppercase; font-size: 14px; line-height: 1; margin: 0; display: table-cell; vertical-align: middle;">{{ $department->getTranslatedAttribute('name') }}</a>
                                </div>
                                <ul>
                                    @foreach($department->services as $service)
                                    <li>
                                        <a href="/attivita/{{ $department->slug }}/{{ $service->slug }}">
                                            <span>{{ $service->getTranslatedAttribute('name') }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
