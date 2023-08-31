<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddLabel">Tambah Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form method="post" enctype="multipart/form-data" id="formAdd">
                    @csrf 
                    @method('PUT')
                    <div>
                        <ul class="wizard-nav mb-5">
                            <li class="wizard-list-item">
                                <div class="list-item">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Customer Info">
                                        <i class="bx bx-file"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="wizard-tab">
                            <div class="text-center mb-4">
                                <h5>Tambah Materi Rapat</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="mb-3">
                                            <label for="customerinfo-name-input" class="form-label">Name Materi :</label>
                                            <input type="text" name="judul_materi" id="judul_materi" class="form-control" /> @error('judul_materi') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="mb-3">
                                            <label for="customerinfo-email-input" class="form-label">Deskripsi Materi :</label>
                                            <input type="email" name="deskripsi_materi" id="deskripsi_materi" class="form-control" /> @error('deskripsi_materi') <code>
                                                {{ $message }}
                                            </code> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="customerinfo-divisi-input" class="form-label">Upload File :</label>
                                            <input type="file" name="image" class="form-control" id="formFile"
                                                accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                                @error('image') <code>
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                <code> @enderror 
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