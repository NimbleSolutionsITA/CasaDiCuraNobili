@extends('main')

@section('title', trans('app.trasparenza'))

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
                                        {!! $content->body !!}

                                        <br>

                                        <div id="th-accordion-{{ $content->id }}" class="th-accordion">
                                            @foreach($documents->where('doc_type', $content->key)->groupBy(function ($val) { return \Carbon\Carbon::parse($val->date)->format('Y'); }) as $year => $documenti)
                                                <div class="th-panel">
                                                    <h4>{{ $year }}</h4>
                                                    <div class="th-panelcontent">
                                                        <div class="th-description">
                                                            <table class="file-list">
                                                                @foreach($documenti as $document)
                                                                    <tr>
                                                                        <td width="100px">
                                                                            <div class="file-pdf"><i class="fa fa-file-pdf-o fa-th-large"></i></div>
                                                                        </td>
                                                                        <td class="file-info"><span>{{ $document->getTranslatedAttribute('name') == '' ? $document->getTranslatedAttribute('name', 'it') : $document->getTranslatedAttribute('name') }}</span><br>
                                                                            {{ trans('app.'.$document->doc_type) }} - {{ \Carbon\Carbon::parse($document->date)->formatLocalized('%d/%m/%Y') }}</td>
                                                                        <td width="150px">
                                                                            <a href="/storage/{{ json_decode($document->file)[0]->download_link}}" target="_blank">
                                                                                <i class="fa fa-arrow-down"></i><br>
                                                                                {{ trans('app.downloadDoc') }}
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

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
                Tab End
        *************************************-->

    </main>
    <!--************************************
            Main End
    *************************************-->

    <style>
        .tab-pane li {
            text-indent: -20px;
            margin-left: 40px;
        }
        .th-featuresnav span{
            text-transform:none;
        }
        .file-list {
            width: 100%;
            background: none;
            overflow: scroll;
        }
        .file-list tr {
            display: table;
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 1px solid lightgray;
            padding-bottom: 10px;
        }
        .file-list tr:hover {
            background-color: rgba(255, 255, 255, .5);
        }
        .file-list td {
            border: none;
            padding-bottom: 5px;
            line-height: 1.5;
        }
        .file-list .file-pdf {
            width: 72px;
            border-left: 10px #859CC9 solid;
            margin-left: 10px;
        }
        .file-list .file-pdf span {
            font-size: 20px;
            line-height: 22px;
        }
        .file-list .file-pdf i {
            font-size: 40px;
            margin: 10px;
            color: #859CC9;
        }
        .file-list .file-info {
            text-align: left;
        }
        .file-list .file-info span {
            font-weight: bold;
            font-size: 1.2em;
        }
        .file-list i.fa.fa-arrow-down {
            color: #859CC9;
            border: 1px solid;
            border-radius: 20px;
            padding: 6px;
        }

        .th-featuresnav li {
            line-height: 50px;
        }
        table.tabella2 {
            clear: both;
        }
        table.tabella2 tr td {
            padding: 5px 5px 5px 10px;
            height: 35px;
            line-height: 25px;
        }
        table.tabella2 td {
            vertical-align: top;
            text-align: left;
        }
        table.tabella2 tr th {
            width: 230px;
            padding: 5px 5px 5px 10px;
            height: 35px;
            line-height: 25px;
            color: #ffffff;
            background: #859CC9;
            font-weight: normal;
            text-align: left;
        }
        table.tabella2 tr th.mail{
            width: 55px;
        }
        table.tabella2 tr td span {
            font-size: 20px;
            padding-left: 7px;
        }
        table.tabella2 tr:nth-child(odd) {
            background-color: #e6e6e6 !important;
        }
        table.tabella2 tr:nth-child(even) {
            background-color: #ffffff !important;
        }
    </style>

@endsection

@section('scripts')
    <script type="text/javascript">

        @foreach($contents as $content)

            function accordion{{ $content->id }}() {
                jQuery('.th-panelcontent').hide();
                jQuery('#th-accordion-{{ $content->id }} h4:first').addClass('active').next().slideDown('slow');
                jQuery('#th-accordion-{{ $content->id }} h4').on('click', function() {
                    if(jQuery(this).next().is(':hidden')) {
                        jQuery('#th-accordion-{{ $content->id }} h4').removeClass('active').next().slideUp('slow');
                        jQuery(this).toggleClass('active').next().slideDown('slow');
                    }
                });
            }
            accordion{{ $content->id }}();

            jQuery('#th-accordion-{{ $content->id }} h4:first').next().slideDown('slow');

        @endforeach

    </script>
@stop
