<?php
class Enquiry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	function enquiryDetails() {

		$this->db->select()->from('enquirylist');
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>