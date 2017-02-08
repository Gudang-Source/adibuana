<?php
    class Admin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Template_Admin', 'template_admin');
            $this->load->library('image_upload');
        }
        function index(){
            $data = [];
            if($this->session->userdata('username')){
                 $this->template_admin->display('admin/content/index', $data);
            }else{
                $this->load->view('web/content/login');
            }
           
        }

        function change($aksi='index', $id=null){
            $data = $this->data;
            check_login();
            $this->load->model('UserModel', 'user_model');
            switch ($aksi) {
                case 'index':
                    $this->template_admin->display('admin/content/editpassword', $data);
                    break;
                case 'update':
                    if($this->input->post('password') == $this->input->post('password2')){
                         $change = $this->user_model->change_passowrd($this->input->post());
                        if($change){
                            $this->session->set_flashdata('success', 'Sukses Merubah Data');
                        }else{
                            $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                        }
                    }else{
                        $this->session->set_flashdata('warning', 'Password Tidak Sama');
                    }
                    redirect('admin/change');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function sekilas($aksi='index', $id=null){
            check_login();
            $this->load->model('PageModel', 'page_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('PGE_DISP');
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
                    $this->check_access('PGE_CRT');
                    $data = $this->page_model->insert($this->input->post());
                    if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                    redirect(base_url().'admin/sekilas');
                    break;
                case 'update':
                    $this->check_access('PGE_UPDT');
                    $data = $this->page_model->update($id, $this->input->post());
                    if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/sekilas');
                    break;
                case 'delete':
                    $this->check_access('PGE_DEL');
                    $delete = $this->page_model->delete($id);
                    if ($delete) {
                        redirect(base_url().'admin/sekilas');
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
                    $this->check_access('PGE_DISP');
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
                    $this->check_access('PGE_CRT');
                    $data = $this->page_model->insert($this->input->post());
                    if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    
                    }
                    redirect(base_url().'admin/unit');
                    break;
                case 'update':
                    $this->check_access('PGE_UPDT');
                    $data = $this->page_model->update($id, $this->input->post());
                    if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/unit');
                    break;
                case 'delete':
                    $this->check_access('PGE_DEL');
                    $delete = $this->page_model->delete($id);
                    if ($delete) {
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/unit');
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
                    $this->check_access('FCL_DISP');
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
                    $data['fasilitas'] = $this->facility_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editfasilitas',$data);
                    break;
                case 'insert':
                    $this->check_access('FCL_CRT');
                    $data = $this->facility_model->insert($this->input->post());
                    if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    
                    }
                    redirect(base_url().'admin/facility');
                    break;
                 case 'update':
                    $this->check_access('FCL_UPDT');
                    $data = $this->facility_model->update($id, $this->input->post());
                   if($data['success']){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/facility');
                    break;
                case 'delete':
                    $this->check_access('FCL_DEL');
                    $delete = $this->facility_model->delete($id);
                    if ($delete) {
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                        redirect(base_url().'admin/facility');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                         redirect(base_url().'admin/facility');
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
                    $this->check_access('FCL_DISP');
                    $data['fasilitasdetil'] = $this->facility_model->get_detil_fasilitas();
                    $this->template_admin->display('admin/content/indexfasilitasdetil', $data);
                    break;
                case 'view':
                    $data['fasilitas'] = $this->facility_model->get_detail_by_id($id);
                    $this->template_admin->display('admin/content/viewfasilitasdetail',$data);
                    break;
                case 'add':
                    $data['fasilitas'] = $this->facility_model->get_all() ;
                    $this->template_admin->display('admin/content/addfasilitasdetail', $data);
                    break;
                case 'edit':
                    $data['fasilitas'] = $this->facility_model->get_detail_by_id($id);
                    $this->template_admin->display('admin/content/editfasilitasdetail',$data);
                    break;
                case 'insert':
                    $this->check_access('FCL_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/facility/', $_FILES, 'pic', 'pict_');
                    $insert = $this->page_model->insert_detail($this->input->post(), $pict['filename']);
                    if ($insert) {
                        redirect(base_url().'admin/facility_detail');
                    }else{
                        redirect(base_url().'admin/facility_detail/add');
                    }
                    break;
                case 'update':
                    $this->check_access('FCL_UPDT');
                    $detail = $this->facility_model->get_detail_by_id($id);
                   
                    $pict = $this->image_upload->update_image('assets/images/facility/', $_FILES, 'pic', 'pict_', $detail->picture);
                    $update = $this->facility_model->update_detail($id, $this->input->post(), $pict['filename']);
                    if ($update) {
                        redirect(base_url().'admin/facility_detail');
                    }else{
                        redirect(base_url().'admin/facility_detail/edit/'.$id);
                    }
                    break;
                case 'delete':
                    $this->check_access('FCL_DEL');
                    $detail = $this->facility_model->get_detail_by_id($id);
                    $delete = $this->facility_model->delete_detail($id);
                    if ($delete) {
                        unlink('assets/images/facility/'.$detail->picture);
                        redirect(base_url().'admin/facility_detail');
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
                    $this->check_access('KKN_DISP');
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
                    $this->check_access('FCT_DISP');
                    $data['area'] = $this->faculty_model->get_fakultas_area();
                    $this->template_admin->display('admin/content/indexfakultasarea', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfakultasarea');
                    break;
                case 'edit':
                    $data['area'] = $this->faculty_model->get_area_by_id($id);
                    $this->template_admin->display('admin/content/editareafakultas', $data);
                    break;
                case 'view':
                    $data['area'] = $this->faculty_model->get_area_by_id($id);
                    $this->template_admin->display('admin/content/viewfakultasarea', $data);
                    break;
                case 'insert':
                    $this->check_access('FCT_CRT');
                    $insert = $this->faculty_model->insert_area($this->input->post());
                    if ($insert) {
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                    redirect(base_url().'admin/fakultas_area');
                    break;
                case 'update':
                    $this->check_access('FCT_UPDT');
                    $update = $this->faculty_model->update_area($id, $this->input->post());
                    if ($update) {
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/fakultas_area');
                    break;
                case 'delete':
                    $this->check_access('FCT_DEL');
                    $delete = $this->faculty_model->delete_area($id);
                    if ($delete) {
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/fakultas_area');
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
                    $this->check_access('FCT_DISP');
                    $data['tipe'] = $this->faculty_model->get_fakultas_tipe();
                    $this->template_admin->display('admin/content/indexfakultastipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addfakultastipe');
                    break;
                case 'edit':
                    $data['fakultas'] = $this->faculty_model->get_tipe_by_id($id);
                    $this->template_admin->display('admin/content/editfakultastipe', $data);
                    break;
                case 'view':
                    $data['fakultas'] = $this->faculty_model->get_tipe_by_id($id);
                    $this->template_admin->display('admin/content/viewfakultastipe', $data);
                    break;
                case 'insert':
                    $this->check_access('FCT_CRT');
                    $insert = $this->faculty_model->insert_tipe($this->input->post());
                    if ($insert) {
                         $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                         $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                    redirect(base_url().'admin/fakultas_tipe');
                    break;
                case 'update':
                    $this->check_access('FCT_UPDT');
                    $update = $this->faculty_model->update_tipe($id, $this->input->post());
                    if ($update) {
                         $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                         $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/fakultas_tipe');
                    break;
                case 'delete':
                    $this->check_access('FCT_DEL');
                    $delete = $this->faculty_model->delete_tipe($id);
                    if ($delete) {
                         $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                         $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/fakultas_tipe');
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
                    $this->check_access('FCT_DISP');
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/indexfakultas', $data);
                    break;
                case 'add':
                    $data['area'] = $this->faculty_model->get_fakultas_area();
                    $data['tipe'] = $this->faculty_model->get_fakultas_tipe();
                    $this->template_admin->display('admin/content/addfakultas', $data);
                    break;
                case 'edit':
                    $data['fakultas'] = $this->faculty_model->get_fakultas_by_id($id);
                    $data['area'] = $this->faculty_model->get_fakultas_area();
                    $data['tipe'] = $this->faculty_model->get_fakultas_tipe();
                    $this->template_admin->display('admin/content/editfakultas', $data);
                    break;
                case 'view':
                    $data['fakultas'] = $this->faculty_model->get_fakultas_by_id($id);
                    $this->template_admin->display('admin/content/viewfakultas', $data);
                    break;
                case 'insert':
                    $this->check_access('FCT_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/faculty/', $_FILES, 'pic', 'pict_');

                    $insert = $this->faculty_model->insert_fakultas($this->input->post(), $pict['filename']);
                    if($insert){
                        redirect(base_url().'admin/fakultas');
                    }
                    break;
                case 'update':
                    $this->check_access('FCT_UPDT');
                    $fakultas = $this->faculty_model->get_fakultas_by_id($id);
                   
                    $pict = $this->image_upload->update_image('assets/images/faculty/', $_FILES, 'pic', 'pict_', $fakultas->picture);
                    $update = $this->faculty_model->update_fakultas($id, $this->input->post(), $pict['filename']);
                    if($update){
                        redirect(base_url().'admin/fakultas');
                    }
                    break;
                case 'delete':
                    $this->check_access('FCT_DEL');
                    $delete = $this->faculty_model->delete_fakultas($id);

                    if($delete){
                        redirect(base_url().'admin/fakultas');
                    }
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
                    $this->check_access('FCT_DISP');
                    $data['course'] = $this->faculty_model->get_fakultas_course();
                    $this->template_admin->display('admin/content/indexfakultascourse', $data);
                    break;
                case 'add':
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/addfakultasprodi', $data);
                    break;
                case 'edit':
                    $data['jurusan'] = $this->faculty_model->get_course_by_id($id);
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/editfakultasprodi', $data);
                    break;
                case 'view':
                    $data['jurusan'] = $this->faculty_model->get_course_by_id($id);
                    $this->template_admin->display('admin/content/viewfakultasprodi', $data);
                    break;
                case 'insert':
                    $this->check_access('FCT_CRT');
                    $insert = $this->faculty_model->insert_course($this->input->post());
                    if ($insert) {
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                        redirect(base_url().'admin/faculty_course');
                    break;
                case 'update':
                    $this->check_access('FCT_UPDT');
                    $update = $this->faculty_model->update_course($id, $this->input->post());
                    if ($update) {
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/faculty_course');
                    break;
                case 'delete':
                    $this->check_access('FCT_DEL');
                    $delete = $this->faculty_model->delete_course($id);
                    if ($delete) {
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/faculty_course');
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
                    $this->check_access('FCT_DISP');
                    $data['detail'] = $this->faculty_model->get_fakultas_detail();
                    $this->template_admin->display('admin/content/indexfakultasdetil', $data);
                    break;
                case 'add':
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/addfakultasdetil', $data);
                    break;
                case 'edit':
                    $data['detail'] = $this->faculty_model->get_detail_by_id($id);
                    $data['fakultas'] = $this->faculty_model->get_fakultas();
                    $this->template_admin->display('admin/content/editfakultasdetil', $data);
                    break;
                case 'view':
                    $data['fakultas'] = $this->faculty_model->get_detail_by_id($id);
                    $this->template_admin->display('admin/content/viewfakultasdetil', $data);
                    break;
                case 'insert':
                    $this->check_access('FCT_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/faculty/', $_FILES, 'pic', 'pict_');

                    $insert = $this->faculty_model->insert_detail($this->input->post(), $pict['filename']);
                    if($insert){
                        redirect(base_url().'admin/fakultas_detail');
                    }
                    break;
                case 'update':
                    $this->check_access('FCT_UPDT');
                    $detail = $this->faculty_model->get_detail_by_id($id);
                   
                    $pict = $this->image_upload->update_image('assets/images/faculty/', $_FILES, 'pic', 'pict_', $detail->picture);
                    $update = $this->faculty_model->update_detail($id, $this->input->post(), $pict['filename']);
                    if($update){
                        redirect(base_url().'admin/fakultas_detail');
                    }
                    break;
                case 'delete':
                    $this->check_access('FCT_DEL');
                    $delete = $this->faculty_model->delete_detail($id);
                    if ($delete) {
                        redirect(base_url().'admin/fakultas_detail');
                    }
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
                    $this->check_access('NSM_DISP');
                    $data['tipe'] = $this->news_model->get_news_type();
                    $this->template_admin->display('admin/content/indexberitatipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addberitatipe');
                    break;
                case 'edit':
                    $data['tipe'] = $this->news_model->get_tipe_by_id($id);
                    $this->template_admin->display('admin/content/editberitatipe', $data);
                    break;
                case 'view':
                    $data['tipe'] = $this->news_model->get_tipe_by_id($id);
                    $this->template_admin->display('admin/content/viewberitatipe', $data);
                    break;
                case 'insert':
                    $this->check_access('NSM_CRT');
                    $insert = $this->news_model->insert_type($this->input->post());
                    if($insert){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data'); 
                    }
                    redirect(base_url().'admin/news_type');
                    break;
                case 'update':
                    $this->check_access('NSM_UPDT');
                    $update = $this->news_model->update_type($id, $this->input->post());
                    if($update){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/news_type');
                    break;
                case 'delete':
                    $this->check_access('NSM_DEL');
                    $delete = $this->news_model->delete_type($id);
                    if ($delete) {
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/news_type');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function news($aksi='index', $id=null){
            check_login();
            $this->load->model('NewsModel', 'news_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('NSM_DISP');
                    $data['news'] = $this->news_model->get_news();
                    $this->template_admin->display('admin/content/indexberita', $data);
                    break;
                case 'add':
                    $data['tipe'] = $this->news_model->get_news_type();
                    $this->template_admin->display('admin/content/addberita', $data);
                    break;
                case 'edit':
                    $data['tipe'] = $this->news_model->get_news_type();
                    $data['news'] = $this->news_model->get_news_by_id($id);
                    $this->template_admin->display('admin/content/editberita', $data);
                    break;
                case 'view':
                    $data['news'] = $this->news_model->get_news_by_id($id);
                    $this->template_admin->display('admin/content/viewberita', $data);
                    break;
                case 'insert':
                    $this->check_access('NSM_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/news/', $_FILES, 'pic', 'pict_');
                    $thumb = $this->image_upload->upload_image('assets/images/news/', $_FILES, 'thumb', 'thumb_');
                    $banner = $this->image_upload->upload_image('assets/images/news/', $_FILES, 'banner', 'banner_');

                    $insert = $this->news_model->insert_news($this->input->post(), $pict['filename'], $thumb['filename'], $banner['filename']);
                    if($insert){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                        redirect(base_url().'admin/news');
                    }else{
                        $this->session->set_flashdata('waning', 'Gagal Menambah Data');
                        redirect(base_url().'admin/news');
                    }
                    break;
                case 'update':
                    $this->check_access('NSM_UPDT');
                    $news = $this->news_model->get_news_by_id($id);
                   
                    $pict = $this->image_upload->update_image('assets/images/news/', $_FILES, 'pic', 'pict_', $news->picture);
                    $thumb = $this->image_upload->update_image('assets/images/news/', $_FILES, 'thumb', 'thumb_', $news->thumb);
                    $banner = $this->image_upload->update_image('assets/images/news/', $_FILES, 'banner', 'banner_', $news->bpict);

                    $update = $this->news_model->update_news($id, $this->input->post(), $pict['filename'], $thumb['filename'], $banner['filename']);
                    if($update){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                        redirect(base_url().'admin/news');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                        redirect(base_url().'admin/news/');
                    }
                    break;

                case 'delete':
                    $this->check_access('NSM_DEL');
                    $news = $this->news_model->get_news_by_id($id);
                    $delete = $this->news_model->delete_news($id);
                    if($delete){
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                        unlink('assets/images/news/'.$news->picture);
                        unlink('assets/images/news/'.$news->thumb);
                        unlink('assets/images/news/'.$news->bpict);
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');
                    }
                    redirect(base_url().'admin/news');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function news_detail($aksi='index', $id=null){
            check_login();
            $this->load->model('NewsModel', 'news_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('NSM_DISP');
                    $data['detail'] = $this->news_model->get_detail_news();
                    $this->template_admin->display('admin/content/indexberitadetail', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function event($aksi='index', $id=null){
            check_login();

            $this->load->model('EventModel', 'event_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('EVE_DISP');
                    $data['event'] = $this->event_model->get_event();
                    $this->template_admin->display('admin/content/indexevent', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addevent');
                    break;
                case 'edit':
                    $data['event'] = $this->event_model->get_event_by_id($id);
                    $this->template_admin->display('admin/content/editevent', $data);
                    break;
                case 'view':
                     $data['event'] = $this->event_model->get_event_by_id($id);
                    $this->template_admin->display('admin/content/viewevent', $data);
                    break;
                case 'insert':
                    $this->check_access('EVE_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/event/', $_FILES, 'pic', 'pict_');
                    $thumb = $this->image_upload->upload_image('assets/images/event/', $_FILES, 'thumb', 'thumb_');
                    $banner = $this->image_upload->upload_image('assets/images/event/', $_FILES, 'banner', 'banner_');

                    $file = $this->image_upload->upload_file('assets/images/event/', $_FILES, 'file', 'event_file_');

                    $insert = $this->event_model->insert($this->input->post(), $pict['filename'], $thumb['filename'], $banner['filename'], $file['filename']);
                    if($insert){
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                    redirect(base_url().'admin/event');
                    break;  
                case 'update':
                    $this->check_access('EVE_UPDT');
                    $event = $this->event_model->get_event_by_id($id);
                   
                    $pict = $this->image_upload->update_image('assets/images/event/', $_FILES, 'pic', 'pict_', $event->picture);
                    $thumb = $this->image_upload->update_image('assets/images/event/', $_FILES, 'thumb', 'thumb_', $event->thumb);
                    $banner = $this->image_upload->update_image('assets/images/event/', $_FILES, 'banner', 'banner_', $event->bpict);

                    $file = $this->image_upload->update_file('assets/images/event/', $_FILES, 'file', 'event_file_', $event->file);

                    $update = $this->event_model->update($id, $this->input->post(), $pict['filename'], $thumb['filename'], $banner['filename'], $file['filename']);
                    if($update){
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/event');
                    break;
                case 'delete':
                    $this->check_access('EVE_DEL');
                    $event = $this->event_model->get_event_by_id($id);
                    $delete = $this->event_model->delete($id);
                    if($delete){
                        unlink('assets/images/event/'.$event->picture);
                        unlink('assets/images/event/'.$event->thumb);
                        unlink('assets/images/event/'.$event->bpict);
                        unlink('assets/images/event/'.$event->file);
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menghapus Data');   
                    }
                    redirect(base_url().'admin/event');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function event_detail($aksi='index', $id=null){
            check_login();
            $this->load->model('EventModel', 'event_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('EVE_DISP');
                    $data['detail'] = $this->event_model->get_detail_event();
                    $this->template_admin->display('admin/content/indexeventdetail', $data);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        function career($aksi='index', $id=null){
            check_login();
            $this->load->model('CareerModel', 'career_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('CARE_DISP');
                    $data['career'] = $this->career_model->get_career();
                    $this->template_admin->display('admin/content/indexcareer', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addcareer');
                    break;
                case 'edit':
                    $data['karir'] = $this->career_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editcareer', $data);
                    break;
                case 'view':
                    $data['karir'] = $this->career_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewcareer', $data);
                    break;
                case 'insert':
                    $this->check_access('CARE_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/career/', $_FILES, 'pic', 'pict_');
                    $thumb = $this->image_upload->upload_image('assets/images/career/', $_FILES, 'thumb', 'thumb_');

                    $insert = $this->career_model->insert($this->input->post(), $pict['filename'], $thumb['filename']);
                    if ($insert) {
                        redirect(base_url().'admin/career');
                    }else{
                        redirect(base_url().'admin/career/add');
                    }
                    break;
                case 'update':
                    $this->check_access('CARE_UPDT');
                    $karir = $this->career_model->get_by_id($id);
                    $pict = $this->image_upload->update_image('assets/images/career/', $_FILES, 'pic', 'pict_', $karir->picture);
                    $thumb = $this->image_upload->update_image('assets/images/career/', $_FILES, 'thumb', 'thumb_', $karir->thumb);
                    $update = $this->career_model->update($id, $this->input->post(), $pict['filename'], $thumb['filename']);
                    if ($update) {
                        redirect(base_url().'admin/career');
                    }else{
                        redirect(base_url().'admin/career/edit');
                    }
                    break;
                case 'delete':
                    $this->check_access('CARE_DEL');
                    $karir = $this->career_model->get_by_id($id);
                    $delete = $this->career_model->delete($id);
                    if ($delete) {
                        unlink('assets/images/career'.$karir->picture);
                        unlink('assets/images/career'.$karir->thumb);
                        redirect(base_url().'admin/career');
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function detail_career($aksi='index', $id=null){
            check_login();
            $this->load->model('CareerModel', 'career_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('CARE_DISP');
                    $data['detail'] = $this->career_model->get_detail_career();
                    $this->template_admin->display('admin/content/indexcareerdetail', $data);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        function gallery_cat($aksi='index', $id=null){
            check_login();
            $this->load->model('GalleryModel', 'gallery_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('GAL_DISP');
                    $data['cat_gal'] = $this->gallery_model->get_gallery_cat();
                    $this->template_admin->display('admin/content/indexgallerycat', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addkatagorigallery');
                    break;
                case 'edit':
                    $data['katagori'] = $this->gallery_model->get_cat_by_id($id);
                    $this->template_admin->display('admin/content/editgallerycat', $data);
                    break;
                case 'view':
                    $data['katagori'] = $this->gallery_model->get_cat_by_id($id);
                    $this->template_admin->display('admin/content/viewgallerycat', $data);
                    break;
                case 'insert':
                    $this->check_access('GAL_CRT');
                    $pict = $this->image_upload->upload_image('assets/images/gallery/', $_FILES, 'pic', 'gallery_cat_');
                    $insert = $this->gallery_model->insert_kategori($this->input->post(), $pict['filename']);
                    if ($insert) {
                        $this->session->set_flashdata('success', 'Sukses Menambah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Menambah Data');
                    }
                    redirect(base_url().'admin/gallery_cat');
                    break;
                case 'update':
                    $this->check_access('GAL_UPDT');
                    $katagori = $this->gallery_model->get_cat_by_id($id);

                    $pict = $this->image_upload->update_image('assets/images/gallery/', $_FILES, 'pic', 'gallery_cat_', $katagori->thumb);
                    $update = $this->gallery_model->update_katagori($id,$this->input->post(), $pict['filename']);
                    if ($update) {
                        $this->session->set_flashdata('success', 'Sukses Merubah Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Gagal Merubah Data');
                    }
                    redirect(base_url().'admin/gallery_cat');
                    break;
                case 'delete':
                    $this->check_access('GAL_DEL');
                    $katagori = $this->gallery_model->get_cat_by_id($id);
                    $delete = $this->gallery_model->delete_katagori($id);
                    if ($delete) {
                        unlink('assets/images/gallery'.$katagori->thumb);
                        $this->session->set_flashdata('success', 'Sukses Menghapus Data');
                    }else{
                        $this->session->set_flashdata('warning', 'Sukses Menghapus Data');
                    }
                    redirect(base_url().'admin/gallery_cat');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function gallery($aksi='index', $id=null){
            check_login();
            $this->load->model('GalleryModel', 'gallery_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('GAL_DISP');
                    $data['gallery'] = $this->gallery_model->get_gallery();
                    $this->template_admin->display('admin/content/indexgallery', $data);
                    break;
                case 'add':
                    $data['katagori'] = $this->gallery_model->get_gallery_cat();
                    $this->template_admin->display('admin/content/addgallery', $data);
                    break;
                case 'edit':
                    $data['katagori'] = $this->gallery_model->get_gallery_cat();
                    $data['gallery'] = $this->gallery_model->get_gallery_by_id($id);
                    $this->template_admin->display('admin/content/editgallery', $data);
                    break;
                case 'view':
                    $data['gallery'] = $this->gallery_model->get_gallery_by_id($id);
                    $this->template_admin->display('admin/content/viewgallery', $data);
                    break;
                case 'insert':
                    $this->check_access('GAL_CRT');
                    $id_katagori = $this->input->post('katagori');
                    $pict = $this->image_upload->upload_image('assets/images/gallery/'.$id_katagori.'/', $_FILES, 'pic', 'pict_');
                    $thumb = $this->image_upload->upload_image('assets/images/gallery/'.$id_katagori.'/', $_FILES, 'thumb', 'thumb_');

                    $insert = $this->gallery_model->insert($this->input->post(), $pict['filename'], $thumb['filename']);
                    if ($insert) {
                        redirect(base_url().'admin/gallery');
                    }else{
                        redirect(base_url().'admin/gallery/add');
                    }
                    break;
                case 'update':
                    $this->check_access('GAL_UPDT');
                    $gal = $this->gallery_model->get_gallery_by_id($id);
                    $pict = $this->image_upload->update_image('assets/images/gallery/'.$gal->id_cat.'/', $_FILES, 'pic', 'pict_', $gal->picture);
                    $thumb = $this->image_upload->update_image('assets/images/gallery/'.$gal->id_cat.'/', $_FILES, 'pic', 'thumb_', $gal->thumb);
                    $update = $this->gallery_model->update($id, $this->input->post(), $pict['filename'], $thumb['filename']);
                    if ($update) {
                        redirect(base_url().'admin/gallery');
                    }else{
                        redirect(base_url().'admin/gallery/edit');
                    }
                    break;
                case 'delete':
                    $this->check_access('GAL_DEL');
                    $gal = $this->gallery_model->get_gallery_by_id($id);
                    $delete = $this->gallery_model->delete($id);
                    if ($delete) {
                        unlink('assets/images/gallery'.$gal->picture);
                        unlink('assets/images/gallery'.$gal->thumb);
                        redirect(base_url().'admin/gallery');
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog_type($aksi='index', $id=null){
            check_login();
            $this->load->model('BlogModel', 'blog_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('BLG_DISP');
                    $data['tipe'] = $this->blog_model->get_blog_type();
                    $this->template_admin->display('admin/content/indexblogtipe', $data);
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addblogtipe');
                    break;
                case 'edit':
                    $data['tipe'] = $this->blog_model->get_type_by_id($id);
                    $this->template_admin->display('admin/content/editblogtipe', $data);
                    break;
                case 'view':
                    $data['tipe'] = $this->blog_model->get_type_by_id($id);
                    $this->template_admin->display('admin/content/viewblogtipe', $data);
                    break;
                case 'insert':
                    $this->check_access('BLG_CRT');
                    $insert = $this->blog_model->insert_tipe($this->input->post());
                    if ($insert) {
                        redirect(base_url().'admin/blog_type');
                    }else{
                        redirect(base_url().'admin/blog_type/add');
                    }
                    break;
                case 'update':
                    $this->check_access('BLG_UPDT');
                    $update = $this->blog_model->update_tipe($id, $this->input->post());
                    if ($update) {
                        redirect(base_url().'admin/blog_type');
                    }else{
                        redirect(base_url().'admin/blog_type/edit');
                    }
                    break;
                case 'delete':
                    $this->check_access('BLG_DEL');
                    $delete = $this->blog_model->delete_tipe($id);
                    if ($delete) {
                        redirect(base_url().'admin/blog_type');
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog($aksi='index', $id=null){
            check_login();
            $this->load->model('BlogModel', 'blog_model');
            switch ($aksi) {
                case 'index':
                    $this->check_access('BLG_DISP');
                    $data['blog'] = $this->blog_model->get_blog();
                    $this->template_admin->display('admin/content/indexblog', $data);  
                    break;
                case 'add':
                    $data['blog'] = $this->blog_model->get_blog_type();
                    $this->template_admin->display('admin/content/addblog', $data);
                    break;
                case 'edit':
                    $data['tipe'] = $this->blog_model->get_blog_type();
                    $data['blog'] = $this->blog_model->get_blog_by_id($id);
                    $this->template_admin->display('admin/content/editblog', $data);
                    break;
                case 'view':
                    $data['blog'] = $this->blog_model->get_blog_by_id($id);
                    $this->template_admin->display('admin/content/viewblog', $data);
                    break;
                case 'insert':
                    $this->check_access('BLG_CRT');
                    $insert = $this->blog_model->insert_blog($this->input->post());
                    if ($insert) {
                        redirect(base_url().'admin/blog');
                    }else{
                        redirect(base_url().'admin/blog/add');
                    }
                    break;
                case 'update':
                    $this->check_access('BLG_UPDT');
                    $update = $this->blog_model->update_blog($id, $this->input->post());
                    if ($update) {
                        redirect(base_url().'admin/blog');
                    }else{
                        redirect(base_url().'admin/blog/edit');
                    }
                    break;
                case 'delete':
                    $this->check_access('BLG_DEL');
                    $delete = $this->blog_model->delete_blog($id);
                    if ($delete) {
                        redirect(base_url().'admin/blog');
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        function slider($aksi='index', $id=null){
            check_login();
            $this->load->model('SliderModel', 'slider_model');
            switch ($aksi) {
                case 'index':
                    $data['slider'] = $this->slider_model->get_all();
                    $this->template_admin->display('admin/content/indexslider', $data); 
                    break;
                case 'add':
                    $this->template_admin->display('admin/content/addslider'); 
                    break;
                case 'edit':
                    $data['slider'] = $this->slider_model->get_by_id($id);
                    $this->template_admin->display('admin/content/editslider', $data); 
                    break;
                case 'view':
                    $data['slider'] = $this->slider_model->get_by_id($id);
                    $this->template_admin->display('admin/content/viewslider', $data);
                    break;
                case 'insert':
                    $pict = $this->image_upload->upload_image('assets/images/slider/', $_FILES, 'pic', 'pict_');
                    $insert = $this->slider_model->insert($this->input->post(), $pict['filename']);
                    if ($insert) {
                        redirect(base_url().'admin/slider');
                    }else{
                        redirect(base_url().'admin/slider/add');
                    }
                    break;
                case 'update':
                    $slider = $this->slider_model->get_by_id($id);
                    $pict = $this->image_upload->update_image('assets/images/slider/', $_FILES, 'pic', 'pict_', $slider->picture);

                    $update = $this->slider_model->update($id, $this->input->post(), $pict['filename']);
                    if ($update) {
                        redirect(base_url().'admin/slider');
                    }
                    break;
                case 'delete':
                    $slider = $this->slider_model->get_by_id($id);
                    $delete = $this->slider_model->delete($id);
                    if ($delete) {
                        unlink('assets/images/slider/'.$slider->picture);
                        redirect(base_url().'admin/slider');
                    }
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
                            'username'=>$login['data']->username,
                            'id_user'=>$login['data']->id
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

        function check_access($access){
            $status_access = FALSE;
            $user = $this->db->get_where('adi_user', ['username'=>$this->session->userdata('username')])->row();
            $application = explode(PHP_EOL, $user->application);
            foreach ($application as $appl) {
                if($appl == $access){
                    $status_access = TRUE;
                }
            }
            if(!$status_access){
                die($this->load->view('admin/content/error_403', '', TRUE));
            }
        }

        function logout(){
            check_login();
            $this->session->sess_destroy();
            redirect(base_url().'admin');
        }
    }