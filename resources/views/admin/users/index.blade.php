@extends('layouts.admin')




@section('content')

    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align: center">Administrators</h1>
    </div>


        @if($admins)

            <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
                <thead>
                <tr class="w3-red">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
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
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">{{$admins->render()}}</div>
    </div>


@stop


