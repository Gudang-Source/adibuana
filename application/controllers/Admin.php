<?php
    class Admin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Template_Admin', 'template_admin');
        }
        function index(){
            $data = [];
            $this->template_admin->display('admin/content/index', $data);
        }

        function sekilas($aksi='index', $id=null){
            switch ($aksi) {
                case 'index':
                    $this->template_admin->display('admin/content/indexsekilas');
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addsekilas');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function berita($aksi='index', $id=null){
            switch ($aksi) {
                case 'index':
                    $this->template_admin->display('admin/content/indexberita');
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addberita');
                    break;
                default:
                    # code...
                    break;
            }
        }
    }