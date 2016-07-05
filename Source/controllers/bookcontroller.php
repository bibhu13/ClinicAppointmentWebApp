<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class AppointmentController extends CI_Controller 
	{

		function __construct() 
		{

			parent::__construct();
			$this->load->model('appointmentmodel','',TRUE);
			
		}
	
		

		 function index()
		{
			$booked_date=$this->input->post('appt_date');
			$doctor_id=$this->input->post('doctor_id');
			
			// For Matching Day of Week
			$check = $this->appointmentmodel->Check_Day_of_Week($booked_date,$doctor_id);
			if($check)
			{
				/*$avail=$this->appointmentmodel->check_availability($doctor_id);
				if($avail)
				{
					$this->appointmentmodel->update_doctor($doctor_id);
					$data['no'] = $this->appointmentmodel->appointment_insert($doctor_id);
					$this->load->view('successful_view',$data);
				}
				else
				{
					$this->load->view('unsuccessful_view');
				}*/
				echo "Matching";
			}
			else 
				echo "Day Of Week Not Matching";

		}

