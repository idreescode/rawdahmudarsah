<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact_queries_model extends CI_Model
{


    public function add($data)
    {
      
        $result = $this->db->insert('contact_queries', $data);
        // return $this->db->last_query();

    }
    


}