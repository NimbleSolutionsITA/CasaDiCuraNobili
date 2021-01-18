
@extends('main')

@section('title', trans('app.news'))

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
                            <div  class="th-posts th-poststwo th-postslist">
                                @foreach($posts as $post)
                                <article class="th-post">
                                    <figure class="th-postimg">
                                        <a href="/news/{{ $post->category->slug }}/{{ $post->slug }}"><img src="{{ $post->imageUrl('news') }}" alt="image description"></a>
                                    </figure>
                                    <div class="th-postcontent">
                                        <ul class="th-postmate">
                                            <li>
                                                <a href="/news/{{ $post->category->slug }}/{{ $post->slug }}">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>{{ $post->updated_at->diffForHumans() }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/news/{{ $post->category->slug }}">
                                                    <i class="fa fa-asterisk"></i>
                                                    <span>{{ $post->category->slug }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="th-posttitel">
                                            <h3><a href="/news/{{ $post->category->slug }}/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                        </div>
                                        <div class="th-description">
                                            <p>{!! $post->excerpt(300, '...', true) !!}</p>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                        {!! $posts->links() !!}
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