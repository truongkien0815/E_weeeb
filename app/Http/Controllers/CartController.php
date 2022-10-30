<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\User;
use App\Models\Cart;


use App\Helper\CartHelper;

class CartController extends Controller
{
   
    public function view(){
        $protype = Protype::All();
        
        return view('cart',['protypes'=>$protype]);
    }

    public function add(CartHelper $cart,$id,$user_id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $product = Product::Find($id);
        // truyen id
        $user = User::Find($user_id);


        $cart->add($product,$quantity,$user);
     
        return redirect()->back();
    }

    public function remove(CartHelper $cart,$id){
        $cart->remove($id);
        return redirect()->back();
    }

    public function update(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id,$quantity);
        return redirect()->back();
    }

    public function clear(CartHelper $cart){
        $cart->clear();
        return redirect()->back();
    }
}
