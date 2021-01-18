<!--************************************
                Latest News Start
        *************************************-->
<section class="th-sectionspace th-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="th-sectionhead">
                    <div class="th-sectiontitle">
                        <h2>{!! trans('app.latestNewsSpan') !!}</h2>
                    </div>
                </div>
            </div>
            <div  class="th-posts">
                @foreach($news as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="th-post">
                            <figure class="th-postimg"
                                <a href="{{ url('/news/'.$post->category->slug.'/'.$post->slug) }}"><img src="{{ $post->imageUrl('home') }}" alt="image description"></a>
                                <figcaption>
                                    <ul class="th-postmate">
                                        <li>
                                            <a href="{{ url('news/'.$post->category->slug.'/'.$post->slug) }}">
                                                <i class="fa fa-calendar"></i>
                                                <span>{{ $post->updated_at->diffForHumans() }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('news/'.$post->category->slug) }}">
                                                <i class="fa fa-asterisk"></i>
                                                <span>{{ $post->category->name }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="th-postcontent">
                                <div class="th-posttitel">
                                    <h3><a href="{{ url('news/'.$post->category->slug.'/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                </div>
                                <div class="th-description">
                                    <p>{!! str_limit(strip_tags($post->body), 120) !!} <a href="{{ url('news/'.$post->category->slug.'/'.$post->slug) }}">{{ trans('app.readMore') }}</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    @break($loop->iteration == 3)
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--************************************
        Latest News End
*************************************-->
