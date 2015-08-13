<?php
class Pagination_Task extends CI_Controller 
{
    public function __construct()
	{
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("pagination_model");
        $this->load->library("pagination");
    }
 
    public function index()
	{

		$config = array();
        $config["base_url"] = base_url() . "/index.php/Pagination_Task/index";
        $config["total_rows"] = $this->pagination_model->recordCount();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);/*initialising the configuration elements*/
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["details"] = $this->pagination_model->fetchRecords($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
 
        $this->load->view("pagination_view", $data);
    }
}