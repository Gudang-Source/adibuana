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

        function kategori($aksi='index', $id=null){
            $data = ['Makanan', 'Minuman'];

            switch ($aksi) {
                case 'index':
                   $this->template_admin->display('admin/content/indexkategori', $data);
                    break;
                case 'tambah':
                   $this->template_admin->display('admin/content/tambahkategori', $data);
                    break;
                case 'edit':
                   $this->template_admin->display('admin/content/indexkategori', $data);
                    break;
                case 'update':
                    break;
                case 'delete':

                    break;
                default:
                    # code...
                    break;
            }

            
        }
    }