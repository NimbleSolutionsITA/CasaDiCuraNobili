<!--************************************
					quick contact Start
			*************************************-->
<section class="th-sectionspace th-haslayout th-quickcontact th-quickcontacttwo">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0 col-xs-12">
                <div class="th-quickcontactinfo">
                    <h3><span>Frequent Queries?</span>Questions from Clients</h3>
                    <div class="th-description">
                        <p>This is what we call the Muppet Show moving on up to the east side we finally got a piece of the pie the weather started getting rough</p>
                    </div>
                    <div id="th-accordion" class="th-accordion">
                        @foreach($ricovero as $item)
                        <div class="th-panel">
                            <h4>{{ $item->getTranslatedAttribute('title') }}</h4>
                            <div class="th-panelcontent">
                                <div class="th-description">
                                    {!! str_limit(strip_tags($item->getTranslatedAttribute('body')), 200) !!}... <a href="/accoglienza/accettazione-e-ricovero#{{ $item->key }}"><i>{{ trans('app.readMore') }}</i></a>
                                </div>
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
        quick contact End
*************************************-->