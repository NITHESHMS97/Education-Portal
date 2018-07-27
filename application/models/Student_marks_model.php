<?php

class Student_marks_model extends CI_Model {

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
	public function getmarks($usn)
	{
		
		$output = array();
		$query=$this->db->query("SELECT distinct elective_id FROM marks WHERE student_usn='$usn'");
//		echo "<pre>";
//		print_r($query->result_array());
//		echo "</pre>";
		foreach ($query->result_array() as $row)
		{
			$output[$row['elective_id']] =  array('1' => 'AB','2' => 'AB','3' => 'AB');
		}
//		echo "<pre>";
//		print_r($output);
//		echo "</pre>";
		$sql="SELECT * FROM marks WHERE student_usn='$usn' GROUP BY type ,elective_id";
 		$query=$this->db->query( $sql);

 		foreach ($query->result_array() as $row)
		{
//			echo "<br>ROW:<br><pre>";
//			print_r($row);
//			echo "</pre>";
			$output[$row['elective_id']][$row['type']] = $row['mark'];
		}
//		echo "<pre>";
//		print_r($output);
//		echo "</pre>";
//		print_r($output);
//		print_r($query->result_array()[0]);
		 return $output;
		 
	}

}
?>