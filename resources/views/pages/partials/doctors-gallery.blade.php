<!--************************************
                Gallery Start
        *************************************-->
<section class="th-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="th-sectionhead">
                    <div class="th-sectiontitle">
                        <h2>{!! trans('app.staff') !!}</h2>
                    </div>
                    <div class="th-description">

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <ul id="th-navfilterbale" class="th-navfilterbale option-set">
                    <li style="display: inline-table;"><a class="th-active" data-filter=".heads" href="javascript:void(0);"> • {{ trans('app.headsDirectors') }} • </a></li>
                    @foreach($departments as $department)
                        @if($department->slug != 'visite-ambulatoriali')
                            <li style="display: inline-table;"><a data-filter=".{{ $department->slug }}" href="javascript:void(0);"> • {{ $department->getTranslatedAttribute('name') }} • </a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="filter-masonry" class="th-projects th-filter-masonry">
        @foreach($doctors as $doctor)
            @if($doctor->departments_director->count() > 0 || $doctor->services_head->count() > 0)
                <div class="th-project heads @foreach($doctor->departments as $department) {{ $department->slug }} @endforeach ">
                    <figure>
                        <img src="{{ $doctor->getPhotoUrl() }}" alt="image description">
                        <figcaption>
                            <div class="row">
                                @foreach($doctor->departments as $department1)
                                    <a class="th-projecticon" style="display: inline-block" href="/attivita/{{ $department1->slug }}"><i class="{{ $department1->icon }}"></i></a>
                                @endforeach
                            </div>
                            <h3><a href="{{ $doctor->getUrl() }}">{{ $doctor->fullName() }}</a></h3>
                            <p>
                                @foreach($doctor->services as $service)
                                    {{ $service->getTranslatedAttribute('name') }}
                                @endforeach
                            </p>
                        </figcaption>
                        <div class="figcaption">
                            <h6><a href="{{ $doctor->getUrl() }}" style="color: white;">{{ $doctor->fullName() }}</a></h6>
                        </div>
                    </figure>
                </div>
            @endif
        @endforeach
        @foreach($doctors as $doctor)
            @if($doctor->departments_director->count() == 0 && $doctor->services_head->count() == 0 && $doctor->role != 'nurse')
                <div class="th-project @foreach($doctor->departments as $department) {{ $department->slug }} @endforeach">
                    <figure>
                        <img src="{{ $doctor->getPhotoUrl() }}" alt="image description">
                        <figcaption>
                            <div class="row">
                                @foreach($doctor->departments as $department1)
                                    <a class="th-projecticon" style="display: inline-block" href="/attivita/{{ $department1->slug }}"><i class="{{ $department1->icon }}"></i></a>
                                @endforeach
                            </div>
                            <h3><a href="{{ $doctor->getUrl() }}">{{ $doctor->fullName() }}</a></h3>
                            <p>
                                @foreach($doctor->services as $service)
                                    {{ $service->getTranslatedAttribute('name') }}
                                @endforeach
                            </p>
                        </figcaption>
                        <div class="figcaption">
                            <h6><a href="{{ $doctor->getUrl() }}" style="color: white;">{{ $doctor->fullName() }}</a></h6>
                        </div>
                    </figure>
                </div>
            @endif
        @endforeach
            @foreach($doctors as $doctor)
                @if($doctor->role == 'nurse')
                    <div class="th-project @foreach($doctor->departments as $department) {{ $department->slug }} @endforeach ">
                        <figure>
                            <img src="{{ $doctor->getPhotoUrl() }}" alt="image description">
                            <figcaption>
                                <div class="row">
                                    @foreach($doctor->departments as $department1)
                                        <a class="th-projecticon" style="display: inline-block" href="/attivita/{{ $department1->slug }}"><i class="{{ $department1->icon }}"></i></a>
                                    @endforeach
                                </div>
                                <h3><a href="{{ $doctor->getUrl() }}">{{ $doctor->fullName() }}</a></h3>
                                <p>
                                    @foreach($doctor->services as $service)
                                        {{ $service->getTranslatedAttribute('name') }}
                                    @endforeach
                                </p>
                            </figcaption>
                            <div class="figcaption">
                                <h6 style="color: white;">CAPOSALA<br><a href="{{ $doctor->getUrl() }}" style="color: white;">{{ $doctor->fullName() }}</a></h6>
                            </div>
                        </figure>
                    </div>
                @endif
            @endforeach
    </div>
</section>
<!--************************************
        Gallery Start
*************************************-->