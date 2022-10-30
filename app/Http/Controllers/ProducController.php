<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Redirect;
use App\Models\Protype;
class ProducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->flash();
        
        $product = new Product;
       
        $product->name = $request->name;
        $product->manu_id = $request->manu;
        $product->type_id =  $request->type;
        $product->price =  $request->price;
        // $product->image =  $_FILES['image']['name'];

        if ($product->image != null) {
            $request->file('image')->move('images', $request->file('image')->getClientOriginalName(), 'local');
        }
        $product->image  =$_POST['image'];;

        $product->description =  $request->descrip;
        $product->quantity =  $request->soluong;
        $product->feature =  $request->feature;


       
       
        $product->save();
      

       
        // $product = Product::all();
        $products = Product::all();
        $protype = Protype::all();
        return view('index', ['data' => $products])->with('protype', $protype);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //     $item = Product::find($id);

    //  $item->delete();
    //  return redirect()->back();
    }
}
