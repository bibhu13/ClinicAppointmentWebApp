<?php

	class User extends CI_Model
	{
		function login($username,$password)
		{
			
			$sql = "SELECT * FROM user WHERE username = ? AND password = ?"; 
			$query=$this->db->query($sql, array($username, $password));

			if($query -> num_rows() == 1)
		    {
		     return $query->result();
		    }
		    else
		    {
		     return false;
		    }
		 
		
		
		}

		function forgot($username,$sec_que,$sec_ans)
		{
			$sql="SELECT * from user where username = ? and sec_que = ? and sec_ans = ?";
			$query=$this->db->query($sql, array($username, $sec_que,$sec_ans));

			if($query -> num_rows() == 1)
		    {
		     return $query->result();
		    }
		    else
		    {
		     return false;
		    }

		}

		function user_insert($data)
		{
			
			$sql="Insert into user(username,password,name,dob,regno,sec_que,sec_ans,mobile) values(?,?,?,?,?,?,?,?)";
			$query=$this->db->query($sql, array($data['username'], $data['password'],$data['name'],$data['dob'],$data['regno'],$data['sec_que'],$data['sec_ans'],$data['mobile']));
			


		}

		function check_user($username)
		{
			$sql="SELECT * FROM user WHERE username = ?";
			$query=$this->db->query($sql, array($username));
			if($query->num_rows() == 0)
			{
				return true;
			}
			else
			{
				return false;
			}

		}

		function get_doctors()
		{
			$sql= $this->db->query("select * from doctor");
			return $sql->result();
		}

		
	}
?>