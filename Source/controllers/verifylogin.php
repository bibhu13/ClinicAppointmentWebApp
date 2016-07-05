<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->helper('url');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
   

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
    $this->load->view('login');
    //redirect(echo base_url());
   }
   else
   {
     //Go to private area
     //header("Location: home");
    $session_data = $this->session->userdata('logged_in');
     if($session_data['profile'] == 'user')
     {
       $data['record'] = $this->user->get_doctors();
       $this->load->view('appt1_view',$data);

     }
     else
     {

      $this->load->view('admin_view');
     }
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(   //get the data here
         'name' => $row->name,
         'username' => $row->username,
         'profile'=>$row->type
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }

  function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Welcome', 'refresh');
 }
}
?>