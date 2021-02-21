@extends('layouts.app')
 @section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                     <input type="text"  class="form-control" class="buscarFecha" id="buscarFecha" name="buscarFecha" value="" placeholder="Buscar Por Fecha">
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-4">
                     <input type="text"  class="form-control" class="buscarAsunto" id="buscarAsunto" name="buscarAsunto"placeholder="Buscar por Asunto">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#nuevo">Crear Nuevo Registro</a>
                </div>

            </div>

        </div>
    </div>

<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Asunto</th>
                        <th class="text-center">Texto</th>
                        </tr>
                    </thead>
                        <tbody class="detalle">

                        </tbody>
                </table>
            </div>
        </div>
     </div>
</div>
 <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Agregar nuevo Dato</h4><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('datos.store')}}">
                    @include('form.form')
                </div>
                <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Crear</button></div>
            </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/datos.js') }}"></script>
    <script>
        $('#buscarFecha, #fecha').datepicker({
        autoclose: true,
        todayHighlight: true,
         format: 'yyyy-mm-dd',
        language: "es"
      });

    </script>
@endsection


