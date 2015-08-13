<?php
class Pagination_Model extends CI_Model
{
    public function __construct() {
        parent::__construct();
		$this->load->database();
    }
 
    public function recordCount() 
	{
        return $this->db->count_all("enquirylist");
    }
 
    public function fetchRecords($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("enquirylist");
 
        return $query->result();
               
            
	}
      
}
?>