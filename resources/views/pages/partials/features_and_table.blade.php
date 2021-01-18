<!--************************************
                Features And Table Start
        *************************************-->
<section class="th-sectionspace th-haslayout th-pattrenone th-pattrenone-repeat">
    <div class="container">
        <div class="row">
            <div class="th-featuresandtime">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="th-sectionhead th-alignleft th-nopattren">
                        <div class="th-sectiontitle">
                            <h2>We Give You <span>the Best</span></h2>
                        </div>
                        <div class="th-description">
                            <p>Just two good old boys never meaning no harm beats all you have ever saw been in trouble with the law since the day they was born so the most of day</p>
                        </div>
                    </div>
                    <div class="th-features">
                        <div class="row">
                            @foreach($generali as $item)
                            <div class="col-sm-6 col-xs-12">
                                <div class="th-feature">
                                    <div class="th-featurehead">
                                        <span class="th-featureicon"><i class="{{ $item->icon }}"></i></span>
                                        <div class="th-featuretitle">
                                            <h3><a href="#">{{ $item->getTranslatedAttribute('title') }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="th-description">
                                        <p>{!! str_limit(strip_tags($item->getTranslatedAttribute('body')), 120) !!}... <a href="/accoglienza/informazioni-generali#{{ $item->key }}"><i>{{ trans('app.readMore') }}</i></a></p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                    @include('pages.partials.sidebar_opening')
                    <div class="th-widget th-widgetcategories th-widgetcount">
                        <div class="th-widgettitle">
										<span class="th-widgeticon">
											<i class="fa fa-hospital-o"></i>
										</span>
                            <h3>{{ trans('app.otherServices') }}</h3>
                        </div>
                        <ul>
                            @foreach($departments as $department)
                                <li>
                                    <a href="/attivita/{{ $department->slug }}" class="{{ $department->icon }}">
                                        <span>{{ $department->getTranslatedAttribute('name') }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Features And Table End
*************************************-->
