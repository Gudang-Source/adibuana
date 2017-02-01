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

    function get_news_type_with_content(){
       $this->db->select('adi_news_type.*, adi_user.name')
              ->from('adi_news_type')
              ->join('adi_user', 'adi_news_type.post_by = adi_user.id');
      $news_type = $this->db->get()->result();

      foreach($news_type as $q_news_type){
        $this->db->select('adi_news.*')
                ->from('adi_news')
                ->where('id_type', $q_news_type->id)
                ->limit(3)
                ->offset(0);
        $q_news_type->news = $this->db->get()->result();
      }
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
              ->join('adi_news_type', 'adi_news.id_type = adi_news_type.id')
              ->order_by('adi_news.post_date', 'desc');
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

    function insert_news($news, $pic="", $thumb="", $bpict=""){
      $data = [
        'id'=>rand(),
        'id_type'=>$news['tipe'],
        'author'=>$news['author'],
        'title_ina'=>$news['title_ina'],
        'title_eng'=>$news['title_eng'],
        'lead_ina'=>$news['lead_ina'],
        'lead_eng'=>$news['lead_eng'],
        'content_ina'=>$news['konten_ina'],
        'content_eng'=>$news['konten_eng'],
        'thumb'=>$thumb,
        'picture'=>$pic,
        'bpict'=>$bpict,
        'banner'=>$news['bv'],
        'hot'=>$news['hl'],
        'post_date'=>date('Y-m-d H:i:s'),
        'modify_date'=>date('Y-m-d H:i:s'),
        'post_by'=>$this->session->userdata('id_user')
      ];

      $insert = $this->db->insert('adi_news', $data);

    return $insert;
    }

    function update_news($id, $news, $pic="", $thumb="", $bpict=""){
      $data = [
        'id_type'=>$news['tipe'],
        'author'=>$news['author'],
        'title_ina'=>$news['title_ina'],
        'title_eng'=>$news['title_eng'],
        'lead_ina'=>$news['lead_ina'],
        'lead_eng'=>$news['lead_eng'],
        'content_ina'=>$news['konten_ina'],
        'content_eng'=>$news['konten_eng'],
        'banner'=>$news['bv'],
        'hot'=>$news['hl'],
        'modify_date'=>date('Y-m-d H:i:s'),
      ];

      if($pic != ""){
        $data['picture'] = $pic;
      }
      if($thumb != ""){
        $data['thumb'] = $thumb;
      }
      if($bpict != ""){
        $data['bpict'] = $bpict;
      }

      $where = [
        'id'=>$id
      ];

      $update = $this->db->update('adi_news', $data, $where);

      return $update;
    }

    function delete_news($id){
      $where = ['id'=>$id];
      $delete = $this->db->delete('adi_news', $where);
      return $delete;

    }

  }
