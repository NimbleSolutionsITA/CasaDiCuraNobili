@if($department->doctors()->count() > 0)

<!--************************************
            Doctor Team Start
    *************************************-->
<section class="th-sectionspace th-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="th-sectionhead  th-nopattren">
                    <div class="th-sectiontitle">
                        <h2>{!! trans('app.doctorTeam') !!}</h2>
                    </div>
                    <div class="th-description">

                    </div>
                </div>
            </div>
            <div class="th-docmembers th-docmemberstwo">
                @foreach( $department->doctors()->get() as $doctor)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="th-docmember">
                            <figure>
                                <img src="{{ $doctor->getPhotoUrl() }}"
                                     alt="image description">
                                <figcaption>
                                    <div class="th-doctitle">
                                        <h3>
                                            <a href="{{ $doctor->getUrl() }}">{{ $doctor->shortName() }}</a>
                                        </h3>
                                    </div>
                                    <span class="th-docpost">{{ $doctor->getTranslatedAttribute('activity') }}</span>
                                    <ul class="th-socialicons">
                                        @foreach( $doctor->departments as $department_doc)
                                            <li><a href="/attivita/{{  $department_doc->slug }}"><i class="{{ $department_doc->icon}}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--************************************
        Doctor Team End
*************************************-->

@endif