<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="th-appointment-modal">
                <div class="th-appointmentcounters">
                    <div class="th-formhead">
                        <i><img src="/images/icon/img-25.png" alt="image description"></i>
                        <h3>{!! trans('app.appointmentSpan') !!}</h3>
                    </div>
                    <form class="th-formappointment" action="{{ url('headForm') }}" method="POST">
                        {{ csrf_field() }}
                        {!! honeypot('honeypot_name', 'honeypot_time') !!}
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="{{ trans('app.name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="{{ trans('app.email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="{{ trans('app.phone') }}">
                            </div>
                            <div class="form-group">
                                <input type="number" min="0" max="120" name="age" class="form-control" placeholder="{{ trans('app.age') }}">
                            </div>
                            <div class="form-group">
									<span class="th-select">
										<select name="department">
                                            <option  selected="true" disabled="disabled">{{ trans('app.selectDep') }}</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->getTranslatedAttribute('name') }}</option>
                                            @endforeach
										</select>
									</span>
                            </div>
                            <div class="form-group">
                                <div class="th-dateinputicon">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" name="date" class="form-control th-datetimepicker" placeholder="{{ trans('app.date') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="4" name="message" class="form-control" placeholder="{{ trans('app.notes') }}" style="height: auto;"></textarea>
                            </div>
                            <button class="th-btnform th-btnform-lg" type="submit">{{ trans('app.sendRequest') }}</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
