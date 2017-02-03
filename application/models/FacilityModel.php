<?php
    class FacilityModel extends CI_Model{
        function get_all(){
            // return $this->db->get('adi_facility')->result();
            $this->db->select('adi_facility.*, adi_user.username')
                    ->from('adi_facility')
                    ->join('adi_user', 'adi_user.id = adi_facility.post_by');
            return $this->db->get()->result();
        }
        function get_detil_fasilitas(){
             $this->db->select('adi_facility_detail.*, adi_user.username')
                    ->from('adi_facility_detail')
                    ->join('adi_user', 'adi_user.id = adi_facility_detail.post_by');
            return $this->db->get()->result();
        }
        function get_by_id($id){
            return $this->db->get_where('adi_facility', ['id'=>$id])->row();
        }

        function get_detail_by_id($id){
            $this->db->select('adi_facility_detail.*, adi_facility.title_eng as nama_fasilitas')
                    ->from('adi_facility_detail')
                    ->join('adi_facility','adi_facility_detail.id_fcl = adi_facility.id')
                    ->where('adi_facility_detail.id',$id);
            return $this->db->get()->row();
        }
        function insert($fasilitas){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'type'=>$fasilitas['type'],
                'title_ina'=>$fasilitas['title_ina'],
                'title_eng'=>$fasilitas['title_eng'],
                'lead_ina'=>$fasilitas['lead_ina'],
                'lead_eng'=>$fasilitas['lead_eng'],
                'tools_ina'=>$fasilitas['tools_ina'],
                'tools_eng'=>$fasilitas['tools_eng'],
                'etc_ina'=>$fasilitas['etc_ina'],
                'etc_eng'=>$fasilitas['etc_eng'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];


            $path = 'assets/images/facility';
            $upload = $this->image_upload->upload_image($path, $_FILES, 'picture_fasilitas', 'pict_');
            if($upload['success']){
                $data['picture'] = $upload['filename'];
            }

            $upload = $this->image_upload->upload_image($path, $_FILES, 'thumb_fasilitas', 'thumb_');
            if($upload['success']){
                $data['thumb'] = $upload['filename'];
            }

            $this->db->insert('adi_facility', $data);
            return ['success'=>true];
        }

        function insert_detail($fasilitas, $pic=""){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'id_fcl'=>$fasilitas['fasilitas'],
                'title_ina'=>$fasilitas['title_ina'],
                'title_eng'=>$fasilitas['title_eng'],
                'picture'=>$pic,
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];

            $insert = $this->db->insert('adi_facility_detail', $data);
            return $insert;
        }

        function update_detail($id, $fasilitas, $pic=""){
            $data = [
                'id_fcl'=>$fasilitas['fasilitas'],
                'title_ina'=>$fasilitas['title_ina'],
                'title_eng'=>$fasilitas['title_eng'],
                'picture'=>$pic,
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            if($pic != ""){
                $data['picture'] = $pic;
            }

            $where = ['id'=>$id];

            $update = $this->db->update('adi_facility_detail', $data, $where);
            return $update;
        }

        function update($id, $fasilitas){
            $this->load->library('image_upload');
            $old_data = $this->get_by_id($id);
            $data = [
                'type'=>$fasilitas['type'],
                'title_ina'=>$fasilitas['title_ina'],
                'title_eng'=>$fasilitas['title_eng'],
                'lead_ina'=>$fasilitas['lead_ina'],
                'lead_eng'=>$fasilitas['lead_eng'],
                'tools_ina'=>$fasilitas['tools_ina'],
                'tools_eng'=>$fasilitas['tools_eng'],
                'etc_ina'=>$fasilitas['etc_ina'],
                'etc_eng'=>$fasilitas['etc_eng']
            ];

            $where = [
                'id'=>$id
            ];
            $path = 'assets/images/facility';
            $upload = $this->image_upload->upload_image($path, $_FILES, 'picture_fasilitas', 'pict_');
            if($upload['success']){
                if($old_data->picture != ''){
                    unlink('assets/images/facility/'.$old_data->picture);
                }
                $data['picture'] = $upload['filename'];
            }

            $this->db->update('adi_facility', $data, $where);
            return ['success'=>true];
        }

        function delete($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_facility',$where);
            return $delete;
        }

        function delete_detail($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_facility_detail', $where);
        }
    }
    
