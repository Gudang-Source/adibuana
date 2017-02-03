<?php
     class FacultyModel extends CI_Model{
         function index(){

         }
         function get_by_slug($id){

         }
         function get_by_id($id){
            $fakultas = $this->db->select('*')
                    ->from('adi_faculty_course')
                    ->where('id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;

         }
         function insert(){

         }
         function update($id){

         }
         function delete($id){

         }

         function get_fakultas_area(){
            $this->db->select('adi_faculty_area.*, adi_user.name')
                    ->from('adi_faculty_area')
                    ->join('adi_user', 'adi_faculty_area.post_by = adi_user.id');
            $area = $this->db->get()->result();
            return $area;
         }

         function get_area_by_id($id){
            $fakultas = $this->db->select('*')
                    ->from('adi_faculty_area')
                    ->where('id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;
         }

         function get_fakultas_tipe(){
            $this->db->select('adi_faculty_type.*, adi_user.name')
                    ->from('adi_faculty_type')
                    ->join('adi_user', 'adi_faculty_type.post_by = adi_user.id');
            $tipe = $this->db->get()->result();
            return $tipe;
         }

         function get_tipe_by_id($id){
            $fakultas = $this->db->select('*')
                    ->from('adi_faculty_type')
                    ->where('id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;
         }

         function get_fakultas(){
            $this->db->select('adi_faculty.*, adi_user.name, adi_faculty_area.area_eng')
                    ->from('adi_faculty')
                    ->join('adi_user', 'adi_faculty.post_by = adi_user.id')
                    ->join('adi_faculty_area', 'adi_faculty.id_area = adi_faculty_area.id');
            $fakultas = $this->db->get()->result();
            return $fakultas;
         }

         function get_fakultas_by_id($id){
            $fakultas = $this->db->select('*, adi_faculty.id as id_faculty')
                    ->from('adi_faculty')
                    ->join('adi_faculty_area', 'adi_faculty.id_area = adi_faculty_area.id')
                    ->join('adi_faculty_type', 'adi_faculty.id_type = adi_faculty_type.id')
                    ->where('adi_faculty.id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;
         }

         function get_fakultas_course(){
            $this->db->select('adi_faculty_course.*, adi_faculty.title_eng as nama_fakultas, adi_user.name')
                    ->from('adi_faculty_course')
                    ->join('adi_faculty', 'adi_faculty_course.id_fac = adi_faculty.id')
                    ->join('adi_user', 'adi_faculty_course.post_by = adi_user.id');
            $course = $this->db->get()->result();
            return $course;
         }

         function get_faculty_by_course($course){
                 $course = $this->db->get_where('adi_faculty_course', ['title_ina'=>$course])->row();
                 $faculty = $this->db->get_where('adi_faculty', ['id'=>$course->id_fac])->row();

                 return $faculty;
         }

         function get_course(){
                 $this->db->select('adi_course.*')
                                ->from('adi_course');
                $course = $this->db->get()->result();
                return $course;                
         }

         function get_course_by_id($id){
            $fakultas = $this->db->select('adi_faculty_course.*, adi_faculty.title_eng as nama_fakultas')
                    ->from('adi_faculty_course')
                    ->join('adi_faculty', 'adi_faculty_course.id_fac = adi_faculty.id')
                    ->where('adi_faculty_course.id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;
         }

         function get_fakultas_detail(){
            $this->db->select('adi_faculty_detail.*, adi_user.name')
                    ->from('adi_faculty_detail')
                    ->join('adi_user', 'adi_faculty_detail.post_by = adi_user.id');
            $detail = $this->db->get()->result();
            return $detail;
         }

         function get_detail_by_id($id){
            $fakultas = $this->db->select('adi_faculty_detail.*, adi_faculty.title_eng as nama_fakultas')
                    ->from('adi_faculty_detail')
                    ->join('adi_faculty', 'adi_faculty_detail.id_fac = adi_faculty.id')
                    ->where('adi_faculty_detail.id', $id);
            $fakultas = $fakultas->get()->row();
            return $fakultas;
         }

         function insert_area($area){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'area_ina'=>$area['area_ina'],
                'area_eng'=>$area['area_eng'],
                'address'=>$area['address'],
                'phone1'=>$area['phone'],
                'phone2'=>$area['alt_phone'],
                'fax1'=>$area['fax'],
                'fax2'=>$area['alt_fax'],
                'glatitude'=>$area['google_lat'],
                'glongitude'=>$area['google_long'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
                $insert = $this->db->insert('adi_faculty_area', $data);
                return $insert;
         }

         function insert_tipe($tipe){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'type_ina'=>$tipe['type_ina'],
                'type_eng'=>$tipe['type_eng'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
                $insert = $this->db->insert('adi_faculty_type', $data);
                return $insert;
         }

         function insert_fakultas($fakultas, $pic=""){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'id_area'=>$fakultas['area'],
                'id_type'=>$fakultas['tipe'],
                'title_ina'=>$fakultas['title_ina'],
                'title_eng'=>$fakultas['title_eng'],
                'content_ina'=>$fakultas['konten_ina'],
                'content_eng'=>$fakultas['konten_eng'],
                'jml_mhs'=>$fakultas['jumlah_mhs'],
                'picture'=>$pic,
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
                $insert = $this->db->insert('adi_faculty', $data);
                return $insert;
         }

         function insert_course($course){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'id_fac'=>$course['fakultas'],
                'title_ina'=>$course['title_ina'],
                'title_eng'=>$course['title_eng'],
                'content_ina'=>$course['konten_ina'],
                'content_eng'=>$course['konten_eng'],
                'facility_ina'=>$course['fasilitas_ina'],
                'facility_eng'=>$course['fasilitas_eng'],
                'coo_ina'=>$course['coo_ina'],
                'coo_eng'=>$course['coo_eng'],
                'plulus_ina'=>$course['prospek_ina'],
                'plulus_eng'=>$course['prospek_eng'],
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
                $insert = $this->db->insert('adi_faculty_course', $data);
                return $insert;
         }

         function insert_detail($detail, $pic=""){
            $data = [
                'id'=>rand(10000000000, 99999999999),
                'id_fac'=>$detail['fakultas'],
                'title_ina'=>$detail['title_ina'],
                'title_eng'=>$detail['title_eng'],
                'picture'=>$pic,
                'post_date'=>date('Y-m-d H:i:s'),
                'modify_date'=>date('Y-m-d H:i:s'),
                'post_by'=>$this->session->userdata('id_user')
            ];
                $insert = $this->db->insert('adi_faculty_detail', $data);
                return $insert;
         }

         function update_area($id,$area){
            $data = [
                'area_ina'=>$area['area_ina'],
                'area_eng'=>$area['area_eng'],
                'address'=>$area['address'],
                'phone1'=>$area['phone'],
                'phone2'=>$area['alt_phone'],
                'fax1'=>$area['fax'],
                'fax2'=>$area['alt_fax'],
                'glatitude'=>$area['google_lat'],
                'glongitude'=>$area['google_long'],
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            $where = [
                'id' => $id
            ];

            $update = $this->db->update('adi_faculty_area', $data, $where);
            return $update;
         }

         function update_tipe($id,$tipe){
            $data = [
                'type_ina'=>$tipe['type_ina'],
                'type_eng'=>$tipe['type_eng'],
                'modify_date'=>date('Y-m-d H:i:s'),
            ];

            $where = [
                'id'=>$id
            ];

            $update = $this->db->update('adi_faculty_type', $data, $where);
            return $update;
         }

         function update_fakultas($id, $fakultas, $pic=""){
            $data = [
                'id_area'=>$fakultas['area'],
                'id_type'=>$fakultas['tipe'],
                'title_ina'=>$fakultas['title_ina'],
                'title_eng'=>$fakultas['title_eng'],
                'content_ina'=>$fakultas['konten_ina'],
                'content_eng'=>$fakultas['konten_eng'],
                'jml_mhs'=>$fakultas['jumlah_mhs'],
                'modify_date'=>date('Y-m-d H:i:s')
            ];
            if($pic != ""){
                $data['picture'] = $pic;
            }

            $where = [
                'id'=>$id
            ];

            $update = $this->db->update('adi_faculty', $data, $where);
            return $update;
         }

         function update_course($id,$course){
            $data = [
                'id_fac'=>$course['fakultas'],
                'title_ina'=>$course['title_ina'],
                'title_eng'=>$course['title_eng'],
                'content_ina'=>$course['konten_ina'],
                'content_eng'=>$course['konten_eng'],
                'facility_ina'=>$course['fasilitas_ina'],
                'facility_eng'=>$course['fasilitas_eng'],
                'coo_ina'=>$course['coo_ina'],
                'coo_eng'=>$course['coo_eng'],
                'plulus_ina'=>$course['prospek_ina'],
                'plulus_eng'=>$course['prospek_eng'],
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            $where = [
                'id'=>$id
            ];

            $update = $this->db->update('adi_faculty_course', $data, $where);
            return $update;
         }

         function update_detail($id, $detail, $pic=""){
            $data = [
                'id_fac'=>$detail['fakultas'],
                'title_ina'=>$detail['title_ina'],
                'title_eng'=>$detail['title_eng'],
                'picture'=>$pic,
                'modify_date'=>date('Y-m-d H:i:s')
            ];

            if($pic != ""){
                $data['picture'] = $pic;
            }

            $where = [
                'id'=>$id
            ];

            $update = $this->db->update('adi_faculty_detail', $data, $where);
            return $update;
         }

         function delete_area($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_faculty_area', $where);
            return $delete;
         }

         function delete_tipe($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_faculty_type', $where);
            return $delete;
         }

         function delete_fakultas($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_faculty', $where);
            return $delete;
         }

         function delete_course($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_faculty_course', $where);
            return $delete;
         }

         function delete_detail($id){
            $where = ['id'=>$id];
            $delete = $this->db->delete('adi_faculty_detail', $where);
            return $delete;
         }
     }