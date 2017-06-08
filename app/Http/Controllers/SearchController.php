<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{

  public function search()
  {
      return view('search');
  }

  public function autocomplete(Request $request)
  {
      $data = Product::select('name')->where('name','like',"{$request->input('query')}%")->get();
      return response()->json($data);
  }

}
