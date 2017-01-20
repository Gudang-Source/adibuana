<?php
  class NewsModel extends CI_Model{
    function index(){

    }
    function get_berita_terbaru(){
      $this->db->select('*')
            ->from('adi_news')
            ->where('id_type', '01')
            ->order_by('post_date', 'DESC')
            ->limit(6)
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

    function get_berita_katagori($id, $limit, $offset){
        $this->db->select('*')
            ->from('adi_news')
            ->where('id_type', $id)
            ->order_by('post_date', 'DESC')
            ->limit($limit)
            ->offset($offset);
      return $this->db->get()->result();
    }

    function get_news_type(){
      $this->db->select('adi_news_type.*, adi_user.name')
              ->from('adi_news_type')
              ->join('adi_user', 'adi_news_type.post_by = adi_user.id');
      $news_type = $this->db->get()->result();
      return $news_type;
    }

    function get_tipe_by_id($id){
      $this->db->select('*')
            ->from('adi_news_type')
            ->where('id', $id);
      return $this->db->get()->row();
    }

    function get_news(){
      $this->db->select('adi_news.*, adi_user.name, adi_news_type.type_eng')
              ->from('adi_news')
              ->join('adi_user', 'adi_news.post_by = adi_user.id')
              ->join('adi_news_type', 'adi_news.id_type = adi_news_type.id');
      $news = $this->db->get()->result();
      return $news;
    }

    function get_news_by_id($id){
      $this->db->select('adi_news.*, adi_news_type.type_eng')
            ->from('adi_news')
            ->join('adi_news_type', 'adi_news.id_type = adi_news_type.id')
            ->where('adi_news.id', $id);
      return $this->db->get()->row();
    }

    function get_detail_news(){
      $this->db->select('adi_news_detail.*, adi_user.name')
              ->from('adi_news_detail')
              ->join('adi_user', 'adi_news_detail.post_by = adi_user.id');
      $detail = $this->db->get()->result();
      return $detail;
    }
  }
