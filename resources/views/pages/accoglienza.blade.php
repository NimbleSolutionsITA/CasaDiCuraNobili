
@extends('main')

@section('title', trans('app.hospitality'))

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
                                @foreach($generali as $item)
                                    <li><a href="#{{ $item->key }}">{{ $loop->iteration }}. <i class="{{ $item->icon }}"></i> {{ $item->getTranslatedAttribute('title') }}</a></li>
                                @endforeach
                            </ul>
                            <div class="th-faqcontent">
                                @foreach($generali as $item)
                                    <div class="th-faqdescription">
                                        <h3 id="{{ $item->key }}">{{ $loop->iteration }}. <i class="{{ $item->icon }}"></i> {{ $item->getTranslatedAttribute('title') }}</h3>
                                        {!! $item->getTranslatedAttribute('body') !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside id="th-sidebar" class="th-sidebar">
                            <div class="th-widget th-widgetcategories th-widgetcount th-leficon">
                                <div class="th-widgettitle" style="padding: 5px 20px 5px 80px; min-height: 50px; display: table;">
										<span class="th-widgeticon">
											<i class="fa fa-hospital-o fa-user-se"></i>
										</span>
                                    <a href="/attivita/" style="color: white; text-transform: uppercase; font-size: 14px; line-height: 1; margin: 0; display: table-cell; vertical-align: middle;">I servizi sanitari</a>
                                </div>
                                <ul>
                                    @foreach($departments as $department)
                                        <li>
                                            <a href="/attivita/{{ $department->slug }}">
                                                <i class="{{ $department->icon }}" style="position: absolute; left: 0px; font-size: 30px; color: #869bcb;"></i>
                                                <span style="padding-left: 15px;">{{ $department->getTranslatedAttribute('name') }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
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

@section('extra-css')
    <style>
        .fa {
            font-size: 20px;
            margin-right: 5px;
        }
        .th-widget.th-widgetcategories.th-widgetcount li a:before {
            display: none;
        }
        .th-faqdescription ul {
            margin-bottom: 15px;
        }
        .th-faqdescription li {
            line-height: 20px;
            margin-left: 35px;
            text-indent: -20px;
        }
    </style>
@endsection