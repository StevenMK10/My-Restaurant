<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Http\Requests\StoreMenusRequest;
use App\Http\Requests\UpdateMenusRequest;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menus::all();
        return $menus;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenusRequest $request)
    {
        $menus = new Menus;
        $menus->name = $request->name;
        $menus->price = $request->price;
        $menus->description = $request->description;
        $menus->category_id = $request->category_id;
        $menus->offers = $request->offers;
        $menus->allegens = $request->allegens;
       
        $menus->save();

        return $menus;
    }

    /**
     * Display the specified resource.
     */
    public function show(Menus $menus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenusRequest $request, Menus $menus)
    {
        $menus = Menus::find($request->id);
        $menus->name = $request->name;
        $menus->price = $request->price;
        $menus->description = $request->description;
        $menus->category_id = $request->category_id;
        $menus->offers = $request->offers;
        $menus->allegens = $request->allegens;
       
        $menus->save();

        return $menus;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menus $menus)
    {
        //
    }
}
