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
    }
    