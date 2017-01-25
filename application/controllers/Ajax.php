<?php
    class Ajax extends CI_Controller{
        function __construct(){
            parent::__construct();
            if(!$this->input->is_ajax_request()){
                echo json_encode(['success'=>false, 'message'=>'Gak oleh akses']);
            }   
        }
        function get_fakultas(){
            $this->load->model('FacultyModel', 'faculty_model');
            $prodi = $this->input->get('prodi');

            $faculty = $this->faculty_model->get_faculty_by_course($prodi);
            echo json_encode(['success'=>true, 'data'=>$faculty]);
        }

        function get_nomor_urut_kkn(){
            $this->load->model('KknModel', 'kkn_model');
            $no_urut = $this->kkn_model->get_nomor_urut($this->input->get('prodi'));
            $next_urut = $no_urut->nourut +1;
            echo json_encode(['success'=>true, 'data'=>$next_urut]);
            
        }
        function cek_nim_kkn(){
            $this->load->model('KknModel', 'kkn_model');
            $nim = $this->input->get('nim');
            $result = $this->kkn_model->cek_nim($nim);

            echo json_encode(['success'=>$result]);
        }
    }