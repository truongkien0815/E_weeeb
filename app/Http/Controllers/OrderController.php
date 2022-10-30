<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Protype;
use App\Models\User;



use App\Helper\CartHelper;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $order = Order::all();
        // $protypes = Protype::all();
        // return view('order',['data'=>$order])->with('protypes',$protypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public  function order_quanly()
    {
        $order = Order::all();
       
        return view('admin.order')->with('order', $order);
    }
    public  function order_dangmua()
    {
        $order = Order::where('status','=','0')->get();
       
        return view('admin.order_dangmua')->with('order', $order);
    }
    public  function order_dahuy()
    {
        $order = Order::where('status','=','1')->get();
       
        return view('admin.order_dahuy')->with('order', $order);
    }
    public  function order_hoanthanh()
    {
        $order = Order::where('status','=','2')->get();
       
        return view('admin.order_hoanthanh')->with('order', $order);
    }
    public function store(Request $request,CartHelper $cart)
    {
        $request->flash();
        
        $comment = new Order;
       
        $comment->firstsName = $request->first_name;
        $comment->soluong = $request->soluong;

        $comment->lastName = $request->last_name;
        $comment->telephone =  $request->tel;
        $comment->address =  $request->address;
        $comment->money =   $request->money;
       
        $comment->product_id =  $request->product_id;
        $comment->user_id =  $request->user_id;
        $comment->status = '0';
       
      
           

        // $comment->save();
      
        User::find($request->user_id)->orders()->save($comment);
       
        // $comment->save();
        $cart->clear();

        // $order = Order::all();
        // $order = Order::all();
        // ::where('type_id','=',$request->type)
        $order = User::find($request->user_id)->orders->where('status', 1);
        $protypes = Protype::all();
        return view('order',['data'=>$order])->with('protypes',$protypes);
      
        
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
        $users = User::find($id)->orders;
       
        return view('order', ['data' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Order::find($id);

        $item->status = '2';
  

        $item->save();
        return redirect()->back();
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
        $item = Order::find($id);

        $item->status = '1';
  

        $item->save();


    return redirect()->back();
    }

    
    public function update_giao(Request $request,$id)
    {
        $item = Order::find($id);

        $item->status = '2';
  

        $item->save();


    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::find($id);

       
  

        $item->delete();
        return redirect()->back();
    }
}
