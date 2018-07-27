<?php

class Login_model extends CI_Model {

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
	public function can_login($email,$password)
	{
		//ehco "hello";
		$this->load->database();
		$this->db->where('email_id',$email);
		$this->db->where('password',$password);
		$query =$this->db->get('student');

//		print_r($query);


				if($query->num_rows()>0)
				{
//					echo "yo";
					return true;
				}
				else
				{
//					echo "yah"
					return false;
				}

	}
	public function  getusn($email)
	{
		
		$query=$this->db->query("SELECT * FROM student WHERE email_id='$email' ");

		return $query->result_array()[0];



	}
		

}
