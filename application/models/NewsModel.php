<?php
  class NewsModel extends CI_Model{
    function index(){

    }
    function get_berita_terbaru(){
      $this->db->select('*')
            ->from('adi_news')
            ->where('id_type', '01')
            ->order_by('post_date', 'DESC')
            ->limit(8)
            ->offset(0);
      return $this->db->get()->result();
    }
  }
