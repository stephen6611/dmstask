@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Beranda')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>DataTable</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											DataTable
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="">
									<button class="btn btn-primary" href="#" role="button" data-toggle="dropdown">
										new data
									</button>
									
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table Simple</h4>
							
						</div>
						<div class="pb-20">
							<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
								<thead>
									<tr role="row"><th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="">NIK</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="">Jenis Kelamin</th><th id="pendudukAlamat" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="">Alamat</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="">Pekerjaan</th><th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="">Aksi</th></tr>
								</thead>
								<tbody>
    @foreach ($penduduks as $row)
        <tr role="row" class="odd">
			<td>{{ $row->name }}</td>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->pekerjaan }}</td>
            <td>
                <div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                        <a class="dropdown-item" href="{{ route('penduduk.profile', ['pendudukId' => $row->id]) }}">
                            <i class="dw dw-edit2"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dw dw-delete-3" href="{{ route('penduduk.home', ['id' => $row->id]) }}"></i> Delete
                        </a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
									
									
									<!--  -->
									
							</table></div></div></div></div>
						</div>
					</div>
					<!-- Simple Datatable End -->
					
@endsection