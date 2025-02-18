<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Registration_model extends CI_Model
{


    public function add($data)
    {
        // echo"<pre>";
        // print_r($data);exit;
        $result = $this->db->insert('online_admissions', $data);
        return $this->db->last_query();
// exit;
        // if ($result) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
    


}