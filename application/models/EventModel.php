<?php
     class EventModel extends CI_Model{
         function index(){

         }
         function get_by_slug($id){

         }
         function get_by_id(){
            $page = $this->db->select('*')
                    ->from('adi_event')
                    ->order_by('post_date', 'DESC')
                    ->limit(10)
                    ->offset(0);
            $page = $page->get()->result();
            return $page;

         }
         function insert(){

         }
         function update($id){

         }
         function delete($id){

         }
     }