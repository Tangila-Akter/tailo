<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\UpperPocket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class UpperPocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UpperPocket = UpperPocket::all();
        return view('backend.pages.upper-pocket.index', compact('UpperPocket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (is_null($this->user) || !$this->user->can('role.create')) {
        //     abort(403, 'Sorry !! You are Unauthorized to create any role !');
        // }

        $all_permissions  = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.upper-pocket.create', compact('all_permissions', 'permission_groups'));
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

        // Create New UpperPocket
        $UpperPocket = new UpperPocket();
        $UpperPocket->name = $request->name;
        $UpperPocket->save();

        // if ($request->roles) {
        //     $UpperPocket->assignRole($request->roles);
        // }

        session()->flash('success', 'Upper Pocket has been created !!');
        return redirect()->route('admin.upper-pocket.index');
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
        $UpperPocket = UpperPocket::find($id);
        $all_permissions  = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.upper-pocket.edit', compact('UpperPocket', 'all_permissions', 'permission_groups'));
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
        // Create New UpperPocket
        $UpperPocket = UpperPocket::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
        ]);


        $UpperPocket->name = $request->name;

        $UpperPocket->save();

        // $UpperPocket->roles()->detach();
        // if ($request->roles) {
        //     $UpperPocket->assignRole($request->roles);
        // }

        session()->flash('success', 'Upper Pocket has been updated !!');
        return redirect()->route('admin.upper-pocket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $UpperPocket = UpperPocket::find($id);
        if (!is_null($UpperPocket)) {
            $UpperPocket->delete();
        }

        session()->flash('success', 'UpperPocket has been deleted !!');
        return back();
    }
}
