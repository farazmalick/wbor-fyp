<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Menu;


use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus=Menu::orderBy('id', 'ASC')->paginate(8);
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\MenusRequest $request)
    {
        //
        $input=$request->all();
        $user=Auth::guard('admin')->user();
        if($file=$request->file('photo'))
        {
            $name="menu".time().$file->getClientOriginalName();
            $file->move('images',$name);
            $input['photo']=$name;

        }
        $user->menus()->create($input);

        return redirect('/admin/menus');


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
        $menu=Menu::findOrFail($id);
        return view('admin.menus.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\MenusRequest $request, $id)
    {
        //
        $input=$request->all();

        if($file=$request->file('photo'))
        {
            $name="menu".time().$file->getClientOriginalName();
            $file->move('images',$name);
            $input['photo']=$name;

        }
        Auth::guard('admin')->user()->menus()->whereId($id)->first()->update($input);

        return redirect('/admin/menus');

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
        $menu=Menu::findOrFail($id);
        $path="/images/".$menu->photo;
        unlink(public_path().$path);
        $menu->delete();
        return redirect('/admin/menus');

    }
}
