<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Rapat</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<!-- end card header -->
							<div class="card-body">
								<form action="/rapat" method="post" enctype="multipart/form-data"> @csrf 
									<ul class="wizard-nav mb-5">
										<li class="wizard-list-item">
											<div class="list-item">
												<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
													<i class="bx bx-file"></i>
												</div>
											</div>
										</li>
									</ul>
									<!-- wizard-nav -->
									<div class="wizard-tab">
										<div class="text-center mb-4">
											<h5>Tambah Notulensi</h5>
											<p class="card-title-desc">Isi semua informasi dari hasil Rapat</p>
										</div>
										<div>
											<div class="row">
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="basicpill-firstname-input" class="form-label">Nama Rapat</label>
														<input type="text" class="form-control" placeholder="Masukkan Nama Rapat" id="basicpill-firstname-input" name="nama_rapat">
													</div>
												</div>
												<!-- end col -->
												<div class="col-lg-6">
													<label for="file" class="from-label">File</label>
                                                    <img class="img-preview img-fluid mb-3 col-sm-3">
                                                    <input type="file" class="form-control"  id="file" name="file" required > 
												</div>
												<!-- end col -->
											</div>
											<!-- end row -->
											<div class="row">
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="basicpill-address-input" class="form-label">Catatan Tambahan</label>
														<textarea id="basicpill-address-input" class="form-control" placeholder="Masukkan Catatan" rows="2" name="deskripsi"></textarea>
													</div>
												</div>
												<!-- end col -->
											</div>
											<!-- end row -->
										</div>
									</div>
									<!-- wizard-tab -->
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<input type="submit" class="btn btn-primary" value="Save">
									  </div>
								</form>
							</div>
						</div>
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
	</div>
</div>