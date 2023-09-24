<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ful;

class FulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ful = Ful::all();
        return view('backend.pages.ful.index', compact('ful'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.ful.create');
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
        $ful = new Ful();
        $ful->name = $request->name;
        $ful->save();

        session()->flash('success', 'ful has been created !!');
        return redirect()->route('admin.ful.index');
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
        $ful = Ful::find($id);
        return view('backend.pages.ful.edit', compact('ful'));
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
        $ful = Ful::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $ful->name = $request->name;
        $ful->save();

        session()->flash('success', 'Ful has been updated !!');
        return redirect()->route('admin.ful.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ful = Ful::find($id);
        if (!is_null($ful)) {
            $ful->delete();
        }

        session()->flash('success', 'Ful has been deleted !!');
        return back();
    }
}
