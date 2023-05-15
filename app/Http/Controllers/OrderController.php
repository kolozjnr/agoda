<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders')
        ->where([
            //["subscription_status", "=", "Active"],
            ["order_status", "=", "0"],
            ["order_qty", ">", "0"]])->limit('4')->inRandomOrder()->get();

            return view("user.show-orders", compact("orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add-order');
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
            $destination = 'orders';
            $profileImage = 'public/orders/'.date('YmdHis'). "." . $image->getClientOriginalExtension();
            $image->move(public_path('orders'), $profileImage);
            $order['order_file'] = $profileImage;
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
            return back()->with('success', 'Task Created Successfully');
           // return response()->json(['success'=>'Successfully uploaded.']);
       // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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

    public function updateorinsert(Request $request){
        $id = Auth::user()->id;
        $check_task = User::where('id', $id)->select('task_completed')->first();
        //dd($check_task->task_completed);
        if($check_task->task_completed >= 6){
            return back()->with('warning', 'Kindly Upgrade to next Level for more Orders');
        }else{

        
            DB::table('users')
            ->where('id', $id)
            ->update([
                'task_completed' => DB::raw('task_completed +1'),
                'balance' => DB::raw('balance + 5')
            ]);
                
            $order_id = $request->order_id;
            DB::table('orders')
        ->where('id', $order_id)
        ->update([
            'order_qty' => DB::raw('order_qty -1'),
            //'next_task' => DB::raw('current_task + 1')
        ]);


            //return response()->json(['success'=>'Successfully updated.']);
            return back()->with('success', "Order Succesfully Submitted");
        }
    }
}
