<!--************************************
                Doctor Team Start
        *************************************-->
<section class="th-sectionspace th-haslayout th-paddingtopzero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="th-sectionhead th-alignleft">
                    <div class="th-sectiontitle">
                        <h2>{!! trans('app.doctorTeam') !!}</h2>
                    </div>
                </div>
            </div>
            <div id="th-docteamslider" class="th-docteamslider th-docmembers">
                @foreach($doctors as $doctor)@if($doctor->departments_director->count() > 0 || $doctor->services_head->count() > 0)
                    <div class="item">
                        <div class="th-docmember">
                            <figure>
                                <img src="{{ $doctor->getPhotoUrl() }}" alt="image description">
                                <figcaption>
                                    <div class="th-doctitle">
                                        <h3><a href="{{ $doctor->getUrl() }}">{{ $doctor->fullname() }}</a></h3>
                                    </div>
                                    <span class="th-docpost">{{ $doctor->getTranslatedAttribute('activity') }}</span>
                                    <ul class="th-socialicons">
                                        @foreach($doctor->departments_director as $department)
                                            <li><a href="/attivita/{{ $department->slug }}"><i class="{{ $department->icon }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                    <a class="th-docemail" href="mailto:{{ $doctor->email }}"><i class="fa fa-envelope-o"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--************************************
        Doctor Team End
*************************************-->
