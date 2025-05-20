@extends('app')

@section('content')
<div class="card-custom text-center">
    <h2>Bienvenido al portal de salud para <strong>NIÑOS</strong></h2>
    <p>Aquí encontrarás información útil para el cuidado y desarrollo saludable en la infancia.</p>

    <form method="POST" action="{{ route('salir') }}">
        @csrf
        <button type="submit" class="btn btn-salir mt-3">Salir</button>
    </form>
</div>
@endsection
