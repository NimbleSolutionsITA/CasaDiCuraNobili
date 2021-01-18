
@extends('main')

@section('title', $post->title)

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
				Main Start
		*************************************-->
    <main id="th-main" class="th-main th-haslayout">
        <div class="container">
            <div class="row">
                <div id="th-twocolumns" class="th-twocolumns">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div id="th-content" class="th-content">
                            <article class="th-post th-postdetail">
                                <figure class="th-postimg">
                                    <a href="#"><img src="{{ $post->imageUrl() }}" alt="image description"></a>
                                    <figcaption>
                                        <ul class="th-postmate">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>{{ $post->updated_at->diffForHumans() }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-asterisk"></i>
                                                    <span>{{ $post->category->name }}</span>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-share"></i>
                                                    <span>Share </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            -->
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="th-postcontent">
                                    <div class="th-posttitel">
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                    <div class="th-description">
                                        {!! $post->body !!}
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside id="th-sidebar" class="th-sidebar">
                            @include('pages.partials.category-sidebar')
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection