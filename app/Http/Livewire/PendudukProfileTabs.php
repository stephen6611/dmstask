<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Penduduk;

class PendudukProfileTabs extends Component
{ public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab'];

    public $name, $gender, $tempat_lahir, $tanggal_lahir, $nik, $gol_darah, 
    $status_nikah, $kewarganegaraan, $penduduk_id, $agama, $picture, $alamat, 
    $email, $pekerjaan;

    public function selectTab($tab){
        $this->tab = $tab;
    }
    public function mount(){
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        if( Auth::guard('penduduk')->check() ){
            $penduduk = Penduduk::findOrFail(auth()->id());
            $this->penduduk_id = $penduduk->id;
            $this->agama = $penduduk->agama;
            $this->name = $penduduk->name;
            $this->gender = $penduduk->gender;
            $this->tempat_lahir = $penduduk->tempat_lahir;
            $this->tanggal_lahir = $penduduk->tanggal_lahir;
            $this->nik = $penduduk->nik;
            $this->gol_darah = $penduduk->gol_darah;
            $this->status_nikah = $penduduk->status_nikah;
            $this->kewarganegaraan = $penduduk->kewarganegaraan;
            $this->picture = $penduduk->picture;
            $this->email = $penduduk->email; 
            $this->alamat = $penduduk->alamat;
            $this->pekerjaan = $penduduk->pekerjaan;
    }
}
    public function updatePendudukPersonalDetails(){
        $this->validate([
            'name'=>'required|min:5',
            'nik'=> 'numeric|regex:/^[0-9]+$/|min:16',

        ]);

        Penduduk::find($this->penduduk_id)
            ->update([
                'name'=> $this->name,
                'gender'=> $this->gender,
                'nik'=> $this->nik,
                'tanggal_lahir'=> $this->tanggal_lahir,
                'agama'=> $this->agama,
                'tempat_lahir'=> $this->tempat_lahir,
                'status_nikah'=> $this->status_nikah,
                'gol_darah'=> $this->gol_darah,
                'kewarganegaraan'=> $this->kewarganegaraan,
                'email' => $this->email,
                'alamat' => $this->alamat,
                'pekerjaan' => $this->pekerjaan,
            ]);
                // untuk auto update
        $this->emit('updatePendudukHeaderProfileInfo','deleteProfile');
        $this->dispatchBrowserEvent('updatePendudukInfo',[
            'pendudukName'=>$this->name,
            'pendudukEmail'=>$this->email,
            'pendudukGender'=>$this->gender,
            'pendudukNIK'=>$this->nik,
            'pendudukTgllahir'=>$this->tanggal_lahir,
            'pendudukAgama'=> $this->agama,
            'pendudukTmptlahir'=> $this->tempat_lahir,
            'pendudukStsnikah'=> $this->status_nikah,
            'pendudukGoldarah'=> $this->gol_darah,
            'pendudukKewarganegaraan'=> $this->kewarganegaraan,
            'pendudukAlamat' => $this->alamat,
            'pendudukPekerjaan' => $this->pekerjaan,
            
        ]);

        return redirect()->route('penduduk.home')->with('success', 'Data berhasil disimpan!');
    
    }


    public function showToastr($type, $message){
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=> $type,
            'message'=> $message
        ]);
    }
    public function render()
    {
        return view('livewire.penduduk-profile-tabs');
    }
}
