<div>

    <div class="input-group mb-3 mt-3">
        <input wire:model.live="search" class="form-control" placeholder="Search" type="text">
    </div>

    @if(session('info'))
    <div class="alert alert-success" role="alert">
        {{ session('info') }}
    </div>
    @endif

    <div class="card card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($propietarios as $propietario)
                    <tr>
                        <th scope="row">{{ $propietario->id }}</th>
                        <td>{{ $propietario->nombre }}</td>
                        <td>{{ $propietario->apellido }}</td>
                        <td>{{ $propietario->telefono }}</td>
                        <td>{{ $propietario->direccion }}</td>
                        <td>{{ $propietario->email }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('propietarios.edit', $propietario->id) }}"><i class="bi bi-pencil-square me-2"></i></a>
                            <button href="" wire:click="deletePropietario({{ $propietario->id }})" class="btn btn-light"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $propietarios->links() }}
            </div>

        </div>
    </div>

</div>