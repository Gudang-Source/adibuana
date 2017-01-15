<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Sekilas <span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/sekilas/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Judul</th>
                                <th>Page</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modifiy Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($sekilas as $q_sekilas) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_sekilas->title_eng ?></td>
                                        <td><?php echo $q_sekilas->menu_eng; ?></td>
                                        <td><?php echo $q_sekilas->username ?></td>
                                        <td><?php echo convertDateTime($q_sekilas->post_date) ?></td>
                                        <td><?php echo convertDateTime($q_sekilas->modify_date) ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/sekilas/view/<?php echo $q_sekilas->id ?>" class="btn btn-primary">View</a>
                                            <a href="<?php echo base_url(); ?>admin/sekilas/edit/<?php echo $q_sekilas->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/sekilas/delete/<?php echo $q_sekilas->id ?>" class="btn btn-warning">Hapus</a>
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