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
	}