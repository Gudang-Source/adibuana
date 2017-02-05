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
                                            <a href="<?php echo base_url(); ?>admin/sekilas/view/<?php echo $q_sekilas->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/sekilas/edit/<?php echo $q_sekilas->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/sekilas/delete/<?php echo $q_sekilas->id ?>" class="btn btn-danger">Hapus</a>
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