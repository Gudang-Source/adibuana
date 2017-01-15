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
     function get_pengumuman_terbaru(){
      $this->db->select('*')
            ->from('adi_news')
            ->where('id_type', '04')
            ->order_by('post_date', 'DESC')
            ->limit(5)
            ->offset(0);
      return $this->db->get()->result();
    }
    function get_berita_by_id($id){
      $this->db->select('*')
            ->from('adi_news')
            ->where('id', $id);
      return $this->db->get()->row();
    }
    function get_all_kategori(){
      $this->db->select('*')
          ->from('adi_news_type');

      return $this->db->get()->result();
    }

    function get_berita_katagori($id){
        $this->db->select('*')
            ->from('adi_news')
            ->where('id_type', $id)
            ->order_by('post_date', 'DESC')
            ->limit(8)
            ->offset(0);
      return $this->db->get()->result();
    }
  }
