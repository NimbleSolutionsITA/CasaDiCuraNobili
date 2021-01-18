<!--************************************
				Breadcrumb Start
		*************************************-->
<div class="th-innerpagebanner th-haslayout th-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/bgparallax/bgparallax-05.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="th-pagetitle">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
                <ol class="th-breadcrumb">
                    <li><a href="/">Home</a></li>
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                        <li><span>
                            {{Request::segment($i)}}
                        </span></li>
                    @endfor
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Breadcrumb End
*************************************-->

