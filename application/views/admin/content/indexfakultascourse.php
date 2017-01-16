<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Faculty Course List<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/faculty_course/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Faculty</th>
                                <th>Title</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modifiy Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($course as $q_course) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_course->nama_fakultas ?></td>
                                        <td><?php echo $q_course->title_eng ?></td>
                                        <td><?php echo $q_course->name; ?></td>
                                        <td><?php echo convertDateTime($q_course->post_date) ?></td>
                                        <td><?php echo convertDateTime($q_course->modify_date) ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/fakultas-tipe/view/<?php echo $q_course->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/fakultas-tipe/edit/<?php echo $q_course->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/fakultas-tipe/delete/<?php echo $q_course->id ?>" class="btn btn-danger">Hapus</a>
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