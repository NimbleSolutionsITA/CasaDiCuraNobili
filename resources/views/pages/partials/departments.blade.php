<!--************************************
                Departments Start
        *************************************-->
<section class="th-sectionspace th-bgpattrensection th-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="th-textwidgetbox">
                    <div class="th-sectionhead th-alignleft th-nopattren">
                        <div class="th-sectiontitle">
                            <h2>{!! $contents->where('key', 'home-dipartimenti')->first()->getTranslatedAttribute('title') !!}</h2>
                        </div>
                    </div>
                    <div class="th-description">
                        <h4>DIRETTORE SANITARIO:<br><!--<a href="{{ $sanitario->getUrl() }}">-->{{ $sanitario->fullName() }}<!--</a>--></h4>
                        {!! $contents->where('key', 'home-dipartimenti')->first()->getTranslatedAttribute('body') !!}
                    </div>
                    <div class="th-btns">
                        <a class="th-btn" href="/attivita">{{ trans('app.readMore') }}</a>
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="th-departments">
                        @foreach($departments as $department)
                        <div class="col-sm-6">
                            <div class="th-department">
                                <figure>
                                    <img src="@if($department->image == '')/images/department/img-01.jpg @else {{ asset("storage/".$department->thumb()) }}@endif" alt="image description">
                                </figure>
                                <div class="th-departmentname">
                                    {!! $department->iconTag() !!}
                                    <h3><a href="/attivita/{{ $department->slug }}">{{ $department->getTranslatedAttribute('name') }}</a></h3>
                                </div>
                                <!--<span class="th-departmenticlon"><i class="{{ $department->icon }}"></i></span>-->
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
        Departments End
*************************************-->
