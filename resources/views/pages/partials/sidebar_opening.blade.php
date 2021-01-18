<div class="th-openingtime">
    <h3>{{ trans('app.sidebarTimeTitle') }}</h3>
    <div class="contatti">
        @if(setting('informazioni-generali.reception') != '')
            <h6>Reception</h6>
            <div class="phone"><i class="fa fa-phone-square"></i> {!! setting('informazioni-generali.reception') !!}</div>
            <div class="time"><i class="fa fa-clock-o"></i> {!! setting('informazioni-generali.time') !!}</div>
        @endif
        @if(setting('informazioni-generali.fax') != '')
            <h6>FAX</h6>
            <div class="phone"><i class="fa fa-phone-square"></i> {!! setting('informazioni-generali.fax') !!}</div>
        @endif
        @if(setting('informazioni-generali.admission_desk') != '')
            <h6>{{ trans('app.admissionDesk') }}</h6>
            <div class="phone"><i class="fa fa-phone-square"></i> {!! setting('informazioni-generali.admission_desk') !!}</div>
            <div class="time"><i class="fa fa-clock-o"></i> {!! setting('informazioni-generali.admission_desk_time') !!}</div>
        @endif
        @if(setting('informazioni-generali.cartelle_cliniche') != '')
            <h6>{{ trans('app.medicalRecords') }}</h6>
            <div class="phone"><i class="fa fa-phone-square"></i> {!! setting('informazioni-generali.cartelle_cliniche') !!}</div>
            <div class="time"><i class="fa fa-clock-o"></i> {!! setting('informazioni-generali.cartelle_cliniche_time') !!}</div>
        @endif
        @if(setting('informazioni-generali.cup') != '')
            <h6>C.U.P.</h6>
            <div class="phone"><i class="fa fa-phone-square"></i> {!! setting('informazioni-generali.cup') !!}</div>
            <div class="time"><i class="fa fa-clock-o"></i> {!! setting('informazioni-generali.cup_time') !!}</div>
        @endif
    </div>


    <h4> Email</h4>
    <ul class="th-workingtime">
        <li>
            <span style="width: 20%;"><i class="fa fa-envelope-o"></i></span>
            <span style="width: 80%;"><a style="color: white;" href="mailto:{!! setting('informazioni-generali.email') !!}">{!! setting('informazioni-generali.email') !!}</a></span>
        </li>
        <li>
            <span style="width: 20%;"><i class="fa fa-envelope-o"></i></span>
            <span style="width: 80%;"><a style="color: white;" href="mailto:{!! setting('informazioni-generali.email_gg') !!}">{!! setting('informazioni-generali.email_gg') !!}</a></span>
        </li>
    </ul>
    <h4> {{ trans('app.direzione') }}</h4>
    <div class="contatti">
        @if(setting('informazioni-generali.direttore-generale') != '')
            <p><span>{{ trans('app.direttoreGenerale') }}:</span> {!! setting('informazioni-generali.direttore-generale') !!}</p>
        @endif
        @if(setting('informazioni-generali.direttore-sanitario') != '')
            <p><span>{{ trans('app.direttoreSanitario') }}:</span> {!! \App\Doctor::first()->sanitario()->fullName() !!}</p>
        @endif
        @if(setting('informazioni-generali.direttore-scientifico') != '')
            <p><span>{{ trans('app.direttoreScientifico') }}:</span> {!! setting('informazioni-generali.direttore-scientifico') !!}</p>
        @endif
    </div>

</div>

<style>
    div.contatti {
        width: 100%;
        float: left;
        color: white;
        margin-top: 15px;
    }
    .contatti h6, .contatti p {
        color: white;
        padding: 5px 15px 5px 45px;
        clear: both;
        font-weight: 100;
    }
    .contatti p span {
        text-transform: uppercase;
        font-weight: 100;
    }
    .contatti div.phone, .contatti div.time {
        width: 50%;
        float: left;
        font-weight: 100;
    }
    .contatti div.time {
        padding: 0 45px 20px 20px;
    }
    .contatti div.phone {
        padding: 0 15px 20px 45px;
    }
    .contatti div.time i.fa-clock-o {
        position: absolute;
        margin: 3px 0 0 -20px;
    }
    @media screen and (max-width: 1199px) {
        .contatti h6, .contatti p {
            padding-left: 20px;
        }
        .contatti div.phone, .contatti div.time {
            width: 100%;
        }
        .contatti div.phone {
            padding: 0 15px 10px 20px;
        }
        .contatti div.time {
            padding: 0 15px 20px 40px;
        }
    }
</style>
