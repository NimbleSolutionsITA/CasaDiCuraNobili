<!--************************************
					Features And Icons Start
			*************************************-->
<section class="th-sectionspace th-haslayout">
    <div class="container">
        <div class="row">
            <div class="th-featuresarea">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="th-sectionhead th-alignleft th-nopattren">
                        <div class="th-sectiontitle">
                            <h2>{!! trans('app.giveBest') !!}</h2>
                        </div>
                    </div>
                    <div class="th-features th-featurestwo">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="th-feature">
                                    <div class="th-featurehead">
                                        <span class="th-featureicon {{ $services->where('slug', 'cardiochirurgia')->first()->department->icon }}"></span>
                                        <div class="th-featuretitle">
                                            <h3><a href="#">{{ $services->where('slug', 'cardiochirurgia')->first()->getTranslatedAttribute('name') }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="th-description">
                                        <p>{!! str_limit(strip_tags($services->where('slug', 'cardiochirurgia')->first()->getTranslatedAttribute('excerpt')), 120) !!} <a href="/attivita/{{ $services->where('slug', 'cardiochirurgia')->first()->department->slug }}/cardiochirurgia">{{ trans('app.readMore') }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="th-feature">
                                    <div class="th-featurehead">
                                        <span class="th-featureicon {{ $services->where('slug', 'tomografia-computerizzata')->first()->department->icon }}"></span>
                                        <div class="th-featuretitle">
                                            <h3><a href="#">{{ $services->where('slug', 'tomografia-computerizzata')->first()->getTranslatedAttribute('name') }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="th-description">
                                        <p>{!! str_limit(strip_tags($services->where('slug', 'tomografia-computerizzata')->first()->getTranslatedAttribute('excerpt')), 120) !!} <a href="/attivita/{{ $services->where('slug', 'tomografia-computerizzata')->first()->department->slug }}/tomografia-computerizzata">{{ trans('app.readMore') }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="th-feature">
                                    <div class="th-featurehead">
                                        <span class="th-featureicon {{ $services->where('slug', 'terapia-intensiva-rianimazione')->first()->department->icon }}"></span>
                                        <div class="th-featuretitle">
                                            <h3><a href="#">{{ $services->where('slug', 'terapia-intensiva-rianimazione')->first()->getTranslatedAttribute('name') }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="th-description">
                                        <p>{!! str_limit(strip_tags($services->where('slug', 'terapia-intensiva-rianimazione')->first()->getTranslatedAttribute('excerpt')), 120) !!} <a href="/attivita/{{ $services->where('slug', 'terapia-intensiva-rianimazione')->first()->department->slug }}/terapia-intensiva-rianimazione">{{ trans('app.readMore') }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="th-feature">
                                    <div class="th-featurehead">
                                        <span class="th-featureicon {{ $services->where('slug', 'medicina-della-riproduzione')->first()->department->icon }}"></span>
                                        <div class="th-featuretitle">
                                            <h3><a href="#">{{ $services->where('slug', 'medicina-della-riproduzione')->first()->getTranslatedAttribute('name') }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="th-description">
                                        <p>{!! str_limit(strip_tags($services->where('slug', 'medicina-della-riproduzione')->first()->getTranslatedAttribute('excerpt')), 120) !!} <a href="/attivita/{{ $services->where('slug', 'medicina-della-riproduzione')->first()->department->slug }}/medicina-della-riproduzione">{{ trans('app.readMore') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-sm-12 col-xs-12">
                    <div class="th-featuresicons">
                        <div class="th-halfhaxegon"></div>
                        <div class="th-haxegon th-iconhaxegon">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="th-haxegon th-texthaxegon">
                            <a href="/attivita/{{ $services->where('slug', 'diagnostica-senologica')->first()->department->slug }}/diagnostica-senologica"><h3>{{ $services->where('slug', 'diagnostica-senologica')->first()->getTranslatedAttribute('name') }}</h3></a>
                        </div>
                        <div class="th-halfhaxegon"></div>
                        <div class="th-haxegon th-texthaxegon">
                            <a href="/attivita/{{ $services->where('slug', 'neurologia-clinica')->first()->department->slug }}/neurologia-clinica"><h3>{{ $services->where('slug', 'neurologia-clinica')->first()->getTranslatedAttribute('name') }}</h3></a>
                        </div>
                        <div class="th-imghaxegon"><figure><img src="images/img-08.jpg" alt="image description"></figure></div>
                        <div class="th-haxegon th-iconhaxegon">
                            <i><img src="images/icon/img-44.png" alt="image description"></i>
                        </div>
                        <div class="th-halfhaxegon"></div>
                        <div class="th-haxegon th-iconhaxegon">
                            <i><img src="images/icon/img-45.png" alt="image description"></i>
                        </div>
                        <div class="th-haxegon th-texthaxegon">
                            <a href="/attivita/{{ $services->where('slug', 'chirurgia-della-mano')->first()->department->slug }}/chirurgia-della-mano"><h3>{{ $services->where('slug', 'chirurgia-della-mano')->first()->getTranslatedAttribute('name') }}</h3></a>
                        </div>
                        <div class="th-halfhaxegon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Features And Icons End
*************************************-->