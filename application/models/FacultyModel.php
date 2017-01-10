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
     }