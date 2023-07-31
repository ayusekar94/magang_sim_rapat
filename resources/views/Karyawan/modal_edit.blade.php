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
                                <h5>Customer Information</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-name-input" class="form-label">Customer Name :</label>
                                            <input type="text" class="form-control" placeholder="Enter Name" id="customerinfo-name-input">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="customerinfo-email-input" class="form-label">Email :</label>
                                            <input type="email" class="form-control" placeholder="Enter Email" id="customerinfo-email-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="mb-3">
                                            <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                            <input type="text" class="form-control" placeholder="Enter Phone" id="customerinfo-phone-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customerinfo-address-input" class="form-label">Address :</label>
                                    <textarea class="form-control" placeholder="Enter Address" id="customerinfo-address-input" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-4">
                            <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->