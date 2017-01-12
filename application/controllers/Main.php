<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('template_website');
            $this->data['page'] = '';
            $this->data['title'] = 'Universitas PGRI Adi Buana';

        }

        function index(){
            $data = $this->data;
            $this->load->model('NewsModel', 'news_model');

            $data['berita_terbaru'] = $this->news_model->get_berita_terbaru();
            $this->template_website->display('web/content/index', $data);
        }


        function beritadanpengumuman($slug, $id){
            $data = $this->data;
            $this->load->model('NewsModel', 'news_model');

            $data['berita_katagori'] = $this->news_model->get_berita_katagori($id);
            $this->template_website->display('web/content/beritadanpengumuman', $data);

        }

        function detilberitadanpengumuman($slug, $id){
          $data = $this->data;
          $this->load->model('NewsModel', 'news_model');

          $data['berita'] = $this->news_model->get_berita_by_id($id);
          $data['kategori'] = $this->news_model->get_all_kategori();

          $this->template_website->display('web/content/detilberitadanpengumuman', $data);
        }

        function sekilas($slug, $id){
            $this->load->model('PageModel', 'page_model');

            $data['page'] = $this->page_model->get_by_id($id);
            $this->template_website->display('web/content/sekilas', $data);
        }
        function areafakultas($slug, $id){


              $this->template_website->display('web/content/areafakultas');
        }
        function detilfakultas($slug_faculty, $id_faculty, $slug_prodi=null, $id_prodi=null){
            $this->load->model('FacultyModel', 'faculty_model');

            $data['fakultas'] = $this->faculty_model->get_by_id($id_prodi);

            $this->template_website->display('web/content/fakultasdetil', $data);
        }
        function satuankerja(){

        }
        function sarana(){

        }
        function karier(){
            $data = $this->data;
            $this->load->model('KarirModel', 'karir_model');

            $data['karir'] = $this->karir_model->get_by_id();
            $this->template_website->display('web/content/karier', $data);
        }
        function blog(){

        }
        function tracestudy(){

        }
        function galeri(){

          $this->template_website->display('web/content/galeri');
        }

        function kegiatan(){
            $data = $this->data;
            $this->load->model('EventModel', 'event_model');

            $data['kegiatan'] = $this->event_model->get_by_id();
            $this->template_website->display('web/content/listkegiatan', $data);
        }
    }
