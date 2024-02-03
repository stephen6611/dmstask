@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Beranda')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="mb-3" style="margin-top: -20px">
						<h1>Inbox Calon Debitur</h1>
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
						Kriteria Pencarian Data Calon Debitur
						</h3>
						
					  </div>
					<div class="card" style="margin-top: -45px; margin-bottom: 200px; border-radius: 0px">
						
						<div class="form-group mx-4 my-4">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group mx-4">
											<label>Nama Pemohon</label>
											<input class="form-control" type="text" placeholder="Hanum Nirmala">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mx-4">
											<label>No. KTP</label>
											<input class="form-control" type="email" placeholder="367106020880005">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mx-4">
											<label>Tanggal - Aplikasi Start</label>
											<input class="form-control" type="date">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mx-4">
											<label>Tanggal Aplikasi - End Date</label>
											<input class="form-control" type="date">
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
									<div class="col-md-6 d-flex align-items-end">
										<div class="mb-3 d-flex justify-content-between" style="width: 100%;"><!--!-->
										<button class="btn btn-outline-success ml-4" type="submit" style="margin-bottom: 6px; display: block; width: 45%">Cari</button>
										<button class="btn btn-outline-danger mr-4" style="margin-bottom: 6px; display: block; width: 45%">Hapus</button></div></div>
									
										<div class="table-responsive" style="margin-right: 40px; margin-left: 40px; border-radius: 10px;">
											<table class="table table-striped" style="border-radius: 10px; overflow: hidden;">
												<thead>
													<tr class="table-warning" >
														<th scope="col" style="background-color: #E6E400;" >No. Aplikasi</th>
														<th scope="col" style="background-color: #E6E400;" >Nama Pemohon</th>
														<th scope="col" style="background-color: #E6E400;" > No. KTP</th>
														<th scope="col" style="background-color: #E6E400;" >Tanggal Aplikasi</th>
														<th scope="col" style="background-color: #E6E400;" >Cabang</th>
														<th scope="col" style="background-color: #E6E400;" >Nama AO</th>
														<th scope="col" style="background-color: #E6E400; text-align: center;" >#</th>
													</tr>
												</thead>
												<tbody>
													<tr class="table-light">
														<td>Aceh-MM-20231130</td>
														<td>Hanum Nirmala</td>
														<td>367106020880004</td>
														<td>15/12/2023</td>
														<td>Erwin Lingga</td>
														<td>Erwin Lingga (M1401)</td>
														<td class="text-center"><button class="btn btn-outline-success center">Received</button></td>
													</tr>
													<tr style="background-color: #FFFFD4;">
														<td colspan="2" style="text-align: left;">View 1-1 of 001 | Page 1 of 001</td>
														<td colspan="3"></td>
														<td colspan="2" style="text-align: right;">
															<nav aria-label="Page navigation">
																<ul class="pagination pagination-sm justify-content-end">
																	<li class="page-item"><a class="page-link" href="#" style="font-weight: bold;"><small> << </small></a></li>
																	<li class="page-item"><a class="page-link" href="#"> < </a></li>
																	<li class="page-item active" style="background-color: #E6E400;"><a class="page-link" href="#" style="font-weight: bold;">1</a></li>
																	<li class="page-item"><a class="page-link" href="#">2</a></li>
																	<li class="page-item"><a class="page-link" href="#">3</a></li>
																	<li class="page-item"><a class="page-link" href="#">...</a></li>
																	<li class="page-item"><a class="page-link" href="#" style="font-weight: bold;"> > </a></li>
																	<li class="page-item"><a class="page-link" href="#" > >> </a></li>
																</ul>
															</nav>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
								</div>
							</form>
						</div>
@endsection