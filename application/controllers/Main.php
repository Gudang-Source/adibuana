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

            $this->template_website->display('web/content/index', $data);
        }


        function beritadanpengumuman($slug, $id){

        }

        function sekilas($slug, $id){
            $this->load->model('PageModel', 'page_model');

            $data['page'] = $this->page_model->get_by_id($id);
            $this->template_website->display('web/content/sekilas', $data);
        }
        function areafakultas($slug, $id){


              $this->template_website->display('web/content/areafakultas');
        }
        function detilfakultas(){
            $this->template_website->display('web/content/fakultasdetil');
        }
        function satuankerja(){

        }
        function sarana(){

        }
        function karier(){

        }
        function blog(){

        }
        function tracestudy(){

        }
        function galeri(){

          $this->template_website->display('web/content/galeri');
        }

    }
