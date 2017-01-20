<?php
/**
* 
*/
class BlogModel extends CI_Model
{
	function index(){

	}

	function get_blog_type(){
		$this->db->select('adi_blog_type.*, adi_user.name')
				->from('adi_blog_type')
				->join('adi_user', 'adi_blog_type.post_by = adi_user.id');
		$tipe = $this->db->get()->result();
		return $tipe;
	}

	function get_type_by_id($id){
		$tipe = $this->db->select('*')
						->from('adi_blog_type')
						->where('id', $id);
		$tipe = $tipe->get()->row();
		return $tipe;
	}

	function get_blog(){
		$this->db->select('adi_blog.*, adi_blog_type.title_eng, adi_user.name')
				->from('adi_blog')
				->join('adi_blog_type', 'adi_blog.id_type = adi_blog_type.id')
				->join('adi_user', 'adi_blog.post_by = adi_user.id');
		$blog = $this->db->get()->result();
		return $blog;
	}

	function get_blog_by_id($id){
		$blog = $this->db->select('adi_blog.*, adi_blog_type.title_eng')
						->from('adi_blog')
						->join('adi_blog_type', 'adi_blog.id_type = adi_blog_type.id')
						->where('adi_blog.id', $id);
		$blog = $blog->get()->row();
		return $blog;
	}
}