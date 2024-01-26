@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Lupa Password')
@section('content')
<div class="login-box bg-white box-shadow border-radius-10">
		<div class="login-title">
			<h2 class="text-center text-primary">Lupa Password</h2>
				</div>
				<h6 class="mb-20">
				Masukan e-mail untuk mereset password
				</h6>
		<form action="{{route('penduduk.send-password-reset-link')}}" method="POST">
        @csrf
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
                <button type="button" class="close" data-dismiss="alert" aria-lablel="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-lablel="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="input-group custom">
            <input
                value="{{old('email')}}"
                type="email"
                name="email"
                class="form-control form-control-lg"
                placeholder="Email"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="fa fa-envelope-o" aria-hidden="true"></i
                ></span>
            </div>
        </div>
        @error('email')
            <div class="d-block text-danger" style="margin-top: 25px;margin-bottom:15px">
                {{$message}}
            </div>
        @enderror
								<div class="row align-items-center">
									<div class="col-5">
										<div class="input-group mb-0">
											
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
									
											<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Submit</a> -->
										</div>
									</div>
									<div class="col-2">
										<div class="font-16 weight-600 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">
											Atau
										</div>
									</div>
									<div class="col-5">
										<div class="input-group mb-0">
											<a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('penduduk.login') }}">Login</a>
										</div>
									</div>
								</div>
							</form>
						</div>
@endsection