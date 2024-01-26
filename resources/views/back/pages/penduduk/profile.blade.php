@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')
<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="{{ route('penduduk.home') }}">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Profile
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

                    <div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a href="javascript:;" onclick="event.preventDefault();document.getElementById('pendudukProfilePictureFile').click();" class="edit-avatar"><i class="fa fa-pencil"></i></a>
									<img src="{{ $penduduk->picture }}" alt="" class="avatar-photo" id="pendudukProfilePicture">
                                    <input type="file" name="pendudukProfilePictureFile" id="pendudukProfilePictureFile" class="d-none" style="opacity:0">
									
								</div>
								<h5 class="text-center h5 mb-0" id="pendudukProfileName">{{ $penduduk->name }}</h5>
								<p class="text-center text-bold font-14" >
									NIK: <a id="pendudukNIK">{{ $penduduk->nik}}</a>
								</p>
								<div class="d-flex justify-content-center">
								<form id="deleteProfileForm" action="{{ route('penduduk.delete-profile-picture') }}" method="post">
								@csrf
   								@method('DELETE')
								   <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus foto profil?')">Hapus Foto</button>
								</form>
								<!-- <button type="submit" class="btn btn-danger btn-sm">Hapus Foto</button>   -->
								</div>
								<br>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">Detail Profil</h5>
									<ul>
										<li>
											<span>Tempat & Tanggal Lahir:</span>
											<a id="pendudukTmptlahir">{{ $penduduk->tempat_lahir }}</a> <a id="pendudukTgllahir">{{ ($penduduk->tanggal_lahir) }}</a>
										</li>
										
										<li>
										<span>Jenis Kelamin:</span> <a id="pendudukProfileGender" >{{ $penduduk->gender}}</a>
										</li>
										<li>
										<span>Golongan Darah:</span> <a id="pendudukGoldarah" >{{ $penduduk->gol_darah}}</a>
										</li>
										<li>
											<span>Alamat:</span>
												<a id="pendudukAlamat">{{ $penduduk->alamat}}</a><br>
										</li>
										<li>
											<span>Agama:</span>
											<a id="pendudukAgama">{{ $penduduk->agama}}</a>
										</li>
										<li>
											<span>Status Perkawinan:</span>
												<a id="pendudukStsnikah">{{ $penduduk->status_nikah}}</a>
										</li>
										<li>
											<span>Pekerjaan:</span>
											<a id="pendudukPekerjaan">{{ $penduduk->pekerjaan}}</a>
										</li>
										<li>
											<span>Kewarganegaraan:</span>
											<a id="pendudukKewarganegaraan">{{ $penduduk->kewarganegaraan}}</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
                            @livewire('penduduk-profile-tabs')
					</div>
				</div>
			</div>
@endsection
@push('scripts')
    <script>
        window.addEventListener('updatePendudukInfo', function(event){
            $('#pendudukProfileName').html(event.detail.pendudukName);
            $('#pendudukProfileEmail').html(event.detail.pendudukEmail);
            $('#pendudukProfileGender').html(event.detail.pendudukGender);
            $('#pendudukNIK').html(event.detail.pendudukNIK);
            $('#pendudukTgllahir').html(event.detail.pendudukTgllahir);
            $('#pendudukAgama').html(event.detail.pendudukAgama);
            $('#pendudukTmptlahir').html(event.detail.pendudukTmptlahir);
            $('#pendudukStsnikah').html(event.detail.pendudukStsnikah);
            $('#pendudukGoldarah').html(event.detail.pendudukGoldarah);
            $('#pendudukKewarganegaraan').html(event.detail.pendudukKewarganegaraan);
            $('#pendudukAlamat').html(event.detail.pendudukAlamat);
            $('#pendudukPekerjaan').html(event.detail.pendudukPekerjaan);





        });
        $('input[type="file"][name="pendudukProfilePictureFile"][id="pendudukProfilePictureFile"]').ijaboCropTool({
          preview : '#pendudukProfilePicture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          processUrl:'{{ route("penduduk.change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
			Livewire.emit('updatePendudukHeaderProfileInfo');
            toastr.success(message);
          },
          onError:function(message, element, status){
            toastr.error(message);
          }
      });   
    </script>
@endpush