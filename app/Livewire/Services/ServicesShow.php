<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ServicesShow extends Component
{

    #[Layout('layouts.app')]
    #[Title('Editar Servicio')]


    public $services = [];

    public function mount()
    {
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.services.services-show');
    }
}
