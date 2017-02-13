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
                'nourut'=>$kkn['no_urut'],
                'nama'=>$kkn['nama'],
                'prodi'=>$kkn['prodi'],
                'ket'=>$kkn['konsentrasi'],
                'angkatan'=>$kkn['angkatan'],
                'kelas'=>$kkn['kelas'],
                'jenkel'=>$kkn['jenkel'],
                'agama'=>$kkn['agama'],
                'tmplahir'=>$kkn['tempat_lahir'],
                'tgllahir'=>$kkn['tanggal_lahir'],
                'alamat'=>$kkn['alamat_asal'],
                'kos'=>$kkn['alamat_sekarang'],
                'kota'=>$kkn['kota'],
                'kecamatan'=>$kkn['kec'],
                'hp'=>$kkn['nomorhp'],
                'status'=>$kkn['status_kerja'],
                'jaket'=>$kkn['jaket'],
                'lokasi'=>"",
                'acc'=>'inactive',
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            $insert = $this->db->insert('adi_kkn', $data);
            
            return $insert;
        }
    }