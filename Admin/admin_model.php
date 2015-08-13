<?php

class Admin_Model extends CI_Model
{
    function checkLoginCredentials($username, $password)
    {
        $this->load->database();
        
        $this->db->select('username','password');
        $this->db->from('adminuser');
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}