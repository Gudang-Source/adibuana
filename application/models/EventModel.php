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

         function get_event(){
            $this->db->select('adi_event.*, adi_user.name')
                    ->from('adi_event')
                    ->join('adi_user', 'adi_event.post_by = adi_user.id');
            $event = $this->db->get()->result();
            return $event;
         }

         function get_detail_event(){
            $this->db->select('adi_event_detail.*, adi_user.name')
                    ->from('adi_event_detail')
                    ->join('adi_user', 'adi_event_detail.post_by = adi_user.id');
            $detail = $this->db->get()->result();
            return $detail;
         }
     }