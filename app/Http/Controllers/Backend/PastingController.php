<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasting;

class PastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasting = Pasting::all();
        return view('backend.pages.pasting.index', compact('pasting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.pasting.create');
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
        $pasting = new Pasting();
        $pasting->name = $request->name;
        $pasting->save();

        session()->flash('success', 'pasting has been created !!');
        return redirect()->route('admin.pasting.index');
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
        $pasting = Pasting::find($id);
        return view('backend.pages.pasting.edit', compact('pasting'));
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
        $pasting = Pasting::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $pasting->name = $request->name;
        $pasting->save();

        session()->flash('success', 'Pasting has been updated !!');
        return redirect()->route('admin.pasting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasting = Pasting::find($id);
        if (!is_null($pasting)) {
            $pasting->delete();
        }

        session()->flash('success', 'Pasting has been deleted !!');
        return back();
    }
}
