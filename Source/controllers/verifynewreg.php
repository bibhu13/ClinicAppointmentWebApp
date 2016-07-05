<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class VerifyNewReg extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('user','',TRUE);
	 } 

	 function index()
	 {
	 	$this->load->library('form_validation');

	 	$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_user');
	 	$this->form_validation->set_rules('dob', '', 'trim|required');
   		$this->form_validation->set_rules('password1', 'Password', 'trim|required|callback_check_validity');
   		$this->form_validation->set_rules('sec_ans', '', 'trim|required');

   		if($this->form_validation->run() == FALSE)
   		{
     		//Field validation failed.  User redirected to login page
     		$this->load->view('newreg');
   		}
   		else
  		{
     		//Go to private area
     		//header("Location: home");
     		$data['username']=$this->input->post('username');
     		$data['password']=$this->input->post('password1');
     		$data['dob']=$this->input->post('dob');
     		$data['name']=$this->input->post('name');
     		$data['regno']=$this->input->post('regno');
     		$data['sec_que']=$this->input->post('sec_que');
     		$data['sec_ans']=$this->input->post('sec_ans');
     		$data['mobile']=$this->input->post('mobile');
     		$this->user->user_insert($data);
     		$sess_array = array(   //get the data here
         		'name' => $data['name'],
         		'username' => $data['username']
      			 );
       $this->session->set_userdata('logged_in', $sess_array);
       $data1['record'] = $this->user->get_doctors();
       $this->load->view('appt1_view',$data1);
     		//echo "working";
   		}


	 }

	 function check_validity($password)
	 {
	 	$paswd1=$this->input->post('password1');
	 	$paswd2=$this->input->post('password2');
	 	if($paswd1 != $paswd2)
	 	{
	 		$this->form_validation->set_message('check_validity', 'Passwords Not Matching');
	 		return False;
	 	}
	 	else
	 	{
	 		return True;
	 	}
	 }

	 function check_user($username)
	 {
	 	$flag=$this->user->check_user($username);
	 	if($flag)
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		$this->form_validation->set_message('check_user', 'Username Exists');
	 		return false;
	 	}
	 }


}
?>