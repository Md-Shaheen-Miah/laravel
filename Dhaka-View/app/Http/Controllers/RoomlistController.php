<?php

namespace App\Http\Controllers;

use App\Models\roomlist;
use Illuminate\Http\Request;
use App\Http\Requests\StoreroomlistRequest;
use App\Http\Requests\UpdateroomlistRequest;

class RoomlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list()
    {
        return view('admin-pages.roomform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addstore(StoreroomlistRequest $request)
    {
        $roomlist = new roomlist;
        $roomlist->room_number = $request->room_number;
        $roomlist->room_type = $request->room_type;
        $roomlist->bed_type = $request->bed_type;
        $roomlist->price = $request->price;
        $roomlist->avaiability_status = $request->avaiability_status;
        $roomlist->description = $request->description;
        $roomlist->save();
        return "ok";
    }

    /**
     * Display the specified resource.
     */
    public function show(roomlist $roomlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(roomlist $roomlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroomlistRequest $request, roomlist $roomlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(roomlist $roomlist)
    {
        //
    }
}
