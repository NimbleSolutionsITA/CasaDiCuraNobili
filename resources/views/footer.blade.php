<!--************************************
            Footer Start
    *************************************-->
<footer id="th-footer" class="th-footer th-haslayout">
    <div class="th-footertopbar">
        <div class="container">
            <div class="row">
                <ul class="th-fservices">
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-info-circle"></i></span>
                        <div class="th-contentbox">
                            <a href="{{ url('accoglienza#accoglienza-informazioni-utili') }}"><strong>{!! trans('app.informazioni-utiliSpan') !!}</strong></a>
                        </div>
                    </li>
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-rocket"></i></span>
                        <div class="th-contentbox">
                            <a href="{{ url('la-struttura/mission') }}"><strong>{!! trans('app.missionSpan') !!}</strong></a>
                        </div>
                    </li>
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-stethoscope"></i></span>
                        <div class="th-contentbox">
                            <a href="{{ url('attivita/servizi-ambulatoriali') }}"><strong>{!! trans('app.serviziSpan') !!}</strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-footermiddlebox th-sectionspace th-haslayout th-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/bgparallax/bgparallax-03.jpg">
        <div class="container">
            <div class="row">
                <div class="th-fcols">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <strong class="th-logo">
                                <a href="https:\\www.garofalohealthcare.com">
                                    <img src="{{ url('/images/logo-ghc-white.png') }}" alt="image description">
                                </a>
                            </strong>
                            <ul class="th-faddressinfo">
                                <li>
                                    <span class="th-addressicon"><img src="{{ url('/images/icon/img-08.png') }}" alt="image description"></span>
                                    <address>{{ setting('informazioni-generali.address_gg') }}</address>
                                </li>
                                <li>
                                    <span class="th-addressicon"><img src="{{ url('/images/icon/img-09.png') }}" alt="image description"></span>
                                    <div class="th-phone">
                                        <span>TEL: {{ setting('informazioni-generali.phone_gg') }}</span>
                                        <span>FAX: {{ setting('informazioni-generali.fax_gg') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="th-addressicon"><img src="{{ url('/images/icon/img-10.png') }}" alt="image description"></span>
                                    <div class="th-phone" style="font-size: .9em;">
                                        <span><a href="mailto:{{ setting('informazioni-generali.email_gg') }}">{{ setting('informazioni-generali.email_gg') }}</a></span>
                                        <span><a href="http:\\www.garofalohealthcare.com"><i>www.garofalohealthcare.com</i></a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3>{{ $contents->where('key', 'footer')->first()->getTranslatedAttribute('title') }}</h3>
                            </div>
                            <div class="th-description">
                                {!! $contents->where('key', 'footer')->first()->getTranslatedAttribute('body') !!}
                            </div>
                            <!--
                            <ul class="th-socialicons th-socialiconsround">
                                @if(!empty(setting('informazioni-generali.facebook')))<li><a href="{{ setting('informazioni-generali.facebook') }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.linkedin')))<li><a href="{{ setting('informazioni-generali.likedin') }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.googleplus')))<li><a href="{{ setting('informazioni-generali.googleplus') }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.twitter')))<li><a href="{{ setting('informazioni-generali.twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                            </ul>
                            -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3>{{ trans('app.usefulLink') }}</h3>
                            </div>
                            {{ menu('footer', 'layouts.footer_nav') }}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3>{{ trans('app.recentNews') }}</h3>
                            </div>
                            <ul class="th-recentpost">
                                @foreach ($news->take(3) as $post)
                                    <li>
                                        <figure><a href="/news/{{ \App\Category::find($post->category_id)->slug }}/{{ $post->slug }}"><i><img src="{{ $post->imageUrl('footer') }}" alt="image description"></i></a></figure>
                                        <div class="th-shortcontent">
                                            <time datetime="{{ Carbon\Carbon::parse($post->created_at)->formatLocalized('%d %B %Y') }}">{{ $post->created_at->diffForHumans() }}</time>
                                            <a style="color: white;" href="{{ url('/news/'.\App\Category::find($post->category_id)->slug.'/'.$post->slug) }}">{{ $post->title }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="th-footerbottombar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <span class="th-copyright">Made with <i style="color: #D9534F;" class="fa fa-heart"></i> by <a style="color: white; text-decoration: underline;" href="http://www.nimble-solutions.com" target="_blank">Nimble Solutions</a></span>
                    <nav class="th-footernav" style="float: right;">
                        <ul>Società soggetta all'attività di direzione e coordinamento di <a style="display: inline; color:white;" href="https://www.garofalohealthcare.com/" target="_blank">Garofalo Health Care S.p.A.</a> - <a style="display: inline; color:white;" href="/privacy-policy">Privacy Policy</a>
                            <li> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
