<?php

namespace App\Http\Controllers;

use App\Models\Boss;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Requests\BossFormRequest;
use Illuminate\Support\Facades\DB;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boss = Boss::with('area')->get();//pasa variables con id a la tabla y nombre
        return view('boss.index',compact('boss')); 

    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Area::all();
        return view('boss.create', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BossFormRequest $request, Boss $boss)
    {
        $boss=new Boss;
        $boss->name_boss=$request->input('name_boss');
        $boss->controlnum=$request->input('controlnum');
        $boss->status=$request->input('status');
        $boss->extension=$request->input('extension');
        $boss->area_id=$request->input('area_id');
        $boss->save();
        return redirect('boss')->with('message','El jefe de area ha sido agregado con exito');
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
    public function edit(Boss $boss)
    {
        $areas = Area::all();
        return view('boss.edit',compact('boss','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BossFormRequest $request, Boss $boss)
    {
        $boss->name_boss=$request->input('name_boss');
        $boss->controlnum=$request->input('controlnum');
        $boss->status=$request->input('status');
        $boss->extension=$request->input('extension');
        $boss->area_id=$request->input('area_id');
        $boss->save();
        return redirect()
        ->route('boss.index',['boss'=>$boss])
        ->with('message','El jefe de area ha sido actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boss $boss)
    {
        $boss->delete();
        return redirect()
        ->route('boss.index')
        ->with('message-error','El registro ha sido borrado de la base de datos con exito');
    }
}
