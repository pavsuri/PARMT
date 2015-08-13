<?php
class AdminModel extends CI_Model
{
function get_data($username,$passwrd)
{
$this->load->database();
$this->db->select('id','username','password');
$this->db->from('adminuser');
$this->db->where('username',$username);
$this->db->where('password',md5($passwrd));
$this->db->limit(1);
$query = $this->db->get();
if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 }