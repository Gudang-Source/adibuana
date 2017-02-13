<?php
    class UserModel extends CI_Model{
        function login($user){

            $password_hash = md5(serialize($user['p_password']));
            $this->db->select('*')
                    ->from('adi_user')
                    ->where(['username'=>$user['p_username'], 'passwordhash'=>$password_hash, 'status'=>'active']);

            $login = $this->db->get();
            if($login->num_rows() == 1){
                return ['success'=>true, 'data'=>$login->row()];
            }else{
                return ['success'=>false];
            }
        }
        function get_all(){
            return $this->db->get('adi_user')->result();
        }
        function get_by_id($id){
            $user = $this->db->get_where('adi_user', ['id'=>$id])->row();
            return $user;
        }
        function insert($user, $thumb){
            $application = implode(" ", $user['privilege']);
            $data = [
                'id'=>rand(1, 100).date("dmYHis"),
                'username'=>$user['username'],
                'name'=>$user['name'],
                'passwordhash'=>md5(serialize($user['password'])),
                'application'=>$application,
                'email'=>$user['email'],
                'pic_user'=>$thumb,
                'post_by'=>$this->session->userdata('username'),
                'post_date'=>date('Y-m-d H:i:s')
            ];

            $insert = $this->db->insert('adi_user', $data);
            return $insert;
        }
        function update($id, $user, $thumb){
            $application = implode(" ", $user['privilege']);

            $data = [
                'username'=>$user['username'],
                'name'=>$user['name'],
                'passwordhash'=>md5(serialize($user['password'])),
                'application'=>$application,
                'email'=>$user['email'],
                'pic_user'=>$thumb,
                'post_by'=>$this->session->userdata('username'),
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            $where = [
                'id'=>$id
            ];

            return $this->db->update('adi_user', $data, $where);
        }
        function delete($id){
            $delete = $this->db->delete('adi_user', ['id'=>$id]);
            return $delete;
        }
    }