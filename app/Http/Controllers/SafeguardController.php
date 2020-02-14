<?php

namespace App\Http\Controllers;

use App\Models\Safeguard;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SafeguardFormRequest;
use App\Http\Requests\SafeguardEditFormRequest;
use Barryvdh\DomPDF\Facade as PDF;

use Auth;


class SafeguardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $safeguard = Safeguard::with('product')->get();//pasa variables del modelo a la tabla con id
        return view('safeguard.index',compact('safeguard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        $product = Product::all();
        return view('safeguard.create', compact('employee','product'));
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
        $safeguard->status=$request->input('status');
        $safeguard->user_id=Auth::user()->id;
        $safeguard->employee_id=$request->input('employee_id');
        $safeguard->product_id=$request->input('product_id');
        $safeguard->save();
        return redirect('safeguard')->with('message','El resguardo se ha agregado con exito');
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
    public function edit(Safeguard $safeguard)
    {
        $employee = Employee::all(); //pasa lo parametros para rellenar los datos
        $product = Product::all();
        return view('safeguard.edit',compact('safeguard','employee','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SafeguardEditFormRequest $request, Safeguard $safeguard)
    {
        $safeguard->status=$request->input('status');
        $safeguard->user_id=Auth::user()->id;
        $safeguard->employee_id=$request->input('employee_id');
        $safeguard->product_id=$request->input('product_id');
        $safeguard->save();
        return redirect()
        ->route('safeguard.index',['safeguard'=>$safeguard])
        ->with('message','El resguardo ha sido actualizado con exito');
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Safeguard $safeguard)
    {
        $safeguard->delete();
        return redirect()
        ->route('safeguard.index')
        ->with('message-error','El registro ha sido borrado de la base de datos con exito');
    }

    public function exportarPdf()
    {
        // $safeguard = Safeguard::get();
        $pdf = PDF::loadView('pdf');

        return $pdf->download('archivo.pdf');
    }
}
