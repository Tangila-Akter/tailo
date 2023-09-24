<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\UpperPocket;
use App\Models\collar;
use App\Models\Gola;
use App\Models\Plate;
use App\Models\Pasting;
use App\Models\Lace;
use App\Models\Ful;
use App\Models\Button;
use App\Models\LowerPocket;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = order::all();
        $UpperPocket = UpperPocket::all();
        $collar = collar::all();
        $gola = Gola::all();
        $plate = Plate::all();
        $pasting = Pasting::all();
        $lace = Lace::all();
        $ful = Ful::all();
        $button = Button::all();
        $LowerPocket = LowerPocket::all();
        return view('backend.pages.order.create', compact('order', 'UpperPocket' , 'collar', 'gola', 'plate', 'pasting', 'lace', 'ful', 'button', 'LowerPocket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $order = new Order();
        // $order->name = $request->name;
        // $order['up_pocket'] = $request->up_pocket;
        // $order['up_collar'] = $request->up_collar;
        // $order['up_gola'] = $request->up_gola;
        // $order['up_plate'] = $request->up_plate;
        // $order['up_pasting'] = $request->up_pasting;
        // $order['up_lace'] = $request->up_lace;
        // $order['up_ful'] = $request->up_ful;
        // $order['up_button'] = $request->up_button;
        // $order['low_pocket'] = $request->low_pocket;
        // $order->save();

        // session()->flash('success', 'Order has been created !!');
        // return redirect()->route('admin.order.index');


        $input = $request->all();
       // dd($request->input('up_lace'));
        foreach($request->input('up_lace') as $lace) {
            echo $lace."<br/>";
        }
        exit();
        $input['up_pocket'] = $request->input('up_pocket');
        $input['up_collar'] = $request->input('up_collar');
        $input['up_gola'] = $request->input('up_gola');
        $input['up_plate'] = $request->input('up_plate');
        $input['up_pasting'] = $request->input('up_pasting');
        $input['up_lace'] = $request->input('up_lace');
        $input['up_ful'] = $request->input('up_ful');
        $input['up_button'] = $request->input('up_button');
        $input['low_pocket'] = $request->input('low_pocket');
        Order::create($input);
        return redirect()->route('admin.order.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
