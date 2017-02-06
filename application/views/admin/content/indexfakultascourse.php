<!-- Main content -->
			<div class="content-wrapper">

                <?php 
                    if($this->session->flashdata('success')){
                        ?>
                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Berhasil!</span> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php
                    }

                    if($this->session->flashdata('warning')){
                        ?>
                        <div class="alert bg-warning alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Perhatian!</span> <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                        <?php
                    }
                ?>

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
                                            <a href="<?php echo base_url(); ?>admin/faculty_course/view/<?php echo $q_course->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/faculty_course/edit/<?php echo $q_course->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/faculty_course/delete/<?php echo $q_course->id ?>" class="btn btn-danger">Hapus</a>
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