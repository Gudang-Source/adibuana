<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Unit <span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/unit/add">Tambah</a></span> </h5>
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
                                foreach ($unit as $q_unit) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_unit->title_eng ?></td>
                                        <td><?php echo $q_unit->menu_eng; ?></td>
                                        <td><?php echo $q_unit->username ?></td>
                                        <td><?php echo convertDateTime($q_unit->post_date) ?></td>
                                        <td><?php echo convertDateTime($q_unit->modify_date) ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/unit/view/<?php echo $q_unit->id ?>" class="btn btn-primary">View</a>
                                            <a href="<?php echo base_url(); ?>admin/unit/edit/<?php echo $q_unit->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/unit/delete/<?php echo $q_unit->id ?>" class="btn btn-warning">Hapus</a>
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