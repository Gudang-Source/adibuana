<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $kkn->nama ?></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="form-group">
										<label class="col-lg-3 control-label">NIM</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->nim ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Nama</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->nama ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Fakultas / Prodi</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->prodi ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Angkatan / Kelas</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->angkatan.' / '.$kkn->kelas ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Jenis Kelamin</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->jenkel ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Agama</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->agama ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Tempat, Tanggal Lahir</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->tmplahir.' ,'.$kkn->tgllahir  ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Alamat Asal</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->alamat ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Alamat Kos</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->kos ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Kota</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->kota ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Kecamatan</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->kecamatan ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Nomor Telp / HP</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->hp ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Status Kerja</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->status ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Jaket</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->jaket ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Sudah di ACC</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $kkn->acc == 'active'? 'Sudah':'Belum' ?></div>
										</div>
									</div>

								</div>
							</div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->