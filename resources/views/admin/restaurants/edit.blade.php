@extends('layouts.admin');




@section('content')

    <h1>Delete and Update Section</h1>



    <div class="col-sm-6">

        {!! Form::model($restaurant,['method'=>'PATCH','action'=>['AdminRestaurantsController@update',$restaurant->id]]) !!}


        <div class="form-group">

            {!! Form::label('address','Address:') !!}
            {!! Form::text('address',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Update Adddress',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}



        {!! Form::open(['method'=>'DELETE','action'=>['AdminRestaurantsController@destroy',$restaurant->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Address',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}




    </div>






@stop