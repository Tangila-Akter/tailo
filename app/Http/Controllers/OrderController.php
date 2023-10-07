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
use App\Models\OrderDetails;

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
        $order = Order::orderBy('id', 'DESC')->first();
        // $order_id = $order .+ 1;
        $UpperPocket = UpperPocket::all();
        $collar = collar::all();
        $gola = Gola::all();
        $plate = Plate::all();
        $pasting = Pasting::all();
        $lace = Lace::all();
        $ful = Ful::all();
        $button = Button::all();
        $LowerPocket = LowerPocket::all();
        return view('backend.pages.order.create', compact('order',  'UpperPocket', 'collar', 'gola', 'plate', 'pasting', 'lace', 'ful', 'button', 'LowerPocket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $input = $request->all();
        
        $order = new Order();

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->up_long = $request->up_long;
        $order->up_body = $request->up_body;
        $order->up_bodyLose = $request->up_bodyLose;
        $order->pat = $request->pat;
        $order->put = $request->put;
        $order->hattarLomba = $request->hattarLomba;
        $order->hattarMuk = $request->hattarMuk;
        $order->kaf = $request->kaf;
        $order->gola = $request->gola;
        $order->plate_fara = $request->plate_fara;
        $order->collar_choura = $request->collar_choura;
        $order->plate_choura = $request->plate_choura;
        $order->ghar = $request->ghar;
        $order->hif = $request->hif;
        $order->nich_hata = $request->nich_hata;
        $order->madani_fara = $request->madani_fara;
        $order->mota_mor = $request->mota_mor;
        $order->hata_pasting = $request->hata_pasting;
        $order->low_long = $request->low_long;

        $order->low_muk = $request->low_muk;
        $order->low_hie = $request->low_hie;
        $order->low_ghar = $request->low_ghar;
        $order->low_komor = $request->low_komor;
        $order->low_belt = $request->low_belt;
        $order->low_hif = $request->low_hif;
        $order->cost = $request->cost;
        $order->nogod = $request->nogod;
        $order->order_date = $request->order_date;
        $order->d_date = $request->d_date;
        $order->up_message = $request->up_message;
        $order->low_message = $request->low_message;

         $order->save();
      //  dd($order->id);
        $orderDetails=new OrderDetails();
        $orderDetails->order_id=$order->id;
        $orderDetails->save();
        $model = OrderDetails::where('order_id',$order->id);
        $model->update([
            'up_pocket' => $request->input('up_pocket'),
            'up_collar' => $request->input('up_collar'),
            'up_gola' => $request->input('up_gola'),
            'up_plate' => $request->input('up_plate'),
            'up_pasting' => $request->input('up_pasting'),
            'up_lace' => $request->input('up_lace'),

            'up_ful' => $request->input('up_ful'),
            'up_button' => $request->input('up_button'),
            'low_pocket' => $request->input('low_pocket'),
        ]);
        // dd($orders);
        // $input['up_pocket'] = $request->input('up_pocket');
        // $input['up_collar'] = $request->input('up_collar');
        // $input['up_gola'] = $request->input('up_gola');
        // $input['up_plate'] = $request->input('up_plate');
        // $input['up_pasting'] = $request->input('up_pasting');
        // $input['up_lace'] = $request->input('up_lace');
        // $input['up_ful'] = $request->input('up_ful');
        // $input['up_button'] = $request->input('up_button');
        // $input['low_pocket'] = $request->input('low_pocket');
        // Order::create($input);



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
