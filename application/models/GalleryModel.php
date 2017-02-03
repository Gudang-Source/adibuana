<?php

	class GalleryModel extends CI_Model
	{
		function index(){

		}

		function get_gallery_cat(){
			$this->db->select('adi_gallery_cat.*, adi_user.name')
					->from('adi_gallery_cat')
					->join('adi_user', 'adi_gallery_cat.post_by = adi_user.id');
			$cat_gal = $this->db->get()->result();
			return $cat_gal;
		}

		function get_cat_by_id($id){
			$katagori = $this->db->select('*')
								->from('adi_gallery_cat')
								->where('id', $id);
			$katagori = $katagori->get()->row();
			return $katagori;
		}

		function get_gallery(){
			$this->db->select('adi_gallery.*, adi_user.name, adi_gallery_cat.title_eng as katagori')
					->from('adi_gallery')
					->join('adi_user', 'adi_gallery.post_by = adi_user.id')
					->join('adi_gallery_cat', 'adi_gallery.id_cat = adi_gallery_cat.id');
			$gallery = $this->db->get()->result();
			return $gallery;
		}

		function get_gallery_by_id($id){
			$gallery = $this->db->select('adi_gallery.*, adi_gallery_cat.title_eng as katagori')
								->from('adi_gallery')
								->join('adi_gallery_cat', 'adi_gallery.id_cat = adi_gallery_cat.id')
								->where('adi_gallery.id', $id);
			$gallery = $gallery->get()->row();
			return $gallery;
		}

		function insert_kategori($katagori, $pic=""){
			$data = [
				'id'=>rand(10000000000, 99999999999),
				'title_ina'=>$katagori['title_ina'],
				'title_eng'=>$katagori['title_eng'],
				'lead_ina'=>$katagori['lead_ina'],
				'lead_eng'=>$katagori['lead_eng'],
				'thumb'=>$pic,
				'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
			];

			$insert = $this->db->insert('adi_gallery_cat', $data);
			return $insert;
		}

		function insert($gal, $thumb="", $pic=""){
			$data = [
				'id'=>rand(10000000000, 99999999999),
				'id_cat'=>$gal['katagori'],
				'title_ina'=>$gal['title_ina'],
				'title_eng'=>$gal['title_eng'],
				'lead_ina'=>$gal['lead_ina'],
				'lead_eng'=>$gal['lead_eng'],
				'thumb'=>$thumb,
				'picture'=>$pic,
				'hot'=>$gal['h1'],
				'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
			];

			$insert = $this->db->insert('adi_gallery', $data);
			return $insert;
		}

		function update_katagori($id, $katagori, $pic=""){
			$data = [
				'title_ina'=>$katagori['title_ina'],
				'title_eng'=>$katagori['title_eng'],
				'lead_ina'=>$katagori['lead_ina'],
				'lead_eng'=>$katagori['lead_eng'],
                'modify_date'=>date('Y-m-d H:i:s'),
			];

			if($pic != ""){
                $data['thumb'] = $pic;
            }

            $where = ['id'=>$id];

            $update = $this->db->update('adi_gallery_cat', $data, $where);
            return $update;
		}

		function update($id, $gal, $thumb="", $pic=""){
			$data = [
				'id_cat'=>$gal['katagori'],
				'title_ina'=>$gal['title_ina'],
				'title_eng'=>$gal['title_eng'],
				'lead_ina'=>$gal['lead_ina'],
				'lead_eng'=>$gal['lead_eng'],
				'hot'=>$gal['h1'],
                'modify_date'=>date('Y-m-d H:i:s')
			];

			if ($thumb != "") {
				$data['thumb'] = $thumb;
			}

			if ($pic != "") {
				$data['picture'] = $pic;
			}

			$where = ['id'=>$id];

			$update = $this->db->update('adi_gallery', $data, $where);
			return $update;
		}

		function delete_katagori($id){
			$where = ['id'=>$id];
			$delete = $this->db->delete('adi_gallery_cat', $where);
			return $delete;
		}

		function delete($id){
			$where = ['id'=>$id];
			$delete = $this->db->delete('adi_gallery', $where);
			return $delete;
		}

	}