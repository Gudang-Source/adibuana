<?php
    class KknModel extends CI_Model{
        function get_all(){
            return $this->db->get('adi_kkn')->result();
        }
        function get_by_id($id){
            return $this->db->get_where('adi_kkn', ['id'=>$id])->row();
        }
        function get_nomor_urut($prodi){
            $this->db->select('adi_kkn.nourut')
                    ->from('adi_kkn')
                    ->where('adi_kkn.prodi', $prodi)
                    ->order_by('nourut', 'desc')
                    ->limit(1);

            return $this->db->get()->row();
        }
        function cek_nim($nim){
            $nim = $this->db->get_where('adi_kkn', ['nim'=>$nim]);
            if($nim->num_rows() == 1){
                return false;
            }else{
                return true;
            }
        }

        function insert($kkn){
            $data = [
                // 'id'=>$kkn['id'],
                'nim'=>$kkn['nim'],
                'nourut'=>$kkn['nourut'],
                'nama'=>$kkn['nama'],
                'prodi'=>$kkn['prodi'],
                'ket'=>$kkn['ket'],
                'angkatan'=>$kkn['angkatan'],
                'kelas'=>$kkn['kelas'],
                'jenkel'=>$kkn['jenkel'],
                'agama'=>$kkn['agama'],
                'tmplahir'=>$kkn['tempat_lahir'],
                'tgllahir'=>$kkn['tanggal_lahir'],
                'alamat'=>$kkn['alamat'],
                'kos'=>$kkn['kos'],
                'kota'=>$kkn['kota'],
                'kecamatan'=>$kkn['kec'],
                'hp'=>$kkn['hp'],
                'status'=>$kkn['status'],
                'jaket'=>$kkn['jaket'],
                'lokasi'=>$kkn['lokasi'],
                'acc'=>'inactive',
                'post_date'=>date('Y-m-d'),
                'modify_date'=>date('Y-m-d')
            ];

            $insert = $this->db->insert('adi_kkn', $data);
            
            return $insert;
        }
    }