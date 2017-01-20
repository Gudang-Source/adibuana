<?php

	class CareerModel extends CI_Model{
		function index(){

		}

		function get_career(){
			$this->db->select('adi_career.*, adi_user.name')
					->from('adi_career')
					->join('adi_user', 'adi_career.post_by = adi_user.id');
			$career = $this->db->get()->result();
			return $career;
		}

		function get_detail_career(){
			$this->db->select('adi_career_detail.*, adi_user.name')
					->from('adi_career_detail')
					->join('adi_user', 'adi_career_detail.post_by = adi_user.id');
			$detail = $this->db->get()->result();
			return $detail;
		}

		function get_by_id($id){
			$karir = $this->db->select('*')
							->from('adi_career')
							->where('id', $id);
			$karir = $karir->get()->row();
			return $karir;
		}
	}