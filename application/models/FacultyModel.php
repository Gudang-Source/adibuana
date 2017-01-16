<?php
     class FacultyModel extends CI_Model{
         function index(){

         }
         function get_by_slug($id){

         }
         function get_by_id($id){
            $fakultas = $this->db->select('*')
                    ->from('adi_faculty_course')
                    ->where('id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;

         }
         function insert(){

         }
         function update($id){

         }
         function delete($id){

         }

         function get_fakultas_area(){
            $this->db->select('adi_faculty_area.*, adi_user.name')
                    ->from('adi_faculty_area')
                    ->join('adi_user', 'adi_faculty_area.post_by = adi_user.id');
            $area = $this->db->get()->result();
            return $area;
         }

         function get_fakultas_tipe(){
            $this->db->select('adi_faculty_type.*, adi_user.name')
                    ->from('adi_faculty_type')
                    ->join('adi_user', 'adi_faculty_type.post_by = adi_user.id');
            $tipe = $this->db->get()->result();
            return $tipe;
         }

         function get_fakultas(){
            $this->db->select('adi_faculty.*, adi_user.name, adi_faculty_area.area_eng')
                    ->from('adi_faculty')
                    ->join('adi_user', 'adi_faculty.post_by = adi_user.id')
                    ->join('adi_faculty_area', 'adi_faculty.id_area = adi_faculty_area.id');
            $fakultas = $this->db->get()->result();
            return $fakultas;
         }

         function get_fakultas_course(){
            $this->db->select('adi_faculty_course.*, adi_faculty.title_eng as nama_fakultas, adi_user.name')
                    ->from('adi_faculty_course')
                    ->join('adi_faculty', 'adi_faculty_course.id_fac = adi_faculty.id')
                    ->join('adi_user', 'adi_faculty_course.post_by = adi_user.id');
            $course = $this->db->get()->result();
            return $course;
         }
     }