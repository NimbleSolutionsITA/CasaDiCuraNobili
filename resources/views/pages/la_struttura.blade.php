@extends('main')

@section('title', trans('app.aboutUs'))

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
            Main Start
    *************************************-->
    <main id="th-main" class="th-main th-haslayout">

        <!--************************************
					Tab Start
			*************************************-->
        <section class="th-haslayout th-pattrenone th-pattrenone-repeat">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="th-featuresarea">
                            <div style="width: 33.33%; float: left; margin: 0 30px 0 0;">
                                <ul class="th-featuresnav" role="tablist">
                                    @foreach($contents as $content)
                                        <li role="presentation" @if($anchor == $content->key)class="active" @endif>
                                            <a href="#{{ $content->key }}" role="tab" data-toggle="tab">
                                                <i class="{{ $content->icon }}"></i>
                                                <span> {{ $content->getTranslatedAttribute('title') }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                @include('pages.partials.sidebar_opening')
                            </div>
                            <div class="tab-content th-featurestabcontent">
                                @foreach($contents as $content)
                                    <div role="tabpanel" class="tab-pane @if($anchor == $content->key)active @endif "
                                         id="{{ $content->key }}">
                                        <h2>{!! trans('app.'.$content->key.'Span') !!}</h2>
                                        @if($content->key == 'gallery')
                                            <div class="grid" >
                                                <div class="grid-sizer"></div>

                                                @foreach($content->gallery() as $gallery)
                                                    <div class="grid-item">
                                                        <a href="{!! asset($gallery) !!}" data-fancybox="gallery">
                                                            <img src="{!! asset($gallery) !!}" alt="{{setting('site.title')}} - gallery">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            {!! $content->getTranslatedAttribute('body') !!}
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Tab End
        *************************************-->

    </main>
    <!--************************************
            Main End
    *************************************-->

    <style>
        .grid-sizer, .grid-item {
            width: 32%;
            padding-bottom: 5px;
        }
        .tab-pane li {
            text-indent: -20px;
            margin-left: 40px;
        }

        @media (max-width:767px) {
            .grid-sizer, .grid-item {
                width: 49%;
                padding-bottom: 5px;
            }
        }
    </style>

@endsection

@section('scripts')
    <script type="text/javascript">

        $("[data-fancybox]").fancybox({
            // Options will go here
        });

        $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-sizer',
                gutter: 5
            }
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            if(e.target.hash == '#gallery') {
                $('.grid').isotope('layout');
            }
        });

    </script>
@stop
