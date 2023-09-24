<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plate;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plate = Plate::all();
        return view('backend.pages.plate.index', compact('plate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.plate.create');
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
        $plate = new Plate();
        $plate->name = $request->name;
        $plate->save();

        session()->flash('success', 'Plate has been created !!');
        return redirect()->route('admin.plate.index');
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
        $plate = Plate::find($id);
        return view('backend.pages.plate.edit', compact('plate'));
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
        $plate = Plate::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $plate->name = $request->name;
        $plate->save();

        session()->flash('success', 'Plate has been updated !!');
        return redirect()->route('admin.plate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plate = Plate::find($id);
        if (!is_null($plate)) {
            $plate->delete();
        }

        session()->flash('success', 'Plate has been deleted !!');
        return back();
    }
}
