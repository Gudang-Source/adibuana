<?php
	class SliderModel extends CI_Model
	{
		
		function get_all(){
			 return $this->db->get('adi_slider')->result();
		}

		function get_by_id($id){
			$slider = $this->db->select('*')
                    ->from('adi_slider')
                    ->where('id_slider', $id);
            $slider = $slider->get()->row();
            return $slider;
		}

		function insert($slider, $pic=""){
			$data = [
				'id_slider'=>rand(10000000000, 99999999999),
				'judul_slider'=>$slider['judul'],
				'link_slider'=>$slider['link'],
				'picture'=>$pic
			];

			$insert = $this->db->insert('adi_slider', $data);
			return $insert;
		}

		function update($id, $slider, $pic=""){
			$data = [
				'judul_slider'=>$slider['judul'],
				'link_slider'=>$slider['link'],
			];

			if($pic != ""){
		        $data['picture'] = $pic;
		    }

		    $where = ['id_slider'=>$id];

		    $update = $this->db->update('adi_slider', $data, $where);
		    return $update;
		}

		function delete($id){
			$where = ['id_slider'=>$id];

			$delete = $this->db->delete('adi_slider', $where);
			return $delete;
		}
	}