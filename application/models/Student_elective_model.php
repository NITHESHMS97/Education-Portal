<?php

class Student_elective_model extends CI_Model {

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
	public function checkregistration($usn)
	{
		$sql="SELECT * FROM elective e ,learn l WHERE e.elective_id=l.elective_id AND l.student_usn='$usn' 
			  AND e.iselective=1";
		$query=$this->db->query($sql);
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getsubject($semseter,$department)
	{
		$this->load->database();
//		echo $semseter."<br>";
		$query=$this->db->query("SELECT * FROM elective WHERE semester=$semseter AND department_id='$department'");
//		echo "<pre>";
//		print_r($query->result_array());
		 return $query->result_array();
//		 echo "</pre>";
	}


	public function insert_data($data)
	{
		$elective_name = $data['elective_name'];
		$sql=$this->db->query("SELECT elective_id FROM elective WHERE elective_name='$elective_name' ");
		$elective_id=$sql->result_array()[0]['elective_id'];
//		$this->db->insert("learn",$data);
		$usn=$data['student_usn'];

		$sql ="INSERT INTO learn VALUES ('$elective_id','$usn')";
		$this->db->query($sql);
		
/*		$data2['subject']=$query->result_array();
		foreach ($subject as $key => $val ) 		
		{	if($val['iselective']==1)
			{

			}	
		}
*/	} 
	public function insert_subject1()
	{
		$semester=$this->session->userdata('student')['semester'];
		$department=$this->session->userdata('student')['department_id'];
		$query=$this->db->query("SELECT elective_id, iselective FROM elective WHERE semester=$semester AND department_id='$department'");
		 $data=$query->result_array();
		 $usn=$this->session->userdata('student')['student_usn'];
		foreach ($data as $key => $val ) 		
		{	
			if($val['iselective']==0)
			{	
				$elective_id=$val['elective_id'];
//				echo $elective_id;
//				echo $usn;

				$sql ="INSERT INTO learn VALUES ('$elective_id','$usn')";
				$this->db->query($sql);
				
			}	
		}

	}
	
}