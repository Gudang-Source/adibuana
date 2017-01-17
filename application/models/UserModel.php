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
    }