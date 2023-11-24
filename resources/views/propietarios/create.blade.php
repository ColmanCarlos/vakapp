<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crear nuevo propietario</title>
</head>

<body style="background: lightgrey;">

    <div class="container mt-5 bg-light rounded col-lg-6 mb-3">

        <div class="container border-bottom d-flex justify-content-between align-items-center">
            <p class="fs-2 fw-bold mt-2">Crear nuevo propietario</p>
        </div>

        <form class="mt-3" method="POST" action="{{ route('propietarios.store') }}">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">
                @error('apellido')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
                @error('telefono')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                @error('direccion')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <a type="submit" href="{{ route('propietarios.index') }}" class="btn btn-danger mb-3 me-2">Cancelar</a>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </div>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>