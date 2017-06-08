<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Product;

class ProductController extends Controller
{
    public function byPrice(){

        $products = Product::orderBy('price')->paginate(5);
        return view('home',compact('products'));
    }

    public function create(){

        return view('create');
    }

    public function add(Request $request){

      $validator = Validator::make($request->all(), [
          'name' => 'required|alpha|max:100',
          'price' => 'required|regex:/[0-9]+(.[0-9]+)*/',
      ]);

      if ($validator->fails()) {
          return redirect('add')
            ->withErrors($validator, 'create')
            ->withInput();
      }

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect('/');
    }

    public function show($id){

        $product = Product::findOrFail($id);
        return view('show',compact('product'));
    }
}
