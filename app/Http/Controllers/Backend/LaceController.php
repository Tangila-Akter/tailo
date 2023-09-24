<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lace;

class LaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lace = Lace::all();
        return view('backend.pages.lace.index', compact('lace'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.lace.create');
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
        $lace = new Lace();
        $lace->name = $request->name;
        $lace->save();

        session()->flash('success', 'lace has been created !!');
        return redirect()->route('admin.lace.index');
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
        $lace = Lace::find($id);
        return view('backend.pages.lace.edit', compact('lace'));
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
        $lace = Lace::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $lace->name = $request->name;
        $lace->save();

        session()->flash('success', 'Lace has been updated !!');
        return redirect()->route('admin.lace.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lace = Lace::find($id);
        if (!is_null($lace)) {
            $lace->delete();
        }

        session()->flash('success', 'Lace has been deleted !!');
        return back();
    }
}
