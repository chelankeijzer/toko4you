<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //--------------------------------------------------------------------
       $orders = Order::all();
       return view('orders.index', compact('orders'));
       //--------------------------------------------------------------------

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //--------------------------------------------------------------------
        return view('orders.create');
        //--------------------------------------------------------------------

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //----------------------------------------------------------------
        $request->validate([
            'userId'=>'required',
             ]);

          $share = new Order([
            'userId' => $request->get('userId')

          ]);
          $share->save();
          return redirect('/orders')->with('success', 'Order has been added');
        //----------------------------------------------------------------

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //--------------------------------------------------------------------
        $order = Order::find($id);

        return view('orders.edit', compact('order'));
        //--------------------------------------------------------------------



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Order $order)
    public function update(Request $request, $id)

    {
        //
    //------------------------------------------------------------------------------------------------
    $request->validate([
        'userId'=> 'required'
              ]);

        $order = Order::find($id);
        $order->userId = $request->get('userId');

        $order->save();

        return redirect('/orders')->with('success', 'Order has been updated');
     //------------------------------------------------------------------------------------------------



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        //------------------------------------------------------------------------------------------------
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with('success', 'Order has been deleted Successfully');
        //------------------------------------------------------------------------------------------------





    }
}
