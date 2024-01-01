@extends('madre')
@section('contenido')
<main class="text-center">
    <div class="card mx-auto" style="width: 18rem;">
    <img src="{{ asset('img/doctor.jpg') }}" alt="Descripción de la imagen">

        <div class="card-body">
            <a href="{{ route('registerPage') }}" class="btn btn-primary">Registra un Paciente</a>
        </div>
    </div>
</main>
@endsection
