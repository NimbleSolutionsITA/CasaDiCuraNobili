
@extends('main')

@section('title', 'Privacy Policy')

@section('content')

    <!--************************************
				Main Start
		*************************************-->
    <main id="th-main" class="th-main th-haslayout th-bgpattrensection">
        <div class="container">
            <div class="row">
                <div id="th-twocolumns" class="th-twocolumns">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="th-content" class="th-content">
                            {!! $content->getTranslatedAttribute('body') !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection



@section('extra-css')

    <style>
        ol.alpha li {
            list-style: lower-alpha;
        }
    </style>

@endsection
