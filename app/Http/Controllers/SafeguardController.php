<?php

namespace App\Http\Controllers;

use App\Models\Safeguard;
use Illuminate\Http\Request;
use App\Http\Requests\SafeguardFormRequest;

class SafeguardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $safeguard=Safeguard::all();
        return view('safeguard.index',compact('safeguard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('safeguard.create');
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
        $safeguard->user_id=1;
        $safeguard->employee_id=$request->input('employee_id');
        $safeguard->product_id=$request->input('product_id');
        $safeguard->save();
        return $safeguard->id;

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
