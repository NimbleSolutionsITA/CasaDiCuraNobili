<!--************************************
            Home Slider Start
    *************************************-->
<div id="th-homeslider" class="th-homeslider th-haslayout">
    @foreach($slides as $slide)
        <figure class="item">
            <img src="@if(isset($slide->photo)) {{ asset("storage/".$slide->photo) }} @else /images/slider/img-01.jpg @endif" alt="image description">
            <figcaption>
                <div class="container">
                    <div class="th-slidercontent">
                        <h1>{{ $slide->getTranslatedAttribute('title') }}<span>{{ $slide->getTranslatedAttribute('subtitle') }}</span></h1>
                        <div class="th-description">
                            <p>{{ $slide->getTranslatedAttribute('body') }}</p>
                        </div>
                        @if(isset($slide->link1) or isset($slide->link2))
                            <div class="th-btns">
                                @if(isset($slide->link1)) <a class="th-btn" href="{{ $slide->link1 }}">{{ $slide->getTranslatedAttribute('button1') }}</a> @endif
                                @if(isset($slide->link2)) <a class="th-btn" href="{{ $slide->link2 }}">{{ $slide->getTranslatedAttribute('button2') }}</a> @endif
                            </div>
                        @endif
                    </div>
                </div>
            </figcaption>
        </figure>
    @endforeach
</div>
<!--************************************
        Home Slider End
*************************************-->