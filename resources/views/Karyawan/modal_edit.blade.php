<!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Edit Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form method="post" enctype="multipart/form-data" id="formEdit">
                    @csrf 
                    @method('PUT')
                    <div>
                        <ul class="wizard-nav mb-5">
                            <li class="wizard-list-item">
                                <div class="list-item">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Customer Info">
                                        <i class="bx bx-user-circle"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Tambah Data Karyawan</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-phone-input" class="form-label">NIP :</label>
                                            <input type="text" name="nip-edit" id="nip-edit" class="form-control" /> @error('NIP') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-name-input" class="form-label">Karyawan Name :</label>
                                            <input type="text" name="nama-edit" id="nama-edit" class="form-control" /> @error('nama') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-email-input" class="form-label">Email :</label>
                                            <input type="email" name="email-edit" id="email-edit" class="form-control" /> @error('email') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-name-input" class="form-label">Jabatan :</label>
                                            <input type="text" name="jabatan-edit" id="jabatan-edit" class="form-control" /> @error('nama') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-divisi-input" class="form-label">Divisi :</label>
                                            <input type="divisi" name="divisi-edit" id="divisi-edit" class="form-control" /> @error('divisi') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->