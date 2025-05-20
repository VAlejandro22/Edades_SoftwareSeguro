<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal de Salud Preventiva</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #0f0f0f; /* Negro suave */
            color: #d1ffd6; /* Verde claro */
            font-family: 'Segoe UI', sans-serif;
        }

        header, footer {
            background-color: #1a1a1a;
            color: #d1ffd6;
            padding: 1rem;
            text-align: center;
        }

        main {
            padding: 2rem;
        }

        .btn-salir {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .btn-salir:hover {
            background-color: #218838;
        }

        .card-custom {
            background-color: #1e1e1e;
            border: 1px solid #28a745;
            padding: 2rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Portal de Salud Preventiva</h1>
    </header>

    <main class="container">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('info'))
            <div class="alert alert-success">{{ session('info') }}</div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>© 2025 ESPE - Desarrollo Seguro</p>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
