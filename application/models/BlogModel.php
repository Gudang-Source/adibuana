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

	function get_blog_by_type($id){
		$blog = $this->db->select('*')
						->from('adi_blog')
						->where('id_type', $id);
		$blog = $blog->get()->result();
		return $blog;
	}

	function insert_tipe($tipe){
		$data = [
			'title_ina'=>$tipe['type_ina'],
			'title_eng'=>$tipe['type_eng'],
			'post_date'=>date('Y-m-d H:i:s'),
            'modify_date'=>date('Y-m-d H:i:s'),
            'post_by'=>$this->session->userdata('id_user')
		];
			$insert = $this->db->insert('adi_blog_type', $data);
			return $insert;
	}

	function insert_blog($blog){
		$data = [
			'id_type'=>$blog['blog'],
			'owner_name'=>$blog['nama'],
			'theme'=>$blog['tema'],
			'header_title'=>$blog['header'],
			'link'=>$blog['link'],
			'post_date'=>date('Y-m-d H:i:s'),
            'modify_date'=>date('Y-m-d H:i:s'),
            'post_by'=>$this->session->userdata('id_user')
		];

		$insert = $this->db->insert('adi_blog', $data);
		return $insert;
	}

	function update_tipe($id, $tipe){
		$data = [
			'title_ina'=>$tipe['type_ina'],
			'title_eng'=>$tipe['type_eng'],
            'modify_date'=>date('Y-m-d H:i:s')
		];

		$where = ['id'=>$id];

		$update = $this->db->update('adi_blog_type', $data, $where);
		return $update;
	}

	function update_blog($id, $blog){
		$data = [
			'id_type'=>$blog['blog'],
			'owner_name'=>$blog['nama'],
			'theme'=>$blog['tema'],
			'header_title'=>$blog['header'],
			'link'=>$blog['link'],
            'modify_date'=>date('Y-m-d H:i:s')
		];

		$where = ['id'=>$id];

		$update = $this->db->update('adi_blog', $data, $where);
		return $update;
	}

	function delete_tipe($id){
		$where = ['id'=>$id];
		$delete = $this->db->delete('adi_blog_type', $where);
		return $delete;
	}

	function delete_blog($id){
		$where = ['id'=>$id];
		$delete = $this->db->delete('adi_blog', $where);
		return $delete;
	}
}