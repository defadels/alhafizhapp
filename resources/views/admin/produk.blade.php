@extends('layout.admin_layout')

@section('title', 'Produk')


@section('content')
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Produk</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Produk</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-light">Settings</button>
								<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tabel Produk</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Foto Produk</th>
											<th scope="col">Nama Produk</th>
											<th scope="col">Deskripsi</th>	
											<th scope="col" colspan="2">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
											<img src="{{ asset('img/1kg kotak.jpg') }}" style="width: 100px;" alt="">
											</td>
											<td>Madu Al-HAfizh 1kg</td>
											<td>Ini adalah deskripsi dari madu alhfiazh 1kg</td>
											<td>
											<a href="{{ route('admin.produk.edit') }}" class="btn btn-primary">Edit</a>
											<a href="" class="btn btn-danger">Hapus</a>
											</td>
											
										</tr>
					
									</tbody>
								</table>
							</div>
						</div>
					</div>
    @endsection