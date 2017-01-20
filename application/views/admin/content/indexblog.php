<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Blog List<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/blog/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Owner</th>
                                <th>Type</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modify Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($blog as $q_tipe) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_tipe->owner_name ?></td>
                                        <td><?php echo $q_tipe->title_eng ?></td>
                                        <td><?php echo $q_tipe->name ?></td>
                                        <td><?php echo convertDateTime($q_tipe->post_date) ?></td>
                                        <td><?php echo $q_tipe->modify_date ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/blog/view/<?php echo $q_tipe->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/blog/edit/<?php echo $q_tipe->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/blog/delete/<?php echo $q_tipe->id ?>" class="btn btn-danger">Hapus</a>
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