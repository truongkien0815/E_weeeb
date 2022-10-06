<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class myController extends Controller
{
    function web($name)
    {
      return view($name);
    }
}
