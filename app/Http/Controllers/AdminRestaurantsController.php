<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantsRequest;
use Illuminate\Http\Request;
use App\Admin;
use App\Restaurant;

class AdminRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $restaurants=Restaurant::orderBy('id', 'ASC')->paginate(5);
        return view('admin.restaurants.index',compact('restaurants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantsRequest $request)
    {
        //
        Restaurant::create($request->all());
        return redirect('/admin/restaurants');
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
        $restaurant=Restaurant::findOrFail($id);
        return view('admin.restaurants.edit',compact('restaurant'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantsRequest $request, $id)
    {
        //
        $restaurant=Restaurant::findOrFail($id);
        $restaurant->update($request->all());
        return redirect('/admin/restaurants');
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
        $restaurant=Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect('/admin/restaurants');
    }
}
