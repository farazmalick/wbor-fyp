@extends('layouts.admin')




@section('content')
    <h1 class="w3-animate-bottom" style="text-align: center">Menu Edit and Delete Section:</h1>

    <div class="row">
        <div class="col-sm-3">


            <img class="w3-animate-zoom" height="260" width="275" src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="" class="img-responsive img-rounded">


        </div>


        <div class="col-sm-9">

    {!! Form::model($menu,['method'=>'PATCH','action'=>['AdminMenusController@update',$menu->id],'files'=>true]) !!}


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
        {!! Form::submit('Update',['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['AdminMenusController@destroy',$menu->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete',['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}
            @include('includes.createuserform_error')

    </div>

    </div>










@stop







