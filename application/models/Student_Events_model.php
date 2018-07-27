<?php

class Student_Events_model extends CI_Model {

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
	public function getEvents()
	{
		//ehco "hello";
		$this->load->database();

		$query=$this->db->query("SELECT * FROM events WHERE date > CURDATE() ORDER BY date");
//		echo "<pre>";
//		print_r($query->result_array());
//		 echo "</pre>";
		 return $query->result_array();
	}

}
