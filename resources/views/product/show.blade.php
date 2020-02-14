  {{-- Start modal show --}}
  <div class="modal fade" data-target-color="red" id="btn_show" tabindex="-1" role="dialog" aria-labelledby="btn_delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="">Ver registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-1">
                    <div class="mb-3">
                        <label for="serialnumber">Codigo Serial</label>
                    <input type="text" class="form-control " name="serialnumber" id="serialnumber" value="{{$product->serialnumber}}" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">Tipo</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$product->type}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Marca</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$product->trademark}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">Sistema Operativo</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$product->so}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Modelo</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$product->model}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="type">Estado</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$product->status}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">RAM</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$product->ram}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Dato</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$product->dataram}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">HDD</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$product->hdd}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Dato</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$product->datahdd}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-6">
                            <label for="trademark">Descripcion</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$product->description}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>