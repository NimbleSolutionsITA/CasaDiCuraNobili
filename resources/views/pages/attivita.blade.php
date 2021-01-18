
@extends('main')

@section('title', trans('app.services'))

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
            Main Start
    *************************************-->
    <main id="th-main" class="th-main th-haslayout th-pattrenone th-pattrenone-repeat">

        <!--************************************
					Services Start
			*************************************-->
        <div class="container">
            <div class="row">
                <div style="padding: 0 15%;">
                    <div class="th-sectionhead th-alignleft th-nopattren" style="text-align: center;">
                        <div class="th-sectiontitle">
                            <h2>{!! trans('app.ourDepartments') !!}</h2>
                        </div>
                        <div class="th-description">
                            {!! $intro->getTranslatedAttribute('body') !!}
                        </div>
                    </div>
                </div>
                <div class="th-services th-serviceslist th-servicestwo ">
                @foreach( $departments as $department)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="th-service">
								<span class="th-serciceicon">
									<i class="{{ $department->icon }}"></i>
								</span>
                            <div class="th-servicetitle">
                                <h3><a href="/attivita/{{ $department->slug }}">
                                        {{ $department->getTranslatedAttribute('name') }}
                                    </a></h3>
                            </div>
                            <div class="th-description">
                                <p>
                                    {{ str_limit($department->getTranslatedAttribute('excerpt'), 150) }}
                                </p>
                            </div>
                            <div class="th-servicehover">
                                <a class="th-btn th-btn-lg" href="/attivita/{{ $department->slug }}" >{{ trans('app.moreInfo') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
