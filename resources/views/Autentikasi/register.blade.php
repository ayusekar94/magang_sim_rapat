<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/symox-laravel/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="text-center mb-4">
                            <a href="index.html">
                                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">MR. Rapat</span>
                            </a>
                       </div>

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Register Account</h5>
                                    <p class="text-muted">Get your free MR. Rapat account now.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="/register" method="POST">@csrf
        
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">NIP</label>
                                            <input type="number" class="form-control" name="NIP" placeholder="Enter Nomor Identitas Pegawai">        
                                            @error('NIP')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Enter Full Name">
                                            @error('nama')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            @error('email')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" placeholder="Enter Jabatan">
                                            @error('nama')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter email">
                                            @error('email')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="col-md-4 col-form-label">Departemen</label>
                                            <div class="col-md-12">
                                                <select class="form-select" name="departemen">
                                                    <option value="Security & Tata Kelola" selected>Security & Tata Kelola</option>
                                                </select>
                                                @error('divisi')
                                                <code>
                                                    {{ $message }}
                                                </code>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="col-md-2 col-form-label">Divisi</label>
                                            <div class="col-md-12">
                                                <select class="form-select" name="divisi">
                                                    <option value="Divisi Kapal Perang" selected>Divisi Kapal Perang</option>
                                                    <option value="Divisi Teknologi Informasi">Divisi Teknologi Informasi</option>
                                                    <option value="Divisi Kapal Niaga">Divisi Kapal Niaga</option>
                                                    <option value="Divisi General Engineering">Divisi General Engineering</option>
                                                    <option value="Divisi Perbaikan dan Pemeliharaan">Divisi Perbaikan dan Pemeliharaan</option>
                                                </select>
                                                @error('divisi')
                                                <code>
                                                    {{ $message }}
                                                </code>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">        
                                            @error('password')
                                            <code>
                                                {{ $message }}
                                            </code>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password">        
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <input class="btn btn-primary w-sm waves-effect waves-light" type="submit" value="Register">
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="/" class="fw-medium text-primary"> Login</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Activ. by Kelompok Magang</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>

    </body>

<!-- Mirrored from themesdesign.in/symox-laravel/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 07:12:08 GMT -->
</html>
