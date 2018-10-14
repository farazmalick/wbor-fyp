@extends('layouts.admin')


@section('content')

    <div class="w3-container">
        <h1 class="w3-animate-right" style="text-align:center">Reservations</h1>
    </div>

    <table class="table w3-table-all  w3-centered w3-hoverable w3-card w3-animate-bottom">
        <thead>
        <tr class="w3-red">
            <th>Id</th>
            <th>User</th>
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
                    <td><div class="w3-tooltip"><span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">click to edit!</span>
                            <a href="{{route('user.reservations.edit',$reservation->id)}}">{{$reservation->status}}</a></div></td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">{{$reservations->render()}}</div>
    </div>




@stop