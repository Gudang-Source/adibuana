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
						<h5 class="panel-title">User List<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/user/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th>Modify Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($users as $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $user->name ?></td>
                                        <td><?php echo $user->username ?></td>
                                        <td><?php echo $user->post_by ?></td>
                                        <td><?php echo convertDateTime($user->post_date) ?></td>
                                        <td><?php echo $user->modify_date ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/user/edit/<?php echo $user->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/user/delete/<?php echo $user->id ?>" class="btn btn-danger">Hapus</a>
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