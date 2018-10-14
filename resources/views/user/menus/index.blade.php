@extends('layouts.app')



@section('content')

    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align:center">Menu</h1>
    </div>



        <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading w3-animate-left">Detail</div>
                    <div class="panel-body">
                        @if($menus)

                            <table class="table w3-table-all  w3-centered w3-hoverable w3-card ">
                                <thead>
                                <tr class="w3-red">

                                    <th></th>
                                    <th>Name</th>
                                    <th>price</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td><div class="w3-dropdown-hover">
                                        <img class="w3-animate-zoom"  height="100" width="100" src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="update Menu">
                                            <div class="w3-dropdown-content" style="width:200px">
                                                <img src="{{URL::to('/')}}/images/{{$menu->photo}}"  style="width:100%">
                                            </div>
                                        </div>
                                        </td>
                                            <td><a href="#">{{$menu->name}}</a></td>
                                        <td>{{$menu->price}}/-</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>





                        @endif
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-5">{{$menus->render()}}</div>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>









@stop
