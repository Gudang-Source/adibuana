<?php
    class Image_Upload {
        function __construct(){
            $this->ci =&get_instance();
        }

        function upload_image($path, $file, $index, $prefix=""){
		    $extension = pathinfo($file[$index]['name'],PATHINFO_EXTENSION);
		    $new_file_name = $prefix.strtoupper(md5(uniqid(rand(), true))).'.'.$extension;
            
            $config = array(
                    'allowed_types' => 'jpg|jpeg|png',
                    'file_name' =>$new_file_name,
                    'upload_path' => $path,
                    'overwrite'=>TRUE
            );
		    $this->ci->load->library('upload');
            $this->ci->upload->initialize($config);

		    $uploading = $this->ci->upload->do_upload($index);
            if($uploading){
                return ['success'=>true, 'filename'=>$new_file_name];
            }else{
                return ['success'=>false, 'filename'=>''];
            }
        }
        function update_image($path, $file, $index, $prefix, $old_file_name){
		    $extension = pathinfo($file[$index]['name'],PATHINFO_EXTENSION);
		    $new_file_name = $prefix.strtoupper(md5(uniqid(rand(), true))).'.'.$extension;

            $config = array(
                    'allowed_types' => 'jpg|jpeg|png',
                    'file_name' =>$new_file_name,
                    'upload_path' => $path,
                    'overwrite'=>TRUE
            );
		    $this->ci->load->library('upload');
            $this->ci->upload->initialize($config);
		    $uploading = $this->ci->upload->do_upload($index);
            if($uploading){
                if($old_file_name != "" && file_exists($path.$old_file_name)){
                    unlink($path.$old_file_name);
                }
                return ['success'=>true, 'filename'=>$new_file_name];
            }else{
                return ['success'=>false, 'filename'=>''];
            }
        }

        function upload_file($path, $file, $index, $prefix=""){
            $extension = pathinfo($file[$index]['name'],PATHINFO_EXTENSION);
            $new_file_name = $prefix.strtoupper(md5(uniqid(rand(), true))).'.'.$extension;
            
            $config = array(
                    'allowed_types' => 'pdf|zip|doc|rar',
                    'file_name' =>$new_file_name,
                    'upload_path' => $path,
                    'overwrite'=>TRUE
            );
            $this->ci->load->library('upload');
            $this->ci->upload->initialize($config);
            $uploading = $this->ci->upload->do_upload($index);
            if($uploading){
                return ['success'=>true, 'filename'=>$new_file_name];
            }else{
                return ['success'=>false, 'filename'=>''];
            }
        }

        function update_file($path, $file, $index, $prefix, $old_file_name){
            $extension = pathinfo($file[$index]['name'],PATHINFO_EXTENSION);
            $new_file_name = $prefix.strtoupper(md5(uniqid(rand(), true))).'.'.$extension;

            $config = array(
                    'allowed_types' => 'pdf|zip|doc|rar',
                    'file_name' =>$new_file_name,
                    'upload_path' => $path,
                    'overwrite'=>TRUE
            );
            $this->ci->load->library('upload');
            $this->ci->upload->initialize($config);
            if($old_file_name != "" && file_exists($path.$old_file_name)){
                unlink($path.$old_file_name);
            }

            $uploading = $this->ci->upload->do_upload($index);
            if($uploading){
                return ['success'=>true, 'filename'=>$new_file_name];
            }else{
                return ['success'=>false, 'filename'=>$old_file_name];
            }
        }
    }
