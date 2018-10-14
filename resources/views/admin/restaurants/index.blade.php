@extends('layouts.admin')




@section('content')
    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align: center">Restaurant Branches</h1>


    </div>


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

        <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">

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
                    <td><div class="w3-tooltip"><span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">click to edit!</span>
                            <a href="{{route('admin.restaurants.edit',$restaurant->id)}}">{{$restaurant->address}}</a></div></td>
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







