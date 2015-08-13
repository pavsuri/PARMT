<?php
class Enquiry_List extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));
		
        $this->load->model('enquiry_model');
	}
	
	function index(){
	
				$this->load->view('enquiry_view');
				
	}
	function getData(){
		
		//echo "hi";
		$data = array();
		$data['details'] = $this->enquiry_model->enquiryDetails();
		$this->load->view('enquiry_view', $data);
	}
	
}
 
?>