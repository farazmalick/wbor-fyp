@extends('layouts.admin')




@section('content')
<h1 style="text-align: center">Restaurant Branches</h1>

<div class="col-sm-6">
    {!! Form::open(['method'=>'POST','action'=>'AdminRestaurantsController@store']) !!}



    <div class="form-group">

        {!! Form::label('address','Address') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Add New',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.createuserform_error')





</div>
<div class="col-sm-6">

    @if($restaurants)

        <table class="table w3-table-all  w3-centered w3-hoverable">

            <thead>

            <tr class="w3-red">
                <th>Id</th>
                <th>Address</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{$restaurant->id}}</td>
                    <td><a href="{{route('admin.restaurants.edit',$restaurant->id)}}">{{$restaurant->address}}</a></td>
                    <td>{{$restaurant->created_at?$restaurant->created_at->diffForHumans():'Date Not Available'}}</td>
                    <td>{{$restaurant->updated_at?$restaurant->updated_at->diffForHumans():'Date Not Available'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>





    @endif
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">{{$restaurants->render()}}</div>
        </div>



</div>






@stop







