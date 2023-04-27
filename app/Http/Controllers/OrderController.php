<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add-order');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //store order
        
        
        $order = $request->all();

        if($image = $request->file('order_file')){
            $destination = 'public/orders';
            $profileImage = 'public/orders/'.date('YmdHis'). "." . $image->getClientOriginalExtension();
            $file = move($destination, $profileImage);
            $order->order_file = $profileImage;
        }

        
        //f($request->file('order_file')){
        //     $user_id = Auth::user()->id;
        //     // $fileName = time().'_'.$request->file->getClientOriginalName();
        //     // $filePath = $request->file('file')->storeAs('orders', $fileName, 'public');

        //     // $order->order_file = time().'_'.$request->file->getClientOriginalName();
        //     // $order->order_file = '/storage/' . $filePath;
            
        //     $order->user_id = $user_id;
        //     //$order->order_name = $request->name;
        //     $order->order_desc = $request->order_desc;
        //     //$post->loc = "Not Relevant";
        //     $order->order_no = $rand;
        //     //$order->name = $request->name;
        //     $order->order_price = $request->price;
        //     $order->order_status = "0";
        //     $order->order_qty = $request->qty;
        //    //$post->state = $request->state;
        //    // $post->lga = $request->lga;
        //     $order->order_com = $request->commission;
        //     dd($request);
    
            order::create($order);
            
       // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
