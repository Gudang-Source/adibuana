<?php
    class Image_Upload {
        function __construct(){
            $this->ci =&get_instance();
        }

        function upload_image($path, $file, $index, $prefix=""){
            $rand_number = rand(1, 999999);
		    $extension = pathinfo($file[$index]['name'],PATHINFO_EXTENSION);
		    $new_file_name = $prefix.strtoupper(md5(uniqid(rand(), true))).'.'.$extension;

            $config = array(
                    'allowed_types' => 'jpg|jpeg|png',
                    'file_name' =>$new_file_name,
                    'upload_path' => $path
            );
		    $this->ci->load->library('upload', $config);

		    $uploading = $this->ci->upload->do_upload($index);
            if($uploading){
                return ['success'=>true, 'filename'=>$new_file_name];
            }else{
                return ['success'=>false];
            }

        }
    }
