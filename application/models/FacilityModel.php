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
        function insert($fasilitas){
             $this->load->library('image_upload');
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


            $path = 'assets/images/facility';
            $upload = $this->image_upload->upload_image($path, $_FILES, 'picture_fasilitas', 'pict_');
            if($upload['success']){
                $data['picture'] = $upload['filename'];
            }

            $upload = $this->image_upload->upload_image($path, $_FILES, 'thumb_fasilitas', 'thumb_');
            if($upload['success']){
                $data['thumb'] = $upload['filename'];
            }

            $this->db->update('adi_facility', $data);
            return ['success'=>true];
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
                'id_fasilitas'=>$id
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
    }
    