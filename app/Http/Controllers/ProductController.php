<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Comment;
use App\Helper\CartHelper;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product10 = Product::limit(10, 10)->where('quantity', '>', 0)->orderBy('created_at', 'desc')->get();
        $products = Product::all();
        $protype = Protype::all();
        return view('index', ['data' => $products])->with('protype', $protype)->with('product10', $product10);
   
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
      
        $request->old('search');
        $product = Product::where('name','like','%'. $request->old('search') .'%')->paginate(4);
        

        return view('categories')->with('product',$product)->with('i', (request()->input('page', 1) - 1) * 4);
    }
    
    public function story(Request $request)
    {
        if($request->type == 0)
        {
            $product = Product::all();
        }
        else

      {  $product = Product::where('type_id','=',$request->type)->get();}
        return $product;
    }
    public function search(Request $request)
    {
        $product = Product::where('name','like','%'. $request->productname .'%')->get();
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  $comment = comment::all();
        $product = Product::find($id);
        return view('single')->with('product',$product)->with('comment',$comment);
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
        $item = Product::find($id);

        $item->delete();
        return redirect()->back();
    }
}
