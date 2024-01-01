@extends('madre')
@section('contenido')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3 class="card-header text-center">Listar Paciente</h3>
                    <div class="card-body">
                        @csrf
                        @if(!empty($diagnostico))
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre del Paciente</th>
                                    <th scope="col">Rut del Paciente</th>
                                    <th scope="col">Diagnostico del Paciente</th>
                                    <th scope="col">Tratamiento</th>
                                    <th scope="col">Medicamento</th>
                                    <th scope="col">Cada cuantas Horas</th>
                                    <th scope="col">Cada cuantos Dias</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diagnostico as $diagnostico)
                                <tr>
                                    <td>{{ $diagnostico->ID_PACIENTE }}</td>
                                    <td>{{ $diagnostico->VCH_NOMBRE }}</td>
                                    <td>{{ $diagnostico->VCH_RUT }}</td>
                                    <td>{{ $diagnostico->VCH_DIAGNOSTICO }}</td>
                                    <td>{{ $diagnostico->VCH_TRATAMIENTO }}</td>
                                    <td>{{ $diagnostico->VCH_MEDICAMENTO }}</td>
                                    <td>{{ $diagnostico->VCH_CADA_HORA }}</td>  
                                    <td>{{ $diagnostico->INT_DIAS }}</td>  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <thead>
                            <td>Pacientes no encontrados</td>
                        </thead>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
