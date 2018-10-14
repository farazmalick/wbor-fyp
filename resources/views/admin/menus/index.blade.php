@extends('layouts.admin')




@section('content')
    <h1 style="text-align: center">Menu</h1>
    @if($menus)

        <table class="table w3-table-all  w3-centered w3-hoverable">
            <thead>
            <tr class="w3-red">
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>price</th>
                <th>Added By</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td>{{$menu->id}}</td>
                    <td><img height="50" width="50" src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="update Menu"></td>
                    <td><a href="{{route('admin.menus.edit',$menu->id)}}">{{$menu->name}}</a></td>
                    <td>{{$menu->price}}</td>
                    <td>{{$menu->admin->name}}</td>
                    <td>{{$menu->created_at?$menu->created_at->diffForHumans():'Date Not Available'}}</td>
                    <td>{{$menu->updated_at?$menu->updated_at->diffForHumans():'Date Not Available'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">{{$menus->render()}}</div>
        </div>





    @endif









@stop







