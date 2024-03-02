<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ServiceEdit extends Component
{
    #[Layout('layouts.app')]

    public $service;
    public function mount($id)
    {
        try {
            $this->service = Service::findOrFail($id);
        } catch (\Exception $e) {
            return redirect('/servicios');
        }
    }


    public function render()
    {
        return view('livewire.services.service-edit');
    }
}
