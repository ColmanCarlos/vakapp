<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Propietario;
use Livewire\WithPagination;

class Propietarios extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function deletePropietario($id)
    {
        Propietario::find($id)->delete();
    }

    public function render()
    {

        $propietarios = Propietario::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('apellido', 'like', '%' . $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->orWhere('direccion', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderByDesc('id')
            ->paginate(10);

        
        return view('livewire.propietarios', compact('propietarios'));
    }
}
