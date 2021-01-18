
@extends('main')

@section('title', trans('app.contacts'))

@section('content')

    <!--************************************
				Main Start
		*************************************-->
    <main id="th-main" class="th-main th-haslayout th-paddingtopzero">
        <div class="container">
            <div class="row">
                <ul class="th-contactinfo">
                    <li>
                        <div class="th-infobox">
                            <div class="vertical-center">
                                <i class="th-iconbox"><img src="images/icon/img-08.png" alt="image description"></i>
                                <address>{!! setting('informazioni-generali.address') !!}</address>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="th-infobox">
                            <div class="vertical-center">
                                <i class="th-iconbox"><img src="images/icon/img-09.png" alt="image description"></i>
                                <span>{{ setting('informazioni-generali.reception') }}</span>
                                <span>{{ setting('informazioni-generali.time') }}</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="th-infobox">
                            <div class="vertical-center">
                                <i class="th-iconbox"><img src="images/icon/img-10.png" alt="image description"></i>
                                <a href="admin@adhividayam.com">{{ setting('informazioni-generali.email') }}</a>
                                <a href="Support@adhividayam.com">{{ setting('informazioni-generali.dpo') }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="th-mapandworkhours">
            <div class="th-aimcol th-workinghours">
                {!! $content->getTranslatedAttribute('body') !!}
            </div>
            <div id="th-locationmap" class="th-locationmap"></div>
        </div>

        <!--************************************
                Get in Touch Start
        *************************************-->
        <div class="container">
            <div class="row">
                <div class="th-content th-sectionspace">
                    <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="th-sectionhead th-nopattren">
                            <div class="th-sectiontitle">
                                <h2>{!! trans('app.contactSpan') !!}</h2>
                            </div>
                            <div class="th-description">
                                <p>{!! trans('app.infoText') !!} <a href="mailto:{{ setting('informazioni-generali.dpo') }}">{{ setting('informazioni-generali.dpo') }}</a> </p>
                            </div>
                        </div>
                    </div>
                    <form class="th-formgetintouch" action="{{ url('contatti') }}" method="POST">
                        {{ csrf_field() }}
                        {!! honeypot('honeypot_name', 'honeypot_time') !!}
                        <fieldset>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="{{ trans('app.name') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="{{ trans('app.phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="{{ trans('app.email') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="{{ trans('app.subject') }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-control th-textarea" name="message" placeholder="{{ trans('app.message') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="consent" required>Ho letto l’<a href="https://www.privacylab.it/informativa.php?10013335994" target="_blank">informativa Privacy</a> ed acconsento al trattamento dei miei dati personali ai sensi del Regolamento UE 679/2016 GDPR.</label>
                                </div>
                            </div>
                            <br />
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                                <button class="th-btnform th-btnform-lg" type="submit"><span>{{ trans('app.send-message') }}</span></button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!--************************************
                Get in Touch end
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection

@section('extra-css')

    <style>
        main#th-main {
            padding-bottom: 0;
        }
        .th-aimcol .th-workingtime li {
            padding: 25px 0 0;
        }
        .th-aimcol .th-workingtime li h4 {
            color: white;
            text-align: center;
        }
        .th-aimcol .th-workingtime li.bullet {
            list-style: disc;
            margin-left: 20px;
        }
        .th-contactinfo {
            padding: 80px 0;
        }
        .th-infobox {
            min-height: 128px;
        }
        .th-infobox address {
            padding-right: 15px;
        }
        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .th-infobox .th-iconbox {
            left: -90px;
        }
    </style>

@endsection
