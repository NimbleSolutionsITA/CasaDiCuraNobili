
@extends('main')

@section('title', 'HOME')

@section('content')

    @include('pages.partials.home_slider')

    <!--************************************
            Main Start
    *************************************-->
    <main id="th-main" class="th-main th-haslayout">

        @include('pages.partials.departments')

        @include('pages.partials.statistics')

        @include('pages.partials.latest_news')

    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
