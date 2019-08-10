@extends('layout')
@section('contenido')
    <div class="container bg-light mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
              <div>  <input type="text" class="form-control-sm" placeholder="Buscar" > </div>
                <button class="btn btn-dark" id="crear">Crear producto</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th width="500">Producto</th>
                        <th>Bodega</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Gestión</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="producto_form">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-12 form-group">
                                <label for="producto" class="col-form-label">Producto</label>
                                <input name="producto" type="text" class="form-control" id="producto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xl-6 form-group">
                                <label for="cantidad" class="col-form-label">Cantidad</label>
                                <input type="number" name="cantidad" class="form-control" id="cantidad">
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-6  form-group">
                                <label for="estado" class="col-form-label">Estado</label>
                                <select class="custom-select " id="estado">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-12 form-group">
                                <label for="bodega" class="col-form-label">Bodega</label>
                                <select class="custom-select " name="bodega" id="bodega">
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-12 form-group">
                                <label for="observaciones" class="col-form-label">Observaciones</label>
                                <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        window.onload = ()=>{

            document.getElementById('crear').onclick = ()=>{
                $('.modal').modal('show');
            }
        }

    </script>

    @endsection