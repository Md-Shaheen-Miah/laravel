<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;

class AdminController extends Controller
{
    public function index()
    {
        //
    }

    public function adduser()
    {
        return view('admin-pages.adduser');
    }

    public function addadmin(StoreadminRequest $request)
    {
        $admin = new admin;
        $admin->one = $request->one;
        $admin->two = $request->two;
        $admin->three = $request->three;
        $admin->four = $request->four;
        $admin->five = $request->five;
        $admin->save();

        return "store data";
    }

    public function show(admin $admin)
    {
        //
    }

    public function edit(admin $admin)
    {
        //
    }

    public function update(UpdateadminRequest $request, admin $admin)
    {
        //
    }

    public function destroy(admin $admin)
    {
        //
    }
}
