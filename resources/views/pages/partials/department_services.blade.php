<!--************************************
    Services Start
*************************************-->
<section class="th-sectionspace th-bgpattrensection th-haslayout">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="th-textwidgetbox">
                    <div class="th-sectionhead th-alignleft th-nopattren">
                        <div class="th-sectiontitle">
                            <h2>{!! trans('app.depServices') !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="th-departments">
                        @foreach( $services as $service)
                            <div class="col-sm-3">
                                <div class="th-department">
                                    <figure>
                                        <img src="@if($service->image == '')/images/department/img-01.jpg @else {{ asset("storage/".$service->image)}}@endif"
                                             alt="image description">
                                    </figure>
                                    <div class="th-departmentname">
                                        <h3><a href="/attivita/{{ $department->slug }}/{{ $service->slug }}">{{ $service->getTranslatedAttribute('name') }}</a></h3>
                                    </div>
                                    <span class="th-departmenticlon"><i class="@if($service->icon == '') {{ $department->icon }} @else {{ $service->icon }}@endif"></i></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Services End
*************************************-->