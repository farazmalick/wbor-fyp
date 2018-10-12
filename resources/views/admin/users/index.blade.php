@extends('layouts.admin')




@section('content')
    <h1>Administrators</h1>


        @if($admins)

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td><a href="#">{{$admin->name}}</a></td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->created_at?$admin->created_at->diffForHumans():'Date Not Available'}}</td>
                        <td>{{$admin->updated_at?$admin->updated_at->diffForHumans():'Date Not Available'}}</td>
                        <td>

                            {!! Form::open(['method'=>'DELETE','action'=>['AdminsController@destroy',$admin->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete Admin',['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>





        @endif

@stop


