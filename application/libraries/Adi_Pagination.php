<?php 
class Adi_Pagination {
	
	function __construct(){
		$this->ci =&get_instance();
		$this->ci->load->library('pagination');
	}

	function paginate($url, $per_page, $page, $number_row){
		$config = [
		'base_url' => $url,
		'total_rows' => $number_row,
		'per_page' => $per_page,
		'page_query_string' => TRUE,
		'query_string_segment' => 'page',
		'first_link' => 'First',
		'last_link' => 'Last',
		'next_link' => 'Next',
		'prev_link' => 'Prev',
			// 'next_link' => '<span class="glyphicon glyphicon-chevron-right"></span>',
			// 'prev_link' => '<span class="glyphicon glyphicon-chevron-left"></span>',
		'cur_tag_open' => '<li class="active"><a href="#">',
		'cur_tag_close' => '</a></li>',
		'num_tag_open' => '<li>',
		'num_tag_close' => '</li>',
		'first_tag_open' => '<li>',
		'first_tag_close' => '</li>',
		'last_tag_open' => '<li>',
		'last_tag_close' => '</li>',

		'prev_tag_open' => '<li>',
		'prev_tag_close' => '</li>',

		'next_tag_open' => '<li>',
		'next_tag_close' => '</li>'
		];

		$this->ci->pagination->initialize($config);
		return $this->ci->pagination->create_links();
	}

	function adibuana_pagination($url, $per_page, $page, $number_row){
		// if(isset($_GET['page'])){
		// 	$current_page = $_GET['page'];
		// }else{
		// 	$current_page = 1;
		// }
		$current_page = $page + 1;


		$pages = ceil($number_row / $per_page);
		// The "back" link

		$first_link = ($current_page > 3) ? '<li><a nilai="1" href="?page=1" title="First page">&laquo;</a></li>': '';

		$prevlink = ($current_page > 1) ? '<li><a nilai="'.($current_page-1).'" href="?page='.($current_page-1).'" title="Previous page">&lsaquo;</a></li>' : '';
    	// The "forward" link
		$nextlink = ($page + 2 > 2) ? '<li><a nilai="'.($current_page+1).'" href="?page='.($current_page+1).'" title="Next page">&rsaquo;</a></li>' : '';

		$last_link = ($current_page + 2 < $pages) ? '<li><a nilai="' . $pages . '" href="?page=' . $pages . '" title="Last page">&raquo;</a></li>': '';

		$paging = '';

		$paging .= $first_link;
		$paging .= $prevlink;

		
		
		if($current_page == 1 && $pages == 1){
			for ($i=1; $i <= 1; $i++) {
				if($current_page == $i){
					$active = 'active';
				}else{
					$active = '';
				}
				$paging .= '<li class="'.$active.'"><a nilai="'.$i.'" href="?'.http_build_query(array_merge($_GET, ['page'=>$i])).'">'.$i.'</a></li>';
			}
		}
		elseif($current_page <= 2 && $pages > 5){
			for ($i=1; $i <= 5; $i++) {
				if($current_page == $i){
					$active = 'active';
				}else{
					$active = '';
				}
				$paging .= '<li class="'.$active.'"><a nilai="'.$i.'" href="?'.http_build_query(array_merge($_GET, ['page'=>$i])).'">'.$i.'</a></li>';
			}
		}elseif($current_page <= 2 && $current_page > 5){
			for ($i=1; $i <= $pages; $i++) {
				if($current_page == $i){
					$active = 'active';
				}else{
					$active = '';
				}
				$paging .= '<li class="'.$active.'"><a nilai="'.$i.'" class="'.$active.'" href="?'.http_build_query(array_merge($_GET, ['page'=>$i])).'">'.$i.'</a></li>';
			}
		}
		elseif($current_page > 2 && $current_page + 2 <= $pages ){
			for ($i=$current_page - 2; $i <= $current_page + 2; $i++) {
				if($current_page == $i){
					$active = 'active';
				}else{
					$active = '';
				}
				$paging .= '<li class="'.$active.'"><a nilai="'.$i.'" class="'.$active.'" href="?'.http_build_query(array_merge($_GET, ['page'=>$i])).'">'.$i.'</a></li>';
			}
		}else{
			for ($i=$current_page - 2; $i <= $pages; $i++) {
				if($current_page == $i){
					$active = 'active';
				}else{
					$active = '';
				}
				$paging .= '<li class="'.$active.'"><a nilai="'.$i.'" class="'.$active.'" href="?'.http_build_query(array_merge($_GET, ['page'=>$i])).'">'.$i.'</a></li>';
			}
		}
		
		$paging .= $nextlink;
		$paging .= $last_link;

    	// Display the paging information
		return $paging;
	}

}