@extends('layouts.admin')




@section('content')
    <h1>Edit Menu</h1>

    <div class="row">
        <div class="col-sm-3">


            <img src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="" class="img-responsive img-rounded">


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
        {!! Form::submit('Update Menu',['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['AdminMenusController@destroy',$menu->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Item',['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

    </div>

    </div>










@stop







