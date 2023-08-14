@extends('page-starter') 
@section('isi')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Undangan List</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Undangan</a></li>
                    <li class="breadcrumb-item active">Undangan List</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-sm">
                        {{-- <div>
                            <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button>
                        </div> --}}
                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex gap-1">
                            <div class="input-group">
                                <input type="text" class="form-control" id="datepicker-range">
                                <span class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                </a>
                              
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary w-sm ms-auto float-end" data-bs-toggle="modal" data-bs-target="#modalAdd">
                                <i class="fas fa-folder-plus text-white-40"></i></a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-4 mt-sm-0">
                    <table class="table align-middle table-nowrap table-check">
                        <thead>
                            <tr class="bg-transparent">
                                <th>Email</th>
                                <th>Status</th>
                                <th>Waktu</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($undangan as $item)
                                <tr>
                                    {{-- <td><a href="invoices-detail.html" class="text-dark fw-medium">{{ $item->id }}</a> </td> --}}
                                    <td>{{ $item->email_penerima }}
                                    <td>{{ $item->status_undangan }}</td>
                                    <td>{{ $item->waktu_pengiriman }}</td>
                                    </td>
                                    
                                    <td>
                                        <form action="/notulensi/{{ $item->id }}" method="POST" class="d-inline"> 
                                            @method('DELETE') 
                                            @csrf 
                                            {{-- Update  --}}
                                            <button type="button" value="{{ $item->id }}" class="btn btn-primary editbtn btn-sm open_modal" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id={{ $item->id }} data-nama="{{ $item->nama }}" data-email="{{ $item->email }}" data-jabatan="{{ $item->jabatan }}" data-divisi="{{ $item->divisi }}">
                                              <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ?')">
                                              <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr><!-- end tr -->
                            @endforeach
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>

                <div class="row g-0 text-center text-sm-start">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@include('Emails.undangan_init');
@endsection