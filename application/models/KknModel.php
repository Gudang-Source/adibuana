<?php
    class KknModel extends CI_Model{
        function get_all(){
            return $this->db->get('adi_kkn')->result();
        }
        function get_by_id($id){
            return $this->db->get_where('adi_kkn', ['id'=>$id])->row();
        }
        function get_nomor_urut($prodi){
            $this->db->select('adi_kkn.nourut')
                    ->from('adi_kkn')
                    ->where('adi_kkn.prodi', $prodi)
                    ->order_by('nourut', 'desc')
                    ->limit(1);

            return $this->db->get()->row();
        }
        function cek_nim($nim){
            $nim = $this->db->get_where('adi_kkn', ['nim'=>$nim]);
            if($nim->num_rows() == 1){
                return false;
            }else{
                return true;
            }
        }
    }