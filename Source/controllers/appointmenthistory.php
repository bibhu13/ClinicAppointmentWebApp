<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class AppointmentHistory extends CI_Controller 
	{

		function __construct() 
		{

			parent::__construct();
			$this->load->model('appointmentmodel','',TRUE);
			
		}
	
		

		 function index()
		{		
			
			$history['row'] = $this->appointmentmodel->display_history();
			$this->load->view('appt_history_view',$history);
		}




	}

?>