<?php
    class Admin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Template_Admin', 'template_admin');
        }
        function index(){
            $data = [];
            if($this->session->userdata('username')){
                 $this->template_admin->display('admin/content/index', $data);
            }else{
                $this->load->view('web/content/login');
            }
           
        }

        function sekilas($aksi='index', $id=null){
            check_login();
            $this->load->model('PageModel', 'page_model');
            switch ($aksi) {
                case 'index':
                    $data['sekilas'] = $this->page_model->get_page('E_02');
                    $this->template_admin->display('admin/content/indexsekilas',$data);
                    break;
                case 'view':
                    $data['sekilas'] = $this->page_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewsekilas',$data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addsekilas');
                    break;
                case 'edit':
                    $data['sekilas'] = $this->page_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editsekilas',$data);
                    break;
                case 'insert':
                    $data = $this->page_model->insert($this->input->post());
                    if($data['success']){

                    }else{
                        
                    }
                    break;
                case 'update':
                    $data = $this->page_model->update($id, $this->input->post());
                    if($data['success']){
                        
                    }else{

                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function unit($aksi='index', $id=null){
            check_login();
            $this->load->model('PageModel', 'page_model');
            switch ($aksi) {
                case 'index':
                    $data['unit'] = $this->page_model->get_page('E_12');
                    $this->template_admin->display('admin/content/indexunit', $data);
                    break;
                case 'view':
                    $data['unit'] = $this->page_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewunit',$data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addunit');
                    break;
                case 'edit':
                    $data['unit'] = $this->page_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editunit',$data);
                    break;
                case 'insert':
                    $data = $this->page_model->insert($this->input->post());
                    if($data){

                    }else{
                        
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function facility($aksi='index', $id=null){
            check_login();
            $this->load->model('FacilityModel', 'facility_model');
            switch ($aksi) {
                case 'index':
                    $data['fasilitas'] = $this->facility_model->get_all();
                    $this->template_admin->display('admin/content/indexfasilitas', $data);
                    break;
                case 'view':
                    $data['fasilitas'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewfasilitas',$data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfasilitas');
                    break;
                case 'edit':
                    $data['unit'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editfasilitas',$data);
                    break;
                case 'insert':
                    $data = $this->page_model->insert($this->input->post());
                    if($data){

                    }else{
                        
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function facility_detail($aksi='index', $id=null){
            check_login();
            $this->load->model('FacilityModel', 'facility_model');
            switch ($aksi) {
                case 'index':
                    $data['fasilitasdetil'] = $this->facility_model->get_detil_fasilitas();
                    $this->template_admin->display('admin/content/indexfasilitasdetil', $data);
                    break;
                case 'view':
                    $data['fasilitas'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewfasilitas',$data);
                    break;
                case 'add':
                    $data['fasilitas'] = $this->facility_model->get_all();
                    $this->template_admin->display('admin/content/addfasilitasdetail', $data);
                    break;
                case 'edit':
                    $data['unit'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editfasilitas',$data);
                    break;
                case 'insert':
                    $data = $this->page_model->insert($this->input->post());
                    if($data){

                    }else{
                        
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }


        function kkn($aksi='index', $id=null){
            check_login();
            $this->load->model('KknModel', 'kkn_model');
            switch ($aksi) {
                case 'index':
                    $data['kkn'] = $this->kkn_model->get_all();
                    $this->template_admin->display('admin/content/indexkkn', $data);
                    break;
                case 'view':
                    $data['kkn'] = $this->kkn_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewkkn', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfasilitas');
                    break;
                case 'edit':
                    $data['unit'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editfasilitas',$data);
                    break;
                case 'insert':
                    $data = $this->page_model->insert($this->input->post());
                    if($data){

                    }else{
                        
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function fakultas_area($aksi='index', $id=null){
            check_login();
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    $data['area'] = $this->faculty_model->get_fakultas_area();
                    $this->template_admin->display('admin/content/indexfakultasarea', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfakultasarea');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function fakultas_tipe($aksi='index', $id=null){
            check_login();
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    $data['tipe'] = $this->faculty_model->get_fakultas_tipe();
                    $this->template_admin->display('admin/content/indexfakultastipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfakultastipe');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function fakultas($aksi='index', $id=null){
            check_login();
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/indexfakultas', $data);
                    break;
                case 'add':
                    $data['area'] = $this->faculty_model->get_fakultas_area();
                    $data['tipe'] = $this->faculty_model->get_fakultas_tipe();
                    $this->template_admin->display('admin/content/addfakultas', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function faculty_course($aksi='index', $id=null){
            check_login();
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    $data['course'] = $this->faculty_model->get_fakultas_course();
                    $this->template_admin->display('admin/content/indexfakultascourse', $data);
                    break;
                case 'add':
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/addfakultasprodi', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function fakultas_detail($aksi='index', $id=null){
            check_login();
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    $data['detail'] = $this->faculty_model->get_fakultas_detail();
                    $this->template_admin->display('admin/content/indexfakultasdetil', $data);
                    break;
                case 'add':
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/addfakultasdetil', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function news_type($aksi='index', $id=null){
            check_login();
            $this->load->model('NewsModel', 'news_model');
            switch ($aksi) {
                case 'index':
                    $data['tipe'] = $this->news_model->get_news_type();
                    $this->template_admin->display('admin/content/indexberitatipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addberitatipe');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function news($aksi='index', $id=null){
            $this->load->model('NewsModel', 'news_model');
            switch ($aksi) {
                case 'index':
                    $data['news'] = $this->news_model->get_news();
                    $this->template_admin->display('admin/content/indexberita', $data);
                    break;
                case 'add':
                    $data['tipe'] = $this->news_model->get_news_type();
                    $this->template_admin->display('admin/content/addberita', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function news_detail($aksi='index', $id=null){
            $this->load->model('NewsModel', 'news_model');
            switch ($aksi) {
                case 'index':
                    $data['detail'] = $this->news_model->get_detail_news();
                    $this->template_admin->display('admin/content/indexberitadetail', $data);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        function event($aksi='index', $id=null){
            $this->load->model('EventModel', 'event_model');
            switch ($aksi) {
                case 'index':
                    $data['event'] = $this->event_model->get_event();
                    $this->template_admin->display('admin/content/indexevent', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addevent');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function event_detail($aksi='index', $id=null){
            $this->load->model('EventModel', 'event_model');
            switch ($aksi) {
                case 'index':
                    $data['detail'] = $this->event_model->get_detail_event();
                    $this->template_admin->display('admin/content/indexeventdetail', $data);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        function career($aksi='index', $id=null){
            $this->load->model('CareerModel', 'career_model');
            switch ($aksi) {
                case 'index':
                    $data['career'] = $this->career_model->get_career();
                    $this->template_admin->display('admin/content/indexcareer', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addcareer');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function detail_career($aksi='index', $id=null){
            $this->load->model('CareerModel', 'career_model');
            switch ($aksi) {
                case 'index':
                    $data['detail'] = $this->career_model->get_detail_career();
                    $this->template_admin->display('admin/content/indexcareerdetail', $data);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        function gallery_cat($aksi='index', $id=null){
            $this->load->model('GalleryModel', 'gallery_model');
            switch ($aksi) {
                case 'index':
                    $data['cat_gal'] = $this->gallery_model->get_gallery_cat();
                    $this->template_admin->display('admin/content/indexgallerycat', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addkatagorigallery');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function gallery($aksi='index', $id=null){
            $this->load->model('GalleryModel', 'gallery_model');
            switch ($aksi) {
                case 'index':
                    $data['gallery'] = $this->gallery_model->get_gallery();
                    $this->template_admin->display('admin/content/indexgallery', $data);
                    break;
                case 'add':
                    $data['katagori'] = $this->gallery_model->get_gallery_cat();
                    $this->template_admin->display('admin/content/addgallery', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog_type($aksi='index', $id=null){
            $this->load->model('BlogModel', 'blog_model');
            switch ($aksi) {
                case 'index':
                    $data['tipe'] = $this->blog_model->get_blog_type();
                    $this->template_admin->display('admin/content/indexblogtipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addblogtipe');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog($aksi='index', $id=null){
            $this->load->model('BlogModel', 'blog_model');
            switch ($aksi) {
                case 'index':
                    $data['blog'] = $this->blog_model->get_blog();
                    $this->template_admin->display('admin/content/indexblog', $data);  
                    break;
                case 'add':
                    $data['blog'] = $this->blog_model->get_blog_type();
                    $this->template_admin->display('admin/content/addblog', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }
        function login(){
            $this->load->model('UserModel', 'user_model');
            //ajax login
            if($this->input->is_ajax_request()){
                if($this->session->userdata('username')){
                    echo json_encode(['success'=>false, 'message'=>'Anda sudah login']);
                }else{
                    $login = $this->user_model->login($this->input->post());
                    if($login['success']){
                        $new_session = [
                            'username'=>$login['data']->username
                        ];
                        $this->session->set_userdata($new_session);
                        echo json_encode(['success'=>true]);
                    }else{
                        echo json_encode(['success'=>false, 'message'=>'Username atau Password anda salah']);
                    }
                }
            }else{
                echo "Not Allowed";
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect(base_url().'admin');
        }
    }