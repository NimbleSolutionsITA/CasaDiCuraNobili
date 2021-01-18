<!--************************************
                Gallery Start
        *************************************-->
<section class="th-sectionspace th-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="th-sectionhead">
                    <div class="th-sectiontitle">
                        <h2>{!! trans('app.ourDepartments') !!}</h2>
                    </div>
                    <div class="th-description">

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <ul id="th-navfilterbale" class="th-navfilterbale option-set">
                    @foreach($departments as $department)
                        @if($loop->first) <li><a class="th-active" data-filter=".heads" href="javascript:void(0);">{{ trans('app.allServices') }}</a></li> @endif
                        @if($department->services->count() > 0)
                            <li><a data-filter=".{{ $department->slug }}" href="javascript:void(0);">{{ $department->getTranslatedAttribute('name') }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="filter-masonry" class="th-projects th-filter-masonry">
        @foreach($departments as $department2)
            @foreach($department2->services as $service)
                <div class="th-project heads {{ $department2->slug }}">
                    <figure>
                        <img src="@if($service->image == '')/images/gallery/img-13.jpg @else {{ asset("storage/".$service->image)}}@endif" alt="image description">
                        <figcaption>
                            <a class="th-projecticon" href="/attivita/{{ $department2->slug }}"><i class="{{ $department2->icon }}"></i></a>
                            <h3><a href="/attivita/{{ $department2->slug }}/{{ $service->slug }}">{{ $service->getTranslatedAttribute('name') }}</a></h3>
                            <p>{{ $department2->getTranslatedAttribute('name') }}</p>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        @endforeach
    </div>
</section>
<!--************************************
        Gallery Start
*************************************-->
