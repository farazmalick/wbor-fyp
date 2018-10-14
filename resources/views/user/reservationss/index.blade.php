@extends('layouts.app')



@section('content')
    <h1 style="text-align:center">Reservations</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">History</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>

                                <th>User Name</th>
                                <th>Branch</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>No of Persons</th>
                                <th>Phone#</th>
                                <th>Status</th>
                            </tr>
                            </thead>




                            <tbody>
                            @if($reservations)
                                @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{$reservation->user->name}}</td>
                                        <td>{{$reservation->restaurant->address}}</td>
                                        <td>{{$reservation->date}}</td>
                                        <td>{{$reservation->time}}</td>
                                        <td>{{$reservation->guests}}</td>
                                        <td>{{$reservation->phone}}</td>
                                        <td><a href="#">{{$reservation->status}}</a></td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>









@stop
