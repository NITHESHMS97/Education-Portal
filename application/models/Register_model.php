<?php

class Register_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getdepartment()
	{
		$this->load->database();

		$query=$this->db->query("SELECT department_id FROM department");
		 return $query->result_array();
		 
	}
	public function checkdublication($data)
	{
		$this->load->database();
		$val=$data['email_id'];
		$query=$this->db->query("SELECT * FROM student WHERE email_id='$val'");
		if($query->num_rows()>0)
		{
//			echo "yo";
			return true;
		}
		else
		{
//			echo "yah"
			return false;
		}

	}
	public function insert_data($data)
	{
		$this->db->insert("student",$data);
	}
}
