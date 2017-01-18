<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Career List </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Title</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modify Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($detail as $q_career) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_career->title_eng ?></td>
                                        <td><?php echo $q_career->name ?></td>
                                        <td><?php echo convertDateTime($q_career->post_date) ?></td>
                                        <td><?php echo $q_career->modify_date ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/detail_career/edit/<?php echo $q_career->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/detail_career/delete/<?php echo $q_career->id ?>" class="btn btn-danger">Hapus</a>
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