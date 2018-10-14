@extends('layouts.admin')


@section('content')

    <h1 style="text-align: center">Reservations</h1>
    <table class="table">
        <thead>
        <tr>
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
                    <td>{{$reservation->restaurant->address}}</td>
                    <td>{{$reservation->date}}</td>
                    <td>{{$reservation->time}}</td>
                    <td>{{$reservation->guests}}</td>
                    <td>{{$reservation->phone}}</td>
                    <td><a href="{{route('user.reservations.edit',$reservation->id)}}">{{$reservation->status}}</a></td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">{{$reservations->render()}}</div>
    </div>




@stop