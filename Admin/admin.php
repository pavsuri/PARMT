<?php

class Admin extends CI_Controller 
{
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

        $this->load->model('admin_model');
	}

	 function index($data = null) {

		$this->form_validation->set_rules('adminUserName', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_rules('hdntext', '*', 'callback_validateLogin');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin_login');
		} else {
            $username = $this->input->post('adminUserName');
            $password = $this->input->post('password');

            $result = $this->admin_model->checkLoginCredentials($username, $password);


            $data['result'] = ($result) ? 'valid user' : 'invalid user';
			//ata['result']=md5($password);
            $this->load->view('admin_login', $data);
		}
	}

/*    function validateLogin()
    {
    
        $username = $this->input->post('adminUserName');
        $password = $this->input->post('password');

        $result = $this->admin_model->checkLoginCredentials($username, $password);

        if (!$result) {
            $this->form_validation->set_message('validateLogin', 'Inavalid username and paswword');
            return false;
        }
        return true;
    }
    
    
	function adminname_check($str)
	{
		if ($str == '') {
			$this->form_validation->set_message('adminname_check', 'Inavalid adminname');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function password_check($str)
	{
		if ($str == '')
		{
			$this->form_validation->set_message('password_check', 'Password Incorrect');
			return FALSE;
		} else
		{
			return TRUE;
		}
	}*/
}
