<?php

namespace App\Http\Controllers;

use App\Models\Safeguard;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SafeguardFormRequest;
use Auth;

class SafeguardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('safeguard.index',compact('safeguard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $products = Product::all();
        return view('safeguard.create', compact('employees','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SafeguardFormRequest $request)
    {
        $safeguard=new Safeguard;
        $safeguard->folio=$request->input('folio');
        $safeguard->status=$request->input('status');
        $safeguard->user_id=Auth::user()->id;
        $safeguard->employee_id=$request->input('employee_id');
        $safeguard->product_id=$request->input('product_id');
        $safeguard->save();
        return redirect('safeguard/create')->with('message','El resguardo se ha agregado con exito');
        // dd($request->all());
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
    }
}
