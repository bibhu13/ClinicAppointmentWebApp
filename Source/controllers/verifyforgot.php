<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class verifyforgot extends CI_Controller 
{
	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('user','',TRUE);
	   $this->load->helper('url');
	 }

	 function index()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('username', 'Username', 'trim|required');
 		$this->form_validation->set_rules('sec_que', '', 'trim|required');
   		$password=$this->form_validation->set_rules('sec_ans', '', 'trim|required|callback_check_database');

   		if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->load->view('forgot');
	   }
	   else
	   {
	     //Go to private area
	     //header("Location: home");
	     //$this->load->view('');
	   	$username = $this->input->post('username');
 		$sec_que=$this->input->post('sec_que');
 		$sec_ans=$this->input->post('sec_ans');
 		$result=$this->user->forgot($username,$sec_que,$sec_ans);
 		foreach ($result as $row)
 		{
 				$data['password']= $row->password;
 		}
 		$this->load->view('show_password',$data);
	   }

 	}

 	function check_database($sec_ans)
 	{
 		$username = $this->input->post('username');
 		$sec_que=$this->input->post('sec_que');
 		$result=$this->user->forgot($username,$sec_que,$sec_ans);

 		if($result)
 		{
 			return true;
 		}
 		else
 		{
 			$this->form_validation->set_message('check_database', 'Invalid username or Details');
     		return false;
 		}

 	}



}