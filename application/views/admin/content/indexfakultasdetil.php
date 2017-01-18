<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Fakultas Detail List<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/fakultas_detail/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Title</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modifiy Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($detail as $q_fakultas) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_fakultas->title_eng ?></td>
                                        <td><?php echo $q_fakultas->name; ?></td>
                                        <td><?php echo convertDateTime($q_fakultas->post_date) ?></td>
                                        <td><?php echo $q_fakultas->modify_date ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/fakultas_detail/view/<?php echo $q_fakultas->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/fakultas_detail/edit/<?php echo $q_fakultas->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/fakultas_detail/delete/<?php echo $q_fakultas->id ?>" class="btn btn-danger">Hapus</a>
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