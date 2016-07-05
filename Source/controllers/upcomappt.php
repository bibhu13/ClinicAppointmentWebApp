<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Upcomappt extends CI_Controller 
	{

		function __construct() 
		{

			parent::__construct();
			$this->load->model('appointmentmodel','',TRUE);
		
			
		}

		function index()
		{
			$data['no'] = $this->appointmentmodel->display_upcomingappt();
			$this->load->view('show_up_appt',$data);
		}

	}

?>