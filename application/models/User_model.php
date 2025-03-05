<?php
class User_model extends CI_Model {

    // to get studednt 
    public function get_user_by_phone($phone) {
        $this->db->where('mobile', $phone);
        return $this->db->get('sm_students')->row();
    }
    
    
    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('sm_students')->row();
    }
    public function get_user_by_phone_or_email($phone, $email) {
        $this->db->where('mobile', $phone);
        $this->db->or_where('email', $email);
        return $this->db->get('users')->row();
    }




    // create student user 

    public function insert_student_user($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    // create student record 

    public function insert_student($data) {
        $this->db->insert('sm_students', $data);
        return $this->db->insert_id();
    }

    // add student record in student record table 

    public function insert_student_record($data) {
        $this->db->insert('student_records', $data);
        $db_error = $this->db->error();
            return $db_error['message'];
        // return $this->db->insert_id();
    }


    // create guardian user 

    public function insert_guardian_user($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }   

    // create parents record 

    public function insert_parent_record($data) {
        $this->db->insert('sm_parents', $data);
        return $this->db->insert_id();
    }
}