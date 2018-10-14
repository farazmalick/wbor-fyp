@extends('layouts.admin')




@section('content')
    <h1 class="w3-animate-bottom" style="text-align: center">Add New Menu Item</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminMenusController@store','files'=>true]) !!}

    {{csrf_field()}}

    <div class="form-group">

        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('price','Price:') !!}
        {!! Form::number('price',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('photo','Photo:') !!}
        {!! Form::file('photo',['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Add Item',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.createuserform_error')






@stop







