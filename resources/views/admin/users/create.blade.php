@extends('layouts.admin')




@section('content')
    <h1>Create Admin</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminsController@store']) !!}


    <div class="form-group">

        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('password','Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Create Admin',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.createuserform_error')

@stop







