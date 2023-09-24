<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Gola;
use Illuminate\Http\Request;

class GolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gola = Gola::all();
        return view('backend.pages.gola.index', compact('gola'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gola.create');
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
        $gola = new Gola();
        $gola->name = $request->name;
        $gola->save();

        session()->flash('success', 'Gola has been created !!');
        return redirect()->route('admin.gola.index');
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
        $gola = Gola::find($id);
        return view('backend.pages.gola.edit', compact('gola'));
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
        $gola = Gola::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $gola->name = $request->name;
        $gola->save();

        session()->flash('success', 'Gola has been updated !!');
        return redirect()->route('admin.gola.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gola = Gola::find($id);
        if (!is_null($gola)) {
            $gola->delete();
        }

        session()->flash('success', 'Gola has been deleted !!');
        return back();
    }
}
