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
         function get_agenda_terbaru(){
              $page = $this->db->select('*')
                    ->from('adi_event')
                    ->order_by('post_date', 'DESC')
                    ->limit(8)
                    ->offset(0);
            $page = $page->get()->result();
            return $page;
         }
         
         function get_event($limit = 9999999, $offset = 0){
            $this->db->select('adi_event.*, adi_user.name')
                    ->from('adi_event')
                    ->join('adi_user', 'adi_event.post_by = adi_user.id')
                    ->order_by('adi_event.post_date', 'desc')
                    ->limit($limit)
                    ->offset($offset);
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

         function get_event_by_id($id){
            $event = $this->db->select('*')
                    ->from('adi_event')
                    ->where('adi_event.id', $id);
            $event = $event->get()->row();
            return $event;
         }

         function get_most_viewed(){
          $event = $this->db->select('*')
                  ->from('adi_event')
                  ->order_by('adi_event.hit', 'desc')
                  ->limit(5);
          $event = $event->get()->result();
          return $event;
         }

         function insert($event, $picture, $thumb, $bpict, $file){
            $data = [
                'id'=>rand(1, 100).date("dmYHis"),
                'author'=>$event['author'],
                'start_date'=>date_to_date_time($event['start_date']),
                'end_date'=>date_to_date_time($event['end_date']),
                'title_ina'=>$event['title_ina'],
                'title_eng'=>$event['title_eng'],
                'lead_ina'=>$event['lead_ina'],
                'lead_eng'=>$event['lead_eng'],
                'content_ina'=>$event['konten_ina'],
                'content_eng'=>$event['konten_eng'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
            if($picture != ""){
                $data['picture'] = $picture;
            }
            if($thumb != ""){
                $data['thumb'] = $thumb;
            }
            if($bpict != ""){
                $data['bpict'] = $bpict;
            }
            if($file != ""){
                $data['file'] = $file;
            }

            $insert = $this->db->insert("adi_event", $data);
            return $insert;
         }

         function update($id, $event, $picture, $thumb, $bpict, $file){
              $data = [
                'author'=>$event['author'],
                'start_date'=>date_to_date_time($event['start_date']),
                'end_date'=>date_to_date_time($event['end_date']),
                'title_ina'=>$event['title_ina'],
                'title_eng'=>$event['title_eng'],
                'lead_ina'=>$event['lead_ina'],
                'lead_eng'=>$event['lead_eng'],
                'content_ina'=>$event['konten_ina'],
                'content_eng'=>$event['konten_eng'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
            if($picture != ""){
                $data['picture'] = $picture;
            }
            if($thumb != ""){
                $data['thumb'] = $thumb;
            }
            if($bpict != ""){
                $data['bpict'] = $bpict;
            }
            if($file != ""){
                $data['file'] = $file;
            }

            $where = [
                'id'=>$id
            ];
            $update = $this->db->update("adi_event", $data, $where);
            return $update;
         }

         function delete($id){
          $where = ['id'=>$id];

          $delete = $this->db->delete('adi_event',$where);
          return $delete;
         }
     }