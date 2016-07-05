<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class doctor_query extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	   $this->load->model('doctor','',TRUE);
	   $this->load->library('form_validation');

	 }

	 function index()
	 {
	 	/*$name = $this->input->post('name');
	 	$date=$this->input->post('date');

	 	echo $name;*/
	 }

	 function query()
	 {

	 	$result['row']=$this->doctor->query();
	 	//$results1['row']=$this->doctor->result($this->input->post('doc_id'),$this->input->post('date'));
	 	$this->load->view('admin_query_page',$result);
	 	//$this->load->view('admin_results_page',$results1);
	 }

	 function query_results()
	 {
	 	$results1['row']=$this->doctor->result($this->input->post('doc_id'),$this->input->post('date'));
	 	$this->load->view('admin_results_page',$results1);

	 }
	 function modify()
	 {
	 	$result['row']=$this->doctor->query();
	 	$this->load->view('admin_modify_page',$result);
	 }

	 function from_admin_modify_page_buttons()
	 {
	 	if (isset($_POST['doc_id']))
	 	{
	 		$this->form_validation->set_rules('doc_id', 'doc_id', 'trim|required|callback_check_doc_exist');
	 	}
	 	$from= $this->input->post('formsubmit');

	 	if($from=="ADD DOCTOR")
	 	{
	 		$this->load->view('add_doctor');
	 	}
	 	else
	 		if($this->form_validation->run() == TRUE)
	 		{
		 		if($from=="DELETE DOCTOR")
		 		{
		 			$this->doctor->delete_doc($this->input->post('doc_id'));
		 			$result['row']=$this->doctor->query();
		 			$this->load->view('admin_modify_page',$result);
		 		}
		 		else
		 			if($from=="ADD")
		 			{
		 				$result['row']=$this->doctor->get_doc_avail($this->input->post('doc_id'));
		 				$result['doc_id']=$this->input->post('doc_id');
		 				$this->load->view('add_doc_avail',$result);

		 			}
		 			else
		 				if($from=="DELETE")
		 				{
		 					$result['row']=$this->doctor->get_doc_avail($this->input->post('doc_id'));
			 				$result['doc_id']=$this->input->post('doc_id');
			 				$this->load->view('del_doc_avail',$result);
		 				}
		 				else
		 					if ($from=='Modify') 
		 					{
		 						$result['row']=$this->doctor->get_doc_avail($this->input->post('doc_id'));
			 					$result['doc_id']=$this->input->post('doc_id');
			 					$this->load->view('modify_doc_avail',$result);
		 					}
		 	}
		 	else
		 	{
		 		$result['row']=$this->doctor->query();
	 			$this->load->view('admin_modify_page',$result);
		 	}

	 }

	 function add_doc_to_table()
	 {
	 	$this->form_validation->set_rules('doc_id', 'doc_id', 'trim|required|callback_add_doc_to_table_verify');
	 	if($this->form_validation->run() == FALSE)
	 	{
	 		$this->load->view('add_doctor');
	 	}
	 	else
	 	{
	 		$doc_name=$this->input->post('doc_name');
		 	$doc_id=$this->input->post('doc_id');
		 	$spec=$this->input->post('spec');
		 	$this->doctor->add_doc($doc_id,$doc_name,$spec);
		 	$result['row']=$this->doctor->query();
		 	$this->load->view('admin_modify_page',$result);
	 	}
	 	
	 }

	 function check_doc_exist($doc_id)
	 {
	 	$result=$this->doctor->check_doctor_exists($doc_id);
	 	if($result)
	 	{
	 		return TRUE;
	 	}
	 	else
	 	{
	 		$this->form_validation->set_message('check_doc_exist', 'Doctor Id Do Not Exist');
	 		return FALSE;
	 	}
	 }

	 function add_doc_to_table_verify($doc_id)
	 {
	 	//$doc_id=$this->input->post('doc_id');
	 	//$spec=$this->input->post('spec');
	 	$result=$this->doctor->check_doctor_exists($doc_id);
	 	if($result)
	 	{
	 		$this->form_validation->set_message('add_doc_to_table_verify', 'Doctor Id Exists');
	 		return FALSE;
	 	}
	 	else
	 		return TRUE;
	 }
	 function add_doc_avail()
	 {
	 	$doc_id=$this->input->post('doc_id');
	 	$day_of_week=$this->input->post('day_of_week');
	 	$from_time=$this->input->post('from_time');
	 	$to_time=$this->input->post('to_time');
	 	$tot_no=$this->input->post('tot_no');
	 	$result['row']=$this->doctor->query();
	 	$this->load->view('admin_modify_page',$result);

	 	$this->doctor->add_doc_avail($doc_id,$day_of_week,$from_time,$to_time,$tot_no);
	 }

	 function del_doc_avail($doc_id,$day_of_week,$from_time,$to_time,$tot_no)
	 {
	 	$this->doctor->del_doc_avail($doc_id,$day_of_week,$from_time,$to_time,$tot_no);
	 	$result['row']=$this->doctor->query();
	 	$this->load->view('admin_modify_page',$result);


	 }

	 function del_doc_avail1($doc_id,$day_of_week,$from_time,$to_time,$tot_no,$q)
		{
			echo "i am in";
		}

	 function modify_doc_avail()
	 {
	 	$doc_id=$this->input->post('p_doc_id');
	 	$day_of_week=$this->input->post('p_day_of_week');
	 	$from_time=$this->input->post('p_from_time');
	 	$to_time=$this->input->post('p_to_time');
	 	$tot_no=$this->input->post('p_tot_no');

	 	$this->doctor->del_doc_avail($doc_id,$day_of_week,$from_time,$to_time,$tot_no);

	 	$doc_id=$this->input->post('doc_id');
	 	$day_of_week=$this->input->post('day_of_week');
	 	$from_time=$this->input->post('from_time');
	 	$to_time=$this->input->post('to_time');
	 	$tot_no=$this->input->post('tot_no');


	 	$this->doctor->add_doc_avail($doc_id,$day_of_week,$from_time,$to_time,$tot_no);

	 	$result['row']=$this->doctor->query();
	 	$this->load->view('admin_modify_page',$result);

	 }
	 function goback()
	 {
	 	
	 	$this->load->view('admin_view');
	 }
}