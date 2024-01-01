@extends('madre')
@section('contenido')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Actualizar Paciente</h3>
                    <div class="card-body">
                        <form action="{{route('dn.update',$diagnostico->ID_PACIENTE)}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="ID" id="ID_PACIENTE" class="form-control" name="ID_PACIENTE" value="{{ $diagnostico->ID_PACIENTE }}" required autofocus readonly>

                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nombre del paciente" id="VCH_NOMBRE" class="form-control" name="VCH_NOMBRE" value="{{ $diagnostico->VCH_NOMBRE }}" required autofocus readonly>

                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Rut del paciente" id="VCH_RUT" class="form-control" name="VCH_RUT" value="{{ $diagnostico->VCH_RUT }}" required autofocus readonly>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Diagnóstico del paciente" id="VCH_DIAGNOSTICO" class="form-control" name="VCH_DIAGNOSTICO" value="{{ $diagnostico->VCH_DIAGNOSTICO }}" required autofocus>

                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Tratamiento" id="VCH_TRATAMIENTO" class="form-control" name="VCH_TRATAMIENTO" value="{{ $diagnostico->VCH_TRATAMIENTO }}" required autofocus>

                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Medicamento" id="VCH_MEDICAMENTO" class="form-control" name="VCH_MEDICAMENTO" value="{{ $diagnostico->VCH_MEDICAMENTO }}" required autofocus>

                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Cada cuántas horas" id="VCH_CADA_HORA" class="form-control" name="VCH_CADA_HORA" value="{{ $diagnostico->VCH_CADA_HORA }}" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Por cuántos días" id="INT_DIAS" class="form-control" name="INT_DIAS" value="{{ $diagnostico->INT_DIAS }}" required autofocus>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Actualizar</button>
                            </div>

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection