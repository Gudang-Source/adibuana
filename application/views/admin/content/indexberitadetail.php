<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">News List<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/news_detail/add">Tambah</a></span> </h5>
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
                                foreach ($detail as $q_news) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_news->title_eng ?></td>
                                        <td><?php echo $q_news->name ?></td>
                                        <td><?php echo convertDateTime($q_news->post_date) ?></td>
                                        <td><?php echo $q_news->modify_date ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/news_detail/view/<?php echo $q_news->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/news_detail/edit/<?php echo $q_news->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/news_detail/delete/<?php echo $q_news->id ?>" class="btn btn-danger">Hapus</a>
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