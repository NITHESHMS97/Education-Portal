<?php

class Student_assignment_model extends CI_Model {

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
	public function getsubject($department,$semester)
	{
		$this->load->database();

		
		$query=$this->db->query("SELECT * FROM elective WHERE semester=$semester AND department_id='$department'");
//		print_r($query->result_array());
		 return $query->result_array();
		 
	}
/*	public function insert_data($assignment_title,$details,$elective_id,$usn)
	{
//		$this->db->insert("assignment",$data);
		$sql ="INSERT INTO assignment VALUES ('$assignment_title',',$details','$usn','$elective_id','NULL')";
		$this->db->query($sql);
	} */

	public function insert_data($data)
	{
		$elective_name = $data['elective_id'];
		$sql=$this->db->query("SELECT elective_id FROM elective WHERE elective_name='$elective_name' ");
		$elective_id=$sql->result_array()[0]['elective_id'];
		$data['elective_id']=$elective_id;
		$this->db->insert("assignment",$data);
//		$sql ="INSERT INTO assignment VALUES ('$assignment_title',',$details','$usn','$elective_id','NULL')";
//		$this->db->query($sql);
	} 
}
