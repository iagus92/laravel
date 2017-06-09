<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Product;
use App\Image;

class ProductController extends Controller
{

    public function show($id){

        $product = Product::findOrFail($id);
        return view('show',compact('product')); // Enviar imágenes
    }

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
            return back()
              ->withErrors($validator)
              ->withInput();
        }

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        if(Input::hasFile('image')){
            echo 'imagen';
             $getimageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path().'/storage', $getimageName);
             $img = new Image;
             $img->url = public_path().'/storage/'.$getimageName;
             $img->product_id = $product->id;
             $img->save();
        }

        return redirect('/')->with('success','Producto creado');
    }

    public function edit($id){

      $product = Product::find($id);
      return view('edit',compact('product'));
    }

    public function update(Request $request, $id){

      $validator = Validator::make($request->all(), [
          'name' => 'required|alpha|max:100',
          'price' => 'required|regex:/[0-9]+(.[0-9]+)*/',
      ]);

      if ($validator->fails()) {
          return back()
            ->withErrors($validator)
            ->withInput();
      }

    Product::find($id)->update($request->all());
    return redirect('/')->with('success','Producto editado');
    }

    public function delete(Product $product){

      $product->delete();
      return redirect('/');
    }
}
