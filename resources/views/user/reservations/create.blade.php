@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservation Form</div>
                    <div class="panel-body">
                            {!! Form::open(['method'=>'POST','action'=>'UsersController@store','class'=>'form-horizontal']) !!}
                            {{ csrf_field() }}

                        <div class="form-group">

                            {!! Form::label('restaurant_id','Restaurant:',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!! Form::select('restaurant_id',[''=>'Choose Destination']+$restaurants,null,['class'=>'form-control']) !!}
                            </div>
                        </div>



                        {{--break--}}
                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label">Date:</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date"  required autofocus>

                                </div>
                            </div>
                            {{--break--}}

                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label">Time:</label>

                                <div class="col-md-6">
                                    <input id="time" type="time" class="form-control" name="time"  required autofocus>

                                </div>
                            </div>
                            {{--break--}}
                            <div class="form-group">
                                <label for="guests" class="col-md-4 control-label">No. of Guests:</label>

                                <div class="col-md-6">
                                    <input id="guests" type="number" class="form-control" name="guests"  maxlength="11" required autofocus>

                                </div>
                            </div>
                            {{--break--}}

                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label">Phone:</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone"  placeholder="e.g. 03034346076" maxlength="11" required autofocus>

                                </div>
                            </div>
                            {{--break--}}
                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label">Message:</label>

                                <div class="col-md-6">
                                    <textarea id="message"  class="form-control" name="message"  maxlength="100" rows="4" required autofocus>Reservation Details</textarea>

                                </div>
                            </div>
                            {{--break--}}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reserve
                                    </button>
                                </div>
                            </div>





                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
