@extends('layouts.admin')




@section('content')
    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align: center">Menu</h1>

    </div>


    @if($menus)

        <table class="table w3-table-all  w3-centered w3-hoverable w3-animate-bottom">
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
                    <td><div class="w3-dropdown-hover">
                    <img class="w3-animate-zoom" height="50" width="50" src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="update Menu">
                            <div class="w3-dropdown-content" style="width:200px">
                                <img src="{{URL::to('/')}}/images/{{$menu->photo}}"  style="width:100%">
                            </div>
                        </div>
                    </td>

                    <td><div class="w3-tooltip"><span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">click to edit!</span>
                            <a href="{{route('admin.menus.edit',$menu->id)}}">{{$menu->name}}</a></div></td>
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







