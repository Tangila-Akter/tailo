<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Button;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $button = Button::all();
        return view('backend.pages.button.index', compact('button'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.button.create');
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
        $button = new Button();
        $button->name = $request->name;
        $button->save();

        session()->flash('success', 'button has been created !!');
        return redirect()->route('admin.button.index');
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
        $button = Button::find($id);
        return view('backend.pages.button.edit', compact('button'));
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
        $button = Button::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $button->name = $request->name;
        $button->save();

        session()->flash('success', 'Button has been updated !!');
        return redirect()->route('admin.button.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $button = Button::find($id);
        if (!is_null($button)) {
            $button->delete();
        }

        session()->flash('success', 'Button has been deleted !!');
        return back();
    }
}
