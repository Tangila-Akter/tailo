<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Stuff;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuff = Stuff::all();
        return view('backend.pages.stuff.index', compact('stuff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.stuff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stuff = new Stuff;

        $stuff->name = $request->name;
        $stuff->phone = $request->phone;
        $stuff->email = $request->email;
        $stuff->date = $request->date;
        $stuff->salary = $request->salary;
        $stuff->position = $request->position;
        $stuff->contract = $request->contract;
        $stuff->address = $request->address;
        
        

         // save image
         if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '_' . 'stuff' . '.' . $extension;
            // Save the file to the storage directory with the unique filename
            $path = $request->file('image')->storeAs('stuff/image', $filename, 'public');
            $stuff->image = '/storage/' . $path;
        }
        $stuff->save();
        session()->flash('success', 'Stuff has been created !!');
        return redirect()->route('admin.stuff.index');
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
        $stuff = Stuff::find($id);
        return view('backend.pages.stuff.edit', compact('stuff'));
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
        $stuff = Stuff::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $stuff->name = $request->name;
        $stuff->phone = $request->phone;
        $stuff->email = $request->email;
        $stuff->date = $request->date;
        $stuff->salary = $request->salary;
        $stuff->position = $request->position;
        $stuff->contract = $request->contract;
        $stuff->address = $request->address;

        // delete old image and upload new image
        if ($request->hasFile('image')) {
            $old_image = public_path($stuff->image);
            File::delete($old_image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '_' . 'stuff' . '.' . $extension;
            // Save the file to the storage directory with the unique filename
            $path = $request->file('image')->storeAs('stuff/image', $filename, 'public');
            $stuff->image = '/storage/' . $path;
        }

        $stuff->save();

        // $UpperPocket->roles()->detach();
        // if ($request->roles) {
        //     $UpperPocket->assignRole($request->roles);
        // }

        session()->flash('success', 'Stuff has been updated !!');
        return redirect()->route('admin.stuff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stuff = Stuff::find($id);
        
        if (public_path($stuff->image)) {
            unlink(public_path($stuff->image));
        }
        $stuff->delete();
        session()->flash('success', 'Stuff has been deleted !!');
        return back();
    }
}
