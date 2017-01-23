<?php
     class PageModel extends CI_Model{
         function get_all(){
             return $this->db->get('adi_page')->result();
         }
         function get_by_slug($id){

         }
         function get_page($page){
             $this->db->select('adi_page.*, adi_menu.menu_eng, adi_user.username')
                        ->from('adi_page')
                        ->join('adi_menu', 'adi_menu.id = adi_page.page')
                        ->join('adi_user', 'adi_user.id = adi_page.post_by')
                        ->where('page', $page);
            return $this->db->get()->result();
         }
         function get_by_id($id){
            $page = $this->db->select('*')
                    ->from('adi_page')
                    ->where('id', $id);
            $page = $page->get()->row();
            return $page;

         }
         function insert($page){
            $this->load->library('image_upload');
            $path_image = 'assets/images/page';

            $old_data = $this->get_by_id($id);

            $data = [
                'title_ina'=>$page['title_ina'],
                'title_eng'=>$page['title_eng'],
                'content_ina'=>$page['konten_ina'],
                'content_eng'=>$page['konten_eng'],
                'post_data'=>date('Y-m-d H:i:s')
            ];

            $upload = $this->image_upload->upload_image($path_image, $_FILES, 'foto_sekilas');
            if($upload['success']){

                $data['picture'] = $upload['filename'];
            }

            $where = ['id'=>$id];

            $this->db->update('adi_page', $data, $where);
            return ['success'=>true];
         }
         function update($id, $page){
            $this->load->library('image_upload');
            $path_image = 'assets/images/page';

            $old_data = $this->get_by_id($id);

            $data = [
                'title_ina'=>$page['title_ina'],
                'title_eng'=>$page['title_eng'],
                'content_ina'=>$page['konten_ina'],
                'content_eng'=>$page['konten_eng'],
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            $upload = $this->image_upload->upload_image($path_image, $_FILES, 'foto_sekilas');
            if($upload['success']){
                if($old_data->picture != ''){
                    unlink('assets/images/page/'.$old_data->picture);
                }
                $data['picture'] = $upload['filename'];
            }

            $where = ['id'=>$id];

            $this->db->update('adi_page', $data, $where);
            return ['success'=>true];
         }
         function delete($id){
             
         }
     }
