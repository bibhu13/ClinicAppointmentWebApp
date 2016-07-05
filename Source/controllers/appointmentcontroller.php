<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class AppointmentController extends CI_Controller 
	{

		function __construct() 
		{

			parent::__construct();
			$this->load->model('appointmentmodel','',TRUE);
			 $this->load->model('user','',TRUE);
		
			
		}
	
		

		 function index()
		{
			
			
			$doctor_id = $this->input->post('doctor_id');
			//echo "bibhu";
			//$doctor_id = 1234;
			$data['record'] = $this->appointmentmodel->get_doctor_avail($doctor_id);
			

			$this->load->view('book_appt_view',$data);

			
		}

		function go_back()
		{

			$data['record'] = $this->user->get_doctors();
       		$this->load->view('appt1_view',$data);
		}
		
		



	}

?>