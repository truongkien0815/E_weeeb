<?php

namespace App\Http\Controllers;
use App\Helper\CartHelper;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use Gloudemans\Shoppingcart\Facades\Cart;
class myController extends Controller
{
    function web($name, Request $request)
    {
      if ($name == 'result') {
        
        $request->flash();
      
        $request->old('search');
        $product = Product::where('name','like','%'. $request->old('search') .'%')->paginate(8);

        return view('categories')->with('product',$product)->with('i', (request()->input('page', 1) - 1) * 4);
      }
      else{
        return view($name);
      }
      return view($name);

    }
    function getSearch(Request $request){
      
      $request->flash();
      
      $request->old('search');
      $product = Product::where('name','like','%'. $request->old('search') .'%')->paginate(8);
    

      return view('categories')->with('product',$product)->with('i', (request()->input('page', 1) - 1) * 4);
    }
    
    public function products2()
    {
      
        $products = Product::all();
       
        return view('admin.projects')->with('products', $products);
        
    }
    public function addproduct()
    {
      $protypes = Protype::all();
        $products = Product::all();
        $manufactures = Manufacture::all();

       
        return view('admin.project-add')->with('products', $products)->with('protypes', $protypes)
        ->with('manufactures', $manufactures);
      
    }
    function checkout()
  {
    $products = Product::all();
    return view('checkout', ['data' => $products]);
  }

// upload anh len file images
  public function upload()
  {
      return view('admin.formupload');  
  }
  // xu ly up load
  public function up(Request $request)
  {

      return view('admin.upload');

  }
}
