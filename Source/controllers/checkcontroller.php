<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class CheckController extends CI_Controller 
	{

		function __construct() 
		{

			parent::__construct();
			$this->load->model('appointmentmodel','',TRUE);
		
			
		}
	
		

		 function index()
		{
			
			//Error Values
			$err1 = $err2 = 0;
			//echo "bibhu";
			$booked_date=$this->input->post('appt_date');
			//echo $booked_date;
			$doctor_id=$this->input->post('doctor_id');
			//echo $doctor_id;
			
			// Checking date is older or not
			//echo date('Y-m-d');
			$today = date('Y-m-d');
			if($booked_date < $today)
			{
				$err1 = 1;
				$data['err_msg']='Not allowed to book Old Dates.Please Select an Upcoming Date';

				//$err_msg = "Not allowed to book Old Dates.Please Select an Upcoming Date ";
				$this->load->view('unsuccessful_view',$data);
			}
			else 
				echo "";

			
			
			// For Matching Day of Week
			$check = $this->appointmentmodel->Check_Day_of_Week($booked_date,$doctor_id);
			if($check)
			{
				echo "";
			}
			else 
			{
				$err2 = 1;
				$data['err_msg']='Day Of Week Not Matching. Please Select a Date in which doctor is available';

				//$err_msg = "Day Of Week Not Matching. Please Select a Date in which doctor is available";
				$this->load->view('unsuccessful_view',$data);
				//echo "Day Of Week Not Matching";
			}

			if(!$err1 && !$err2)
			{
				//echo "Valid";
				$avail = $this->appointmentmodel->check_availability($doctor_id,$booked_date);
				if($avail)
				{
					$this->appointmentmodel->update_curr_no($doctor_id,$booked_date);
					$data['no'] = $this->appointmentmodel->appointment_insert($doctor_id,$booked_date);
					$this->load->view('successful_view',$data);
				}
				else
				{
					//$err_msg = "Doctor is not available in this day.Please book some other Date";
					$data['err_msg']='Doctor is not available in this day.Please book some other Date';

					$this->load->view('unsuccessful_view',$data);
				}
			}
			else
				echo "";

		}
	}

?>