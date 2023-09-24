<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Account::all();
        return view('backend.pages.account.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.account.create');
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
            'date' => 'required',
            'reason' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        // Create New User
        $account = new Account();
        $account->date = $request->date;
        $account->reason = $request->reason;
        $account->type = $request->type;
        $account->amount = $request->amount;
        $account->text = $request->text;
        $account->save();

        session()->flash('success', 'Account has been added !!');
        return redirect()->route('admin.account.index');
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
        $account = Account::find($id);
        return view('backend.pages.account.edit', compact('account'));
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
        $account = Account::find($id);

        // Validation Data
        $request->validate([
            'date' => 'required',
            'reason' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        
        $account->date = $request->date;
        $account->reason = $request->reason;
        $account->type = $request->type;
        $account->amount = $request->amount;
        $account->text = $request->text;
        $account->save();

        session()->flash('success', 'account has been updated !!');
        return redirect()->route('admin.account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::find($id);
        if (!is_null($account)) {
            $account->delete();
        }

        session()->flash('success', 'account has been deleted !!');
        return back();
    }
}
