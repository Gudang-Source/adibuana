<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data fasilitas <span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/facility/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Judul</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modifiy Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($fasilitas as $q_fasilitas) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_fasilitas->title_eng ?></td>
                                        <td><?php echo $q_fasilitas->username ?></td>
                                        <td><?php echo convertDateTime($q_fasilitas->post_date) ?></td>
                                        <td><?php 
                                            if($q_fasilitas->modify_date != ('0000-00-00 00:00:00')){
                                                echo convertDateTime($q_fasilitas->modify_date);
                                            }
                                         ?>
                                         </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/facility/view/<?php echo $q_fasilitas->id ?>" class="btn btn-primary">View</a>
                                            <a href="<?php echo base_url(); ?>admin/facility/edit/<?php echo $q_fasilitas->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/facility/delete/<?php echo $q_fasilitas->id ?>" class="btn btn-warning">Hapus</a>
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