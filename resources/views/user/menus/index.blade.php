@extends('layouts.app')



@section('content')
    <h1 style="text-align:center">Menu</h1>
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detail</div>
                    <div class="panel-body">
                        @if($menus)

                            <table class="table">
                                <thead>
                                <tr>

                                    <th></th>
                                    <th>Name</th>
                                    <th>price</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                    <tr>

                                        <td><img height="100" width="100" src="{{URL::to('/')}}/images/{{$menu->photo}}" alt="update Menu"></td>
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
