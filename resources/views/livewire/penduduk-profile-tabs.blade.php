<div>
<div>
    
    <div class="profile-tab height-100-p">
                                        <div class="tab height-100-p">
                                            <ul class="nav nav-tabs customtab" role="tablist">
                                                <li class="nav-item">
                                                    <a wire:click.prevent='selectTab("personal_details")' class="nav-link {{ $tab == 'personal_details' ? 'active' : '' }}" data-toggle="tab" href="#personal_details" role="tab">Edit Profil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a wire:click.prevent='selectTab("update_password")' class="nav-link {{ $tab == 'update_password' ? 'active' : '' }}" data-toggle="tab" href="#update_password" role="tab">Update Password</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <!-- Timeline Tab start -->
                                                <div class="tab-pane fade {{ $tab == 'personal_details' ? 'active show' : '' }}" id="personal_details" role="tabpanel">
                                                    <div class="pd-20">
                                                        <form wire:submit.prevent='updatePendudukPersonalDetails()'>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group" >
                                                                        <label for="">Nama</label>
                                                                        <input type="text" class="form-control" wire:model='name' placeholder="Nama">
                                                                        
                                                                        @error('name')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                <div class="form-group">
                                                                        <label for="">Jenis Kelamin</label>
                                                                        <select class="form-control" wire:model='gender' placeholder="Jenis Kelamin">
                                                                        <option value=""></option>
                                                                            
                                                                                <option value="Laki-Laki">Laki-laki</option>
                                                                                <option value="Perempuan">Perempuan</option>
                                                                        </select>
                                                                        @error('gender')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="">Tempat Lahir</label>
                                                                        <input type="text" class="form-control" wire:model='tempat_lahir' placeholder="">
                                                                        @error('tempat_lahir')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="">Tanggal Lahir</label>
                                                                        <input type="date" class="form-control" wire:model='tanggal_lahir' placeholder="Tanggal Lahir">
                                                                        @error('tanggal_lahir')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                <div class="form-group">
                                                                        <label for="">Agama</label>
                                                                        <select class="form-control" wire:model='agama' placeholder="Pilih Agama">
                                                                        <option value="" ></option>
                                                                                <option value="Islam">Islam</option>
                                                                                <option value="Kristen">Kristen</option>
                                                                                <option value="Buddha">Buddha</option>
                                                                                <option value="Hindu">Hindu</option>
                                                                        </select>
                                                                        @error('agama')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">NIK</label>
                                                                        <input type="text" class="form-control" wire:model='nik' placeholder="Nomor KTP">
                                                                        @error('nik')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="">Golongan Darah</label>
                                                                        <select class="form-control" wire:model='gol_darah' placeholder="Golongan darah">
                                                                        <option value=""></option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="AB">AB</option>
                                                                                <option value="O">O</option>
                                                                        </select>
                                                                        @error('gol_darah')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="">Kewarganegaraan</label>
                                                                        <select class="form-control" wire:model='kewarganegaraan' placeholder="kewarganegaraan">
                                                                            <option value=""></option>
                                                                            
                                                                                <option value="WNI">WNI</option>
                                                                                <option value="WNA">WNA</option>
                                                                        </select>
                                                                        @error('kewarganegaraan')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                <div class="form-group">
                                                                        <label for="">Status Perkawinan</label>
                                                                        <select class="form-control" wire:model='status_nikah' placeholder="Select status">
                                                                        <option value=""></option>
                                                                            
                                                                                <option value="Kawin">Kawin</option>
                                                                                <option value="Belum Kawin">Belum Kawin</option>
                                                                        </select>
                                                                        @error('status_nikah')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                <div class="form-group">
                                                                        <label for="">Pekerjaan</label>
                                                                        <select class="form-control" wire:model='pekerjaan' placeholder="Pekerjaan">
                                                                        <option value=""></option>
                                                                            
                                                                                <option value="Karyawan">Karyawan</option>
                                                                                <option value="Wirasusaha">Wirasusaha</option>
                                                                                <option value="Wirasusaha">Pelajar</option>
                                                                        </select>
                                                                        @error('pekerjaan')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Alamat</label>
                                                                        <input type="address" class="form-control" wire:model='alamat' placeholder="Isi Alamat">
                                                                        @error('alamat')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                            <div class="col-md-4">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>                                                
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Timeline Tab End -->
                                                <!-- Tasks Tab start -->
                                                <div class="tab-pane fade {{ $tab == 'update_password' ? 'active show' : '' }}" id="update_password" role="tabpanel">
                                                    <div class="pd-20 profile-task-wrap">
                                                        ------Update Password-----
                                                    </div>
                                                </div>
                                                <!-- Tasks Tab End -->
                    </div>
            </div>          
    </div>
</div>

