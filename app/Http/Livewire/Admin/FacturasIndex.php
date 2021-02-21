<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Factura;

use Livewire\WithPagination;

class FacturasIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {

                $facturas = Factura::where('Cod_Clien_Temp',auth()->user()->cod_client)
                ->where(function ($query) {
                         $query->where('N_Factura','LIKE','%' . $this->search . '%')
                               ->orWhere('Fecha_Factura','LIKE','%' . $this->search . '%')
                               ->orWhere('Importe_Factura','LIKE','%' . $this->search . '%');
                })->latest('Fecha_Factura')->paginate();

                return view('livewire.admin.facturas-index',compact('facturas'));
    }
}
