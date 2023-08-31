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
												<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
													<i class="bx bx-user-voice"></i>
												</div>
											</div>
										</li>
										<li class="wizard-list-item">
											<div class="list-item">
												<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
													<i class="bx bx-user-plus"></i>
												</div>
											</div>
										</li>
										<li class="wizard-list-item">
											<div class="list-item">
												<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
													<i class="bx bx-file"></i>
												</div>
											</div>
										</li>
										<li class="wizard-list-item">
											<div class="list-item">
												<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
													<i class="bx bx-envelope"></i>
												</div>
											</div>
										</li>
									</ul>
									<!-- wizard-nav -->
									<div class="wizard-tab">
										<div class="text-center mb-4">
											<h5>Detail Rapat</h5>
											<p class="card-title-desc">Isi semua informasi dibawah</p>
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
													<div class="mb-3">
														<label for="basicpill-lastname-input" class="form-label">Tanggal Rapat</label>
														<input type="date" class="form-control" placeholder="Masukkan Tanggal Rapat" id="basicpill-lastname-input" name="tanggal">
													</div>
												</div>
												<!-- end col -->
											</div>
											<!-- end row -->
											<div class="row">
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="basicpill-phoneno-input" class="form-label">Waktu Mulai</label>
														<input type="time" class="form-control" placeholder="Enter Phone" id="basicpill-phoneno-input" name="waktu_mulai">
													</div>
												</div>
												<!-- end col -->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="basicpill-email-input" class="form-label">Waktu Selesai</label>
														<input type="time" class="form-control" placeholder="Enter Email" id="basicpill-email-input" name="waktu_selesai">
													</div>
												</div>
												<!-- end col -->
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="basicpill-phoneno-input" class="form-label">Ruangan</label>
														<input type="text" class="form-control" placeholder="Masukkan Nama Ruangan" id="basicpill-phoneno-input" name="ruangan">
													</div>
												</div>
												<!-- end col -->
											</div>
											<!-- end row -->
											<div class="row">
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="basicpill-address-input" class="form-label">Deskripsi</label>
														<textarea id="basicpill-address-input" class="form-control" placeholder="Masukkan Deskripsi" rows="2" name="deskripsi"></textarea>
													</div>
												</div>
												<!-- end col -->
											</div>
											<!-- end row -->
										</div>
									</div>
									<!-- wizard-tab -->
									<div class="wizard-tab">
										<div>
											<div class="text-center mb-4">
												<h5>Anggota Rapat</h5>
												<p class="card-title-desc">Isi semua informasi dibawah</p>
											</div>
											<div class="row">
												<div class="col-12">
													<div class="card">
														<div class="card-body">
															<div id="table-anggota">
																
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end form -->
										</div>
									</div>
									<!-- wizard-tab -->
									<div class="wizard-tab">
										<div>
											<div class="text-center mb-4">
												<h5>Dokumen Rapat</h5>
												<p class="card-title-desc">Isi semua informasi dibawah</p>
											</div>
											<div>
												<div class="row">
													<div class="alert alert-info alert-dismissible fade show" role="alert">
														<b>Materi Rapat Pertemuan PT. Gautama</b>
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												</div>
												<div class="row mb-4">
													<button type="button" class="btn btn-primary waves-effect waves-light" id="tambahMateri">Tambah Materi Baru</button>
												</div>
												<div id="formMateriRapat" style="display: none; ">
												<div class="row mt-2">
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-namecard-input" class="form-label">Judul Materi</label>
															<input type="text" class="form-control" placeholder="Masukkan Judul Materi" name="judul_materi[]">
														</div>
													</div>
													<!-- end col -->
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-cardno-input" class="form-label">File Materi</label>
															<input type="file" class="form-control" placeholder="Enter Credit Card Number" id="basicpill-cardno-input" name="file_materi[]">
														</div>
													</div>
													<!-- end col -->
												</div>
												<!-- end row -->
												<div class="row">
													<div class="col-lg-12">
														<div class="mb-3">
															<label for="basicpill-address-input" class="form-label">Deskripsi</label>
															<textarea id="basicpill-address-input" class="form-control" placeholder="Masukkan Deskripsi" rows="2" name="deskripsi[]"></textarea>
														</div>
													</div>
													<!-- end col -->
												</div>
												<!-- end row -->
												</div>
											</div>
											<!-- end form -->
										</div>
									</div>
									<!-- wizard-tab -->
									<div class="wizard-tab">
										<div>
											<div class="text-center mb-4">
												{{-- <h5>Undangan Rapat</h5> --}}
											</div> @include('Emails.template_email') <div class="row mt-4">
												<div class="col-lg-6">
													<div class="form-check form-switch" dir="ltr">
														<input type="checkbox" class="form-check-input" id="customSwitch1" checked>
														<label class="form-check-label" for="customSwitch1">Kirim Undangan Sekarang</label>
													</div>
												</div>
											</div>
											<div class="row mt-4" id="jadwal" style="display: none;">
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="basicpill-cardno-input" class="form-label">Jadwalkan Pengiriman</label>
														<input type="datetime-local" class="form-control" placeholder="Masukkan Tanggal dan Waktu Penjadwalan" id="basicpill-cardno-input">
													</div>
												</div>
											</div>
											<!-- end form -->
										</div>
									</div>
									<!-- wizard-tab -->
									<div class="d-flex align-items-start gap-3 mt-4">
										<button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
										<button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
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