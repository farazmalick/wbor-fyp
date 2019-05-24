<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\reservation;
use App\User;
use App\Restaurant;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations=reservation::orderBy('id', 'DESC')->paginate(8);
        return view('user.reservations.index',compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               $restaurants=Restaurant::pluck('address','id')->all();
        return view('user.reservations.create',compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::guard('web')->check())
        {
            $user=Auth::guard('web')->user();
            $user->reservations()->create($request->all());
            return redirect('\home');

        }
        else
        {
            return redirect('\login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reservations=reservation::findOrFail($id);
        $restaurants=Restaurant::pluck('address','id')->all();
        return view('user.reservations.edit',compact('reservations','restaurants'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reservation=reservation::findOrFail($id);
        $reservation->update($request->all());
        return redirect('/user/reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reservation=reservation::findOrFail($id);
        $reservation->Delete();
        return redirect('/user/reservations');
    }
}
