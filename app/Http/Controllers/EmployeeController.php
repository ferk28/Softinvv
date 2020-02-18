<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Boss;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeFormRequest;
use Illuminate\Support\Facades\DB;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::with('boss')->get();//pasa variables del modelo a la tabla con id
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boss = Boss::all();
        return view('employee.create',compact('boss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        $employee=new Employee;
        $employee->name=$request->input('name');
        $employee->controlnum=$request->input('controlnum');
        $employee->status=$request->input('status');
        $employee->boss_id=$request->input('boss_id');
        $employee->user_id=Auth::user()->id;
        $employee->save();
        return redirect('employee')->with('message','El empleado ha sido agregado con exito');
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
    public function edit(Employee $employee)
    {
        $bosses = Boss::all();
        return view('employee.edit',compact('employee','bosses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeFormRequest $request, Employee $employee)
    {
        $employee->name=$request->input('name');
        $employee->controlnum=$request->input('controlnum');
        $employee->status=$request->input('status');
        $employee->boss_id=$request->input('boss_id');
        $employee->user_id=Auth::user()->id;
        $employee->save();
        return redirect()
        ->route('employee.index',['employee'=>$employee])
        ->with('message','El empleado ha sido actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()
        ->route('employee.index')
        ->with('message-error','El registro ha sido borrado de la base de datos con exito');
    }
}
