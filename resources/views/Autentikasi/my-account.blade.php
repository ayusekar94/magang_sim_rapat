@extends('page-starter') 

@section('isi')
 <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">User Settings</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                    <li class="breadcrumb-item active">User Settings</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mb-4">
    <div class="col-xl-8">
        <div class="card mb-0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                        <i class="bx bx-user-circle font-size-20"></i>
                        <span class="d-none d-sm-block">Profile</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                        <i class="bx bx-clipboard font-size-20"></i>
                        <span class="d-none d-sm-block">Tasks</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                        <i class="bx bx-mail-send font-size-20"></i>
                        <span class="d-none d-sm-block">Messages</span>   
                    </a>
                </li>
            </ul>
            <!-- Tab content -->
            <div class="tab-content p-4">
                <div class="tab-pane active" id="about" role="tabpanel">
                    <div>
                        <div>
                            <h5 class="font-size-16 mb-4">Edit Profile</h5>
                            <form method="POST" action="/auth/ {{ session()->get('NIP') }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">NIP</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="NIP" type="text" value="{{ $karyawan->NIP }}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="nama" type="text" value="{{ $karyawan->nama }}" id="example-search-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Jabatan</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="jabatan" type="text" value="{{ $karyawan->jabatan }}" id="example-email-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Divisi</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="divisi" value="{{ $karyawan->divisi }}">
                                            <option value="Divisi Kapal Perang" selected>Divisi Kapal Perang</option>
                                            <option value="Divisi Teknologi Informasi">Divisi Teknologi Informasi</option>
                                            <option value="Divisi Kapal Niaga">Divisi Kapal Niaga</option>
                                            <option value="Divisi General Engineering">Divisi General Engineering</option>
                                            <option value="Divisi Perbaikan dan Pemeliharaan">Divisi Perbaikan dan Pemeliharaan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Departemen</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="departemen" value="{{ $karyawan->departemen }}">
                                            <option value="Security & Tata Kelola" selected>Security & Tata Kelola</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-sm ms-auto float-end">
                                    <i class="bx bx-save"></i> save </a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">Active</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                    <tr>
                                        <td style="width: 60px;">
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                                <label class="form-check-label" for="tasks-activeCheck2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Ecommerce Product Detail</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 3
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Product Design</p>
                                        </td>
                                        
                                        <td>27 May, 2020</td>
                                        <td style="width: 160px;"><span class="badge badge-soft-primary font-size-12">Active</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                                <label class="form-check-label" for="tasks-activeCheck1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Ecommerce Product</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 7
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Web Development</p>
                                        </td>
                                        
                                        <td>26 May, 2020</td>
                                        <td><span class="badge badge-soft-primary font-size-12">Active</span></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="font-size-16 my-3">Upcoming</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                    <tr>
                                        <td style="width: 60px;">
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck3">
                                                <label class="form-check-label" for="tasks-upcomingCheck3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Chat app Page</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 2
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Web Development</p>
                                        </td>
                                        
                                        <td>-</td>
                                        <td style="width: 160px;"><span class="badge badge-soft-secondary font-size-12">Waiting</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck2">
                                                <label class="form-check-label" for="tasks-upcomingCheck2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Email Pages</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 1
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Illustration</p>
                                        </td>
                                        
                                        <td>04 June, 2020</td>
                                        <td><span class="badge badge-soft-primary font-size-12">Approved</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck1">
                                                <label class="form-check-label" for="tasks-upcomingCheck1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Contacts Profile Page</a>
                                        </td>
                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 6
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Product Design</p>
                                        </td>
                                        
                                        <td>-</td>
                                        <td><span class="badge badge-soft-secondary font-size-12">Waiting</span></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="font-size-16 my-3">Complete</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                    <tr>
                                        <td style="width: 60px;">
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck3">
                                                <label class="form-check-label" for="tasks-completeCheck3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">UI Elements</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 6
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Product Design</p>
                                        </td>
                                        
                                        <td>27 May, 2020</td>
                                        <td style="width: 160px;"><span class="badge badge-soft-success font-size-12">Complete</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck2">
                                                <label class="form-check-label" for="tasks-completeCheck2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Authentication Pages</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 2
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Illustration</p>
                                        </td>
                                        
                                        <td>27 May, 2020</td>
                                        <td><span class="badge badge-soft-success font-size-12">Complete</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16 text-center">
                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck1">
                                                <label class="form-check-label" for="tasks-completeCheck1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="fw-bold text-dark">Admin Layout</a>
                                        </td>

                                        <td>
                                            <p class="ml-4 text-muted mb-0">
                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 3
                                            </p>
                                        </td>
                                        <td>
                                            <p class="ml-4 mb-0">Product Design</p>
                                        </td>
                                        
                                        <td>26 May, 2020</td>
                                        <td><span class="badge badge-soft-success font-size-12">Complete</span></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <div>
                        <div data-simplebar style="max-height: 430px;">
                            <div class="d-flex align-items-start border-bottom py-4">
                                <div class="flex-shrink-0 me-2">
                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-3.jpg" alt="avatar-3 images">
                                </div>
                                
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">Marion Walker <small class="text-muted float-end">1 hr ago</small></h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting .</p>

                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                        class="mdi mdi-reply"></i> Reply</a>

                                    <div class="d-flex align-items-start mt-4">
                                        <div class="flex-shrink-0 me-2">
                                            <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-4.jpg" alt="avatar-4 images">
                                        </div>
                                        
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-15 mb-1">Shanon Marvin <small class="text-muted float-end">1 hr ago</small></h5>
                                            <p class="text-muted">It will be as simple as in fact, it will be Occidental. To it will seem like simplified .</p>

                                            
                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block">
                                                <i class="mdi mdi-reply"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start border-bottom py-4">
                                <div class="flex-shrink-0 me-2">
                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-5.jpg" alt="avatar-5 images">
                                </div>
                                
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">Janice Morgan <small class="text-muted float-end">2 hrs ago</small></h5>
                                    <p class="text-muted">To achieve this, it would be necessary to have uniform pronunciation.</p>

                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                        class="mdi mdi-reply"></i> Reply</a>

                                </div>
                            </div>

                            <div class="d-flex align-items-start border-bottom py-4">
                                <div class="flex-shrink-0 me-2">
                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-7.jpg" alt="avatar-7 images">
                                </div>
                                
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1">Patrick Petty <small class="text-muted float-end">3 hrs ago</small></h5>
                                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit </p>

                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i
                                        class="mdi mdi-reply"></i> Reply</a>

                                </div>
                            </div>
                        </div>

                        <div class="border rounded mt-4">
                            <form action="#">
                                <div class="px-2 py-1 bg-light">
                                    
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-link"></i></button>
                                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-smile"></i></button>
                                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="bx bx-at"></i></button>
                                      </div>
                                    
                                </div>
                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>
                                
                            </form>
                        </div> <!-- end .border-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="profile-user"></div>
            <div class="card-body">
                <div class="profile-content text-center">
                    <div class="profile-user-img">
                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <h5 class="mt-3 mb-1">Marcus</h5>
                    <p class="text-muted">UI/UX Designer</p>


                    <p class="text-muted mb-1">
                        Hi I'm Marcus,has been the industry's standard dummy text To an English person, 
                        it will seem like simplified English, as a skeptical Cambridge.</p>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection