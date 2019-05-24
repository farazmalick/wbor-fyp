@extends('layouts.app')



@section('content')
    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align:center">Reservations</h1>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading w3-animate-left">History</div>
                    <div class="panel-body">
                        <table class="table w3-table-all  w3-centered w3-hoverable w3-card-4 w3-animate-bottom">
                            <thead>
                            <tr class="w3-red">
                                <th>Reservation Code</th>

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
                                        <td>{{$reservation->id}}</td>
                                        <td>{{$reservation->user->name}}</td>
                                        <td>{{$reservation->restaurant?$reservation->restaurant->address:'Address Not Available'}}</td>
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
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">{{$reservations->render()}}</div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>









@stop
