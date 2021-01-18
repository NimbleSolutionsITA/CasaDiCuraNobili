
@extends('main')

@section('title', 'ACCOGLIENZA')

@section('content')

    <!--************************************
				Home Slider Start
		*************************************-->
    <div class="th-innerpagebanner th-haslayout th-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/bgparallax/bgparallax-05.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="th-pagetitle">
                        <h1>Page Not Found</h1>
                    </div>
                    <ol class="th-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><span>Error 404</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="th-main" class="th-main th-haslayout">
        <div class="container">
            <div class="row">
                <div id="th-content" class="th-content">
                    <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="th-404content">
                            <div class="th-404tital">
                                <h2>4<i class="fa fa-yelp"></i>4</h2>
                            </div>
                            <h3>Sorry, <span>No Content Found</span></h3>
                            <div class="th-description">
                                <p>Can you tell me how to get how to get to sesame street now the world don't move to the beat of just one drum what might be right for you may not be right for some so join us here each week my friends smile from seven</p>
                            </div>
                            <div class="th-backhome">
                                <a class="th-btn" href="#">Back to Home</a>
                                <span>or</span>
                                <form class="th-formsearch">
                                    <fieldset>
                                        <input type="text" class="form-control" name="SearchKeywords" placeholder="Search by Key words">
                                        <button class="th-btn" type="submit">Search</button>
                                    </fieldset>
                                </form>
                            </div>
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
