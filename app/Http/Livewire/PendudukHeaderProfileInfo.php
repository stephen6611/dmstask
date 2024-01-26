<?php

namespace App\Http\Livewire;

use App\Models\Penduduk;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PendudukHeaderProfileInfo extends Component
{
    public $penduduk;

    public $listeners = [
        'updatePendudukHeaderProfileInfo'=>'$refresh'
    ];

    public function mount(){
        if( Auth::guard('penduduk')->check() ){
        $this->penduduk = Penduduk::findOrFail(auth()->id());
    }
    }

    public function render()
    {
        return view('livewire.penduduk-header-profile-info');
    }
}
