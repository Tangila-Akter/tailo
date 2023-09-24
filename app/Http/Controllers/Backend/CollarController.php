<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\collar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;;

class CollarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collar = collar::all();
        return view('backend.pages.collar.index', compact('collar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.collar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);

        // Create New User
        $collar = new collar();
        $collar->name = $request->name;
        $collar->save();

        session()->flash('success', 'collar has been created !!');
        return redirect()->route('admin.collar.index');
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
        $collar = collar::find($id);
        return view('backend.pages.collar.edit', compact('collar'));
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
        // Create New collar
        $collar = collar::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $collar->name = $request->name;
        $collar->save();

        session()->flash('success', 'collar has been updated !!');
        return redirect()->route('admin.collar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collar = collar::find($id);
        if (!is_null($collar)) {
            $collar->delete();
        }

        session()->flash('success', 'collar has been deleted !!');
        return back();
    }
}
