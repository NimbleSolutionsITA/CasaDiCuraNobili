@extends('main')


@section('title', $department->getTranslatedAttribute('name'))

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
				Main Start
		*************************************-->
    <main id="th-main" class="th-main th-haslayout th-pattrenone th-pattrenone-repeat">
        <!--************************************
                Department Start
        *************************************-->
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="th-sectionhead th-nopattren">
                        <div class="th-sectiontitle">
                            <h2>{!! trans('app.infoSpan') !!}</h2>
                        </div>
                        <div class="th-description">
                            <p>
                                {!! $department->getTranslatedAttribute('excerpt') !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div id="th-content" class="th-content">
                        <div class="th-detailpage th-gallerydetail">
                            <figure>
                                <img src="{{ asset("storage/".$department->image) }}" alt="image description">
                                <figcaption>
                                    <ul class="th-passionnant">
                                        <li class="depIcon">
                                            {!! $department->iconTag() !!}
                                        </li>
                                        <li>
                                            <span>{{ trans('app.department') }} :</span>
                                            <em>{{ $department->getTranslatedAttribute('name') }}</em>
                                        </li>
                                        @if($director->shortName() != '')
                                            <li>
                                                <span>{{ trans('app.head') }} :</span>
                                                <em><!--<a href="{{ $director->getUrl() }}"
                                                       style="color: white;">-->{{ $director->shortName() }}<!--</a>--></em>
                                            </li>
                                        @endif
                                        @if($department->email != '')
                                            <li>
                                                <span>Email :</span>
                                                <em>{{ $department->email }}</em>
                                            </li>
                                        @endif
                                        @if($department->phone != '')
                                            <li>
                                                <span>{{ trans('app.phone') }} :</span>
                                                <em>{{ $department->phone }}</em>
                                            </li>
                                        @endif
                                        @if($department->orario != '')
                                            <li>
                                                <span>{{ trans('app.OpeningTime') }} :</span>
                                                <em>{{ $department->orario }}</em>
                                            </li>
                                        @endif
                                        @if($department->posizione != '')
                                            <li>
                                                <span>{{ trans('app.position') }} :</span>
                                                <em>{{ $department->getTranslatedAttribute('posizione') }}</em>
                                            </li>
                                        @endif
                                        <li><p></p></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="row">
                                <!--
                                <div class="col-sm-3 col-xs-12">

                                    <figure class="th-doctor">
                                        <img src="{{ $director->getPhotoUrl() }}" alt="image description">
                                        <figcaption>
                                            <h6 style="color: white;">{{ trans('app.head') }}</h6>
                                            <h4><a href="{{ $director->getUrl() }}"
                                                   style="color: white;">{{ $director->fullName() }}</a></h4>
                                        </figcaption>
                                    </figure>
                                    @if($services->count() < 0)
                                    <div class="th-widget th-widgetcategories th-widgetcount th-leficon">
                                        <div class="th-widgettitle">
										<span class="th-widgeticon">
											<i class="{{ $department->icon }}"></i>
										</span>
                                            <h3>{{ trans('app.services') }}</h3>
                                        </div>
                                        <ul>
                                            @foreach($services as $service)
                                                <li>
                                                    <a href="/attivita/{{ $department->slug }}/{{ $service->slug }}">
                                                        <span>{{ $service->getTranslatedAttribute('name') }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="tab-pane">
                                        {!! $department->getTranslatedAttribute('body') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Department End
        *************************************-->

    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection

@section('scripts')

    <script>
        $(document).ready(function(){

            $('ul.tabs li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');
            })

        })
    </script>

@endsection

@section('extra-css')
    <style>
        ul.tabs{
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        ul.tabs li{
            background: none;
            color: #222;
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
        }

        ul.tabs li.current{
            background: #ededed;
            color: #222;
        }

        .tab-content{
            display: none;
            background: #ededed;
            padding: 15px;
        }

        .tab-content.current{
            display: inherit;
        }
        li.depIcon {
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            padding-bottom: 10px;
        }
        .depIcon i {
            color: white;
            font-size: 60px;
            text-align: center;
        }
    </style>

@endsection
