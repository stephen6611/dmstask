@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Beranda')
@section('content')

<div class="pd-ltr-20 xs-pd-20-10 mb-3"     >
    <div class="min-height-200px">
        <div class="mb-3" style="margin-top: -20px">
            <h1>Data Entry</h1>
        </div>
        
        <div class="clearfix pd-20 card-box mb-30 card-header" style="border-radius: 10px;">
            <h3
              class="card-title"
              style="
                font-weight: 600;
                font-size: 22px;
                vertical-align: middle;
                text-align: justify;
                color: #fff;
                margin-top: -3px;
              "
            >
            Informasi Aplikasi
            </h3>
            
          </div>
        <div class="card" style="margin-top: -45px; border-radius: 0px">
            
            <div class="form-group mx-4 my-4">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mx-4">
                                <label>No. Aplikasi</label>
                                <input class="form-control" type="text" placeholder="Aceh-MM-20231130   ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mx-4">
                                <label>Nama AO (Account Officer)</label>
                                <input class="form-control" type="email" placeholder="Hanum Nirmala">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mx-4">
                                <label>Tanggal Aplikasi</label>
                                <input class="form-control" type="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mx-4">
                                <label>Pilih Unit</label>
                                <select class="form-control">
                                    <option>Kota Banda Aceh</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mx-4">
                                <label>Cabang</label>
                                <select class="form-control">
                                    <option>Aceh Besar</option>
                                </select>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix pd-20 card-box mb-30 card-header mt-3" style="border-radius: 10px;">
        <h3
          class="card-title"
          style="
            font-weight: 600;
            font-size: 22px;
            vertical-align: middle;
            text-align: justify;
            color: #fff;
            margin-top: -3px;
          "
        >
        Data Debitur Pemohon
        </h3>
        
      </div>
    <div class="card" style="margin-top: -45px; border-radius: 0px">
        
        <div class="form-group mx-4 my-4">
            <form disabled>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <label>No. Aplikasi</label>
                            <input class="form-control" type="text" placeholder="Aceh-MM-20231130   ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <label>Nama AO (Account Officer)</label>
                            <input class="form-control" type="email" placeholder="Hanum Nirmala">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <label>Tanggal Aplikasi</label>
                            <input class="form-control" type="date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <label>Pilih Unit</label>
                            <select class="form-control">
                                <option>Kota Banda Aceh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mx-4">
                            <label>Cabang</label>
                            <select class="form-control">
                                <option>Aceh Besar</option>
                            </select>
                        </div>
                    </div>
            </form>
        </div>
    </div>



@endsection