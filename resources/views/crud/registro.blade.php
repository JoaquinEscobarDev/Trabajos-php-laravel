@extends('madre')
@section('contenido')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registro de Datos Médicos</h3>
                    <div class="card-body">
                        <form action="{{ route('dn.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nombre del paciente" id="nombre_paciente" class="form-control" name="nombre_paciente" required autofocus>
                                @if ($errors->has('nombre_paciente'))
                                    <span class="text-danger">{{ $errors->first('nombre_paciente') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Rut del paciente" id="rut_paciente" class="form-control" name="rut_paciente" required autofocus>
                                @if ($errors->has('rut_paciente'))
                                    <span class="text-danger">{{ $errors->first('rut_paciente') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Diagnóstico del paciente" id="diagnostico_paciente" class="form-control" name="diagnostico_paciente" required autofocus>
                                @if ($errors->has('diagnostico_paciente'))
                                    <span class="text-danger">{{ $errors->first('diagnostico_paciente') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Tratamiento" id="tratamiento" class="form-control" name="tratamiento" required autofocus>
                                @if ($errors->has('tratamiento'))
                                    <span class="text-danger">{{ $errors->first('tratamiento') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Medicamento" id="medicamento" class="form-control" name="medicamento" required autofocus>
                                @if ($errors->has('medicamento'))
                                    <span class="text-danger">{{ $errors->first('medicamento') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Cada cuántas horas" id="cada_cuantas_horas" class="form-control" name="cada_cuantas_horas" required autofocus>
                                @if ($errors->has('cada_cuantas_horas'))
                                    <span class="text-danger">{{ $errors->first('cada_cuantas_horas') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Por cuántos días" id="por_cuantos_dias" class="form-control" name="por_cuantos_dias" required autofocus>
                                @if ($errors->has('por_cuantos_dias'))
                                    <span class="text-danger">{{ $errors->first('por_cuantos_dias') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Insertar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
