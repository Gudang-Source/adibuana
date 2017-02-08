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

		function get_karir_by_id($id){
			$karir = $this->db->select('adi_career.*, adi_user.name')
							->from('adi_career')
							->join('adi_user', 'adi_career.post_by = adi_user.id')
							->where('adi_career.id', $id);
			$karir = $karir->get()->row();
			return $karir;
		}

		function insert($karir, $pic="", $thumb=""){
			$data = [
				'id'=>rand(10000000000, 99999999999),
				'author'=>$karir['author'],
				'title_ina'=>$karir['title_ina'],
				'title_eng'=>$karir['title_eng'],
				'start_date'=>date_to_date_time($karir['start_date']),
				'end_date'=>date_to_date_time($karir['end_date']),
				'lead_ina'=>$karir['lead_ina'],
				'lead_eng'=>$karir['lead_eng'],
				'content_ina'=>$karir['konten_ina'],
				'content_eng'=>$karir['konten_eng'],
				'thumb'=>$thumb,
				'picture'=>$pic,
				'hot'=>$karir['hl'],
				'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
			];
				$insert = $this->db->insert('adi_career', $data);
				return $insert;
		}

		function update($id, $karir, $pic="", $thumb=""){
			$data = [
				'author'=>$karir['author'],
				'title_ina'=>$karir['title_ina'],
				'title_eng'=>$karir['title_eng'],
				'start_date'=>date_to_date_time($karir['start_date']),
				'end_date'=>date_to_date_time($karir['end_date']),
				'lead_ina'=>$karir['lead_ina'],
				'lead_eng'=>$karir['lead_eng'],
				'content_ina'=>$karir['konten_ina'],
				'content_eng'=>$karir['konten_eng'],
				'hot'=>$karir['hl'],
                'modify_date'=>date('Y-m-d H:i:s'),
			];

			if($pic != ""){
		        $data['picture'] = $pic;
		    }
		    if($thumb != ""){
		        $data['thumb'] = $thumb;
		    }

		    $where = ['id'=>$id];

		    $update = $this->db->update('adi_career', $data, $where);
		    return $update;
		}

		function delete($id){
			$where = ['id'=>$id];
            $delete = $this->db->delete('adi_career', $where);
            return $delete;
		}


	}