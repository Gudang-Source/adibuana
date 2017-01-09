<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('NamaFileModel', 'nama_file_model');
            $this->load->model('PortofolioModel', 'portofolio_model');
            $this->load->library('Template_Website', 'template_website');

            $this->data['page'] = '';
            $this->data['title'] = 'Sintec - Smanip Information Technology';
            
        }

        function index(){
            $data = $this->data;
            $data['page']  = 'index';
            $contoh = $this->nama_file_model->get_all();
            $this->template_website->display('web/content/index', $data);
            
        }

        function portofolio($aksi='index', $id=null){
            $data = $this->data;
            switch ($aksi) {
                case 'index':
                    $data['title'] = 'Portofolio';
                    $data['portofolio'] = $this->portofolio_model->get_all();
                    $this->template_website->displaY('web/content/indexportofolio', $data);
                    break;
                case 'detail':
                    $data['portofolio'] = $this->portofolio_model->get_portofolio_by_slug($id);
                    $data['title'] = 'Detail Portofolio - '.$data['portofolio']->judul_portofolio.'';
                    $this->template_website->displaY('web/content/detailportofolio', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function strukturorganisasi($aksi='index', $id=null){
            $data = $this->data;
            switch ($aksi) {
                case 'index':
                    $this->template_website->display('web/content/indexkepengurusan');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function sejarah(){


            $this->template_website->display('web/content/sejarah');
        }

        function pembina(){

            
            $this->template_website->display('web/content/pembina');
        }

        function alumni(){

            $this->template_website->display('web/content/alumni');
        }
    }