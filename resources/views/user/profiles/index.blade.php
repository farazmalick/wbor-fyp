@extends('layouts.admin')






@section('content')

    <h1>App Users</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>


        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at?$user->created_at->diffForHumans():'Date Not Available'}}</td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','action'=>['EditProfileController@destroy',$user->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}



                    </td>
                </tr>


            @endforeach
        @endif

        </tbody>
    </table>












@stop