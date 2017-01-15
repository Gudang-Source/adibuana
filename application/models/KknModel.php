<?php
    class KknModel extends CI_Model{
        function get_all(){
            return $this->db->get('adi_kkn')->result();
        }
        function get_by_id($id){
            return $this->db->get_where('adi_kkn', ['id'=>$id])->row();
        }
    }