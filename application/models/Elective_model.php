<style>
	#en
	{
		display:block;
	
	}
</style>
<?php

class Elective_model extends CI_Model {

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
	public function getElective()
	{
		//ehco "hello";
		$this->load->database();

		$query=$this->db->query("SELECT elective_name,department_Id,semester,type   FROM elective ");
//		echo "<pre>";
//		print_r($query->result_array());
//		 echo "</pre>";
		  $query->result_array();

	$qry_result =   $query->result_array(); or die(mysql_error());
	echo "<B>List of Electives</B><br>";
	$i=0;
	while($row = mysql_fetch_array($qry_result))
	{
		
		if($row['department_Id']==$dept && $row['semester']==$sem && $row['type']==$gorl)
		{
			$i=$i+1;
		echo '<div id="en">'.$i.') '.$row["elective_name"].'</div>';
			
		}
	}

	}

}
