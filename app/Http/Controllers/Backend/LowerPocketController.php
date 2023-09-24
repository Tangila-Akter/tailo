<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LowerPocket;

class LowerPocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lower_pocket = LowerPocket::all();
        return view('backend.pages.lower-pocket.index', compact('lower_pocket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.lower-pocket.create');
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
        $lower_pocket = new LowerPocket();
        $lower_pocket->name = $request->name;
        $lower_pocket->save();

        session()->flash('success', 'Lower pocket has been created !!');
        return redirect()->route('admin.lower_pocket.index');
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
        $lower_pocket = LowerPocket::find($id);
        return view('backend.pages.lower-pocket.edit', compact('lower_pocket'));
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
        $lower_pocket = LowerPocket::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $lower_pocket->name = $request->name;
        $lower_pocket->save();

        session()->flash('success', 'Lower pocket has been updated !!');
        return redirect()->route('admin.lower_pocket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lower_pocket = LowerPocket::find($id);
        if (!is_null($lower_pocket)) {
            $lower_pocket->delete();
        }

        session()->flash('success', 'Lower pocket has been deleted !!');
        return back();
    }
}
