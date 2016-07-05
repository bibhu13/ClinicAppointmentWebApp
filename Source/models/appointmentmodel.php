<?php 
	
	Class AppointmentModel extends CI_Model{

		function Check_Day_of_Week($booked_date,$doctor_id){
			$booked_no = date('w', strtotime($booked_date));
			$booked_no = $booked_no + 1;
			$flag = 0;
			$sql="SELECT day_of_week FROM doctor_availability WHERE doctor_id = ?";
			$query=$this->db->query($sql,$doctor_id);
			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			    	$avail_no = $row->day_of_week;
			   		if($avail_no==$booked_no)
			   		{
			   			$flag = 1; 
			   			break;
			   		}
			   		else
			   			continue;
			   	}
			}
			else 
				echo "ERR : No rows of day of week found";
			
			if($flag)
			{
				return true;
			}
			else 
				return false;
		}


		function check_availability($doctor_id,$booked_date){
			
			$sql="SELECT * FROM check_availability WHERE doctor_id = ? and booked_date = ?";
			$query=$this->db->query($sql,array($doctor_id,$booked_date));
			if($query->num_rows() == 0)
			{
				$num = 0;
				$ins = "insert into check_availability values(?,?,?)";
				$que = $this->db->query($ins,array($doctor_id,$booked_date,$num));
				return true;
			}
			elseif($query->num_rows() == 1)
			{
				$row = $query->row();
				$curr_no = $row->curr_no;

				$booked_no = date('w', strtotime($booked_date));//dayofweek
				$booked_no = $booked_no + 1;
				$sql2 = "select total_no from doctor_availability where doctor_id = ? and day_of_week = ?";
				$query2=$this->db->query($sql2,array($doctor_id,$booked_no));
				$row2 = $query2->row();
				$total_no = $row2->total_no;

				if($total_no<$curr_no)
				{
					return false;
				}
				else 
					return true;

			}
			else
				echo "ERR : Primary key violation in check_availability table";




				
			
			
		}

	    function appointment_insert($doctor_id,$booked_date){
	    	$booked_no = date('w', strtotime($booked_date));
			$booked_no = $booked_no + 1;
			$sql="select * from doctor_availability where doctor_id = ? and  day_of_week = ?";
			$query=$this->db->query($sql,array($doctor_id,$booked_no));
			$row=$query->row();
			$time=$row->per_pat_time;
			$from=$row->from_time;
			
			$sql="select * from check_availability where doctor_id = ? and  booked_date = ?";
			$query=$this->db->query($sql,array($doctor_id,$booked_date));
			$row=$query->row();
			$num=$row->curr_no;
			$MinutestoAdd= $time*($num-1);
			$data=array();
			$session_data = $this->session->userdata('logged_in');
			//echo $session_data['username'];
			$data['patient_id']=$session_data['username'];
			#$book=date("h:i:s",strtotime('+$MinutestoAdd minutes',$from)); 
			#$minutes_to_add = 5;

			$time = new DateTime($from);
			$time->add(new DateInterval('PT' . $MinutestoAdd . 'M'));

			$book = $time->format('h:i:s');
			#$data['booked_time']=$from+($time*($num-1));
			$data['booked_time']=$book;
			$data['token_no']=$num;
			$data['doctor_id']=$doctor_id;
			$data['booked_date']=$booked_date;
			//$data['dept_name']=$department;
			$sql="insert into appointment(patient_id,booked_time,token_no,doctor_id,booked_date) values (?,?,?,?,?)";
			$query=$this->db->query($sql,array($data['patient_id'],$data['booked_time'],$data['token_no'],$data['doctor_id'],$data['booked_date']));
			return $data;

		}



		function update_curr_no($doctor_id,$booked_date){
			$sql="update check_availability set curr_no=curr_no+1 where doctor_id=? and booked_date=?";
			$query=$this->db->query($sql,array($doctor_id,$booked_date));

		}

		function display_upcomingappt(){
			$today = date('Y-m-d');
			$session_data = $this->session->userdata('logged_in');
			//echo $session_data['username'];
			$pat_id  =  $session_data['username'];
			$sql= "select * from appointment where patient_id = ? and booked_date >= ?";
			$query=$this->db->query($sql,array($pat_id,$today));
			return $query->result();

		}

		function get_doctorId($doctor_name,$department_name){

			$sql="SELECT * from doctor where doctor_name = ? and specialization = ?";
			$query=$this->db->query($sql,array($doctor_name,$department_name));
			$row = $query->row();
			$doctor_id = $row->doctor_id;
			return $doctor_id;
		}

		function get_doctor_avail($doctor_id)
		{
			$sql= "select * from doctor_availability where doctor_id = ?";
			$query=$this->db->query($sql,$doctor_id);
			return $query->result();
		}
		
	}

?>