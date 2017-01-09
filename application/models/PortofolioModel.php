<?php
    class PortofolioModel extends CI_Model{
        function get_all(){
            return $this->db->get('portofolio')->result();
        }
        function get_portofolio_by_slug($slug){
            return $this->db->get_where('portofolio', ['slug_portofolio'=>$slug])->row();
        }
    }