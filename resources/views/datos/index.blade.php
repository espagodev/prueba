@extends('layouts.app')
    @section('content')

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Texto</th>
                    </tr>
                </thead>
                    <tbody class="detalle">

                    </tbody>
            </table>
        </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{ asset('js/datos.js) }}"></script>
@endsection
