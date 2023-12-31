@extends('page-starter') 
@section('isi')

<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-flex align-items-center justify-content-between">
			<h4 class="mb-0">Akun</h4>
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item">
						<a href="javascript: void(0);">Tables</a>
					</li>
					<li class="breadcrumb-item active">Akun</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<!-- end page title -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">Table Akun</h4>
				<button type="button" class="btn btn-primary w-sm ms-auto float-end" data-bs-toggle="modal" data-bs-target="#modalAdd">
					<i class="fas fa-folder-plus text-white-50"></i> Tambah </a>
				</button>
			</div>
			<!-- end card header -->
			<div class="card-body">
				<div id="table-gridjs"></div>
			</div>
			<!-- end card body -->
		</div>
		<!-- end card -->
	</div>
	<!-- end col -->
</div>
<!-- end row -->
<!-- end row --> 
{{-- @include('Akun.modal_add')  --}}
@endsection