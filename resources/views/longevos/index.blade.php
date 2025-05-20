@extends('app')

@section('content')
<div class="card-custom text-center">
    <h2>Bienvenido al portal de salud para <strong>LONGEVOS</strong></h2>
    <p>Descubre consejos y recursos sobre bienestar físico y emocional en esta etapa crucial.</p>

    <form method="POST" action="{{ route('salir') }}">
        @csrf
        <button type="submit" class="btn btn-salir mt-3">Salir</button>
    </form>
</div>
@endsection
