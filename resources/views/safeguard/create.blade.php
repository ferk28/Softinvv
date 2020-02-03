@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('safeguard.store')}}"> 
    @csrf
    {{-- input encrypted --}}
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear resguardo</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control" name="folio" id="folio" placeholder="Folio" required>
                        <div class="invalid-feedback">
                            Folio number is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Estado</label>
                            <select class="custom-select d-block w-100" name="status" id="status" required>
                                <option value="">Seleccionar...</option>
                                <option>Alta</option>
                                <option>Baja</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid status.
                            </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="employee_id">Empleado <span class="text-muted">(Obligatorio)</span></label>
                    <input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="Empleado">
                </div>
                <div class="mb-3">
                    <label for="product_id">Producto <span class="text-muted">(Obligatorio)</span></label>
                    <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Producto">
                    <small class="text-muted">Requiere numero de serie del producto</small>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</form>
@endsection
