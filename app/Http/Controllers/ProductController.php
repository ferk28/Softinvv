<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Http\Requests\ProductEditFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $product=new Product;
        $product->serialnumber=$request->input('serialnumber');
        $product->type=$request->input('type'); 
        $product->trademark=$request->input('trademark');
        $product->model=$request->input('model');
        $product->ram=$request->input('ram');
        $product->dataram=$request->input('dataram');
        $product->hdd=$request->input('hdd');
        $product->datahdd=$request->input('datahdd');
        $product->so=$request->input('so');
        $product->status=$request->input('status');
        $product->description=$request->input('description');
        $product->save();
        return redirect('product')->with('message','El producto ha sido agregado con exito');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::all();
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditFormRequest $request, Product $product) //ProductFormRequest
    {
        $product->serialnumber=$request->input('serialnumber');
        $product->type=$request->input('type'); 
        $product->trademark=$request->input('trademark');
        $product->model=$request->input('model');
        $product->ram=$request->input('ram');
        $product->dataram=$request->input('dataram');
        $product->hdd=$request->input('hdd');
        $product->datahdd=$request->input('datahdd');
        $product->so=$request->input('so');
        $product->status=$request->input('status');
        $product->description=$request->input('description');
        $product->save();
        return redirect()
        ->route('product.index',['product'=>$product])
        ->with('message','El producto ha sido actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
        ->route('product.index')
        ->with('message-error','El registro ha sido borrado de la base de datos con exito');
    }
}
