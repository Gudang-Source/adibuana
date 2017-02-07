<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data KKN Online</h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>No urut Prodi</th>
                                <th>Kerja</th>
                                <th>Jenis Kelamin</th>
                                <th>Jaket</th>

                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($kkn as $q_kkn) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_kkn->nim ?></td>
                                        <td><?php echo $q_kkn->nama ?></td>
                                        <td><?php echo $q_kkn->prodi ?></td>
                                        <td><?php echo $q_kkn->nourut ?></td>
                                        <td><?php echo $q_kkn->status ?></td>
                                        <td><?php echo $q_kkn->jenkel ?></td>
                                        <td><?php echo $q_kkn->jaket ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/kkn/view/<?php echo $q_kkn->id ?>" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>              
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->
			</div>
			<!-- /main content -->