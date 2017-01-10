<?php
     class PageModel extends CI_Model{
         function index(){

         }
         function get_by_slug($id){

         }
         function get_by_id($id){
            $page = $this->db->select('*')
                    ->from('adi_page')
                    ->where('id', $id);
            $page = $page->get()->row();
            return $page;

         }
         function insert(){

         }
         function update($id){

         }
         function delete($id){

         }
     }
