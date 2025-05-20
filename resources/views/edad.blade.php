@extends('app')

@section('content')
<div class="card-custom mx-auto" style="max-width: 500px;">
    <h2 class="text-center mb-4">Ingrese su edad</h2>

    <form method="POST" action="/clasificar">
        @csrf
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" id="edad" name="edad" class="form-control" min="0" max="120" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-salir">Enviar</button>
        </div>
    </form>
</div>
@endsection
