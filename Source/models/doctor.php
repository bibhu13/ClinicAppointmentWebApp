<?php

	class doctor extends CI_Model
	{

		function query()
		{
			$sql="select * from doctor";
			$query=$this->db->query($sql);
			return $query->result();
		}

		function result($doctor_id,$date)
		{
			$sql="SELECT * from appointment where doctor_id=? AND booked_date=?";
			$query=$this->db->query($sql, array($doctor_id, $date));
			if($query -> num_rows() >= 1)
		    {
		     return $query->result();
		    }
		    else
		    {
		     return false;
		    }

		}

		function doc_info($doctor_id)
		{
			$sql="SELECT * from doctor where doctor_id=?";
			$query=$this->db->query($sql, array($doctor_id));
			if($query -> num_rows() >= 1)
		    {
		     return $query->result();
		    }
		    else
		    {
		     return false;
		    }
		}

		function add_doc($doctor_id,$doc_name,$spec)
		{
			$sql="insert into doctor values(?,?,?)";
			$query=$this->db->query($sql, array($doctor_id,$doc_name,$spec));

		}

		function check_doctor_exists($doctor_id)
		{
			$sql="SELECT * from doctor where doctor_id=?";
			$query=$this->db->query($sql, array($doctor_id));
			if($query -> num_rows() >= 1)
		    {
		     return TRUE;
		    }
		    else
		    {
		     return FALSE;
		    }
		}


		function delete_doc($doctor_id)
		{
			$sql="delete  from doctor where doctor_id=?";
			$query=$this->db->query($sql, array($doctor_id));
			$sql="delete  from doctor_availability where doctor_id=?";
			$query=$this->db->query($sql, array($doctor_id));

		}

		function get_doc_avail($doctor_id)
		{
			$sql="SELECT * from doctor_availability where doctor_id=?";
			$query=$this->db->query($sql, array($doctor_id));
			if($query -> num_rows() >= 1)
		    {
		     return $query->result();
		    }
		    else
		    {
		     return false;
		    }
		}

		function add_doc_avail($doctor_id,$day_of_week,$from_time,$to_time,$tot_no)
		{
			$sql="insert into doctor_availability (doctor_id,day_of_week,from_time,to_time,total_no) values(?,?,?,?,?)";
			$query=$this->db->query($sql, array($doctor_id,$day_of_week,$from_time,$to_time,$tot_no));

		}

		function del_doc_avail($doctor_id,$day_of_week,$from_time,$to_time,$tot_no)
		{
			$sql='delete from doctor_availability where doctor_id=? and day_of_week=? and from_time=? and to_time=? and total_no=?';
			$query=$this->db->query($sql, array($doctor_id,$day_of_week,$from_time,$to_time,$tot_no));

		}


	}

?>