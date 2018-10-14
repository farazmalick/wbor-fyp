@extends('layouts.admin')


@section('content')

    <h1 class="w3-animate-right" style="text-align: center">Update & Delete Section:</h1>

    {!! Form::model($reservations,['method'=>'PATCH','action'=>['UsersController@update',$reservations->id]]) !!}

    {{csrf_field()}}

    <div class="form-group">

        {!! Form::label('restaurant_id','Restaurant:') !!}

        {!! Form::select('restaurant_id',[''=>'Choose Destination']+$restaurants,null,['class'=>'form-control', 'readonly' => 'true']) !!}

    </div>


    <div class="form-group">

        {!! Form::label('date','Date') !!}
        {!! Form::text('date',null,['class'=>'form-control', 'readonly' => 'true']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('time','Time') !!}
        {!! Form::time('time',null,['class'=>'form-control', 'readonly' => 'true']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('guests','No of Guests') !!}
        {!! Form::number('guests',null,['class'=>'form-control', 'readonly' => 'true']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone',null,['class'=>'form-control', 'readonly' => 'true']) !!}

    </div>



    <div class="form-group">

        {!! Form::label('message','Message:') !!}
        {!! Form::textarea('message',null,['class'=>'form-control','rows'=>3, 'readonly' => 'true']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('status','Status:') !!}

        {!! Form::select('status',array('confirmed'=>'confirmed','cancelled'=>'cancelled'),null,['class'=>'form-control']) !!}

    </div>


    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE','action'=>['UsersController@destroy',$reservations->id]]) !!}


    <div class="form-group">
        {!! Form::submit('Delete ',['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}


@stop