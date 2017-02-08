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
						<h5 class="panel-title">Slider <span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/slider/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Judul Slider</th>
                                <th>Link</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($slider as $q_slider) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_slider->judul_slider ?></td>
                                        <td><?php echo $q_slider->link_slider ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/slider/view/<?php echo $q_slider->id_slider ?>" class="btn btn-primary">View</a>
                                            <a href="<?php echo base_url(); ?>admin/slider/edit/<?php echo $q_slider->id_slider ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/slider/delete/<?php echo $q_slider->id_slider ?>" class="btn btn-danger">Hapus</a>
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