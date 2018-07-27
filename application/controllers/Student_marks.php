<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_marks extends CI_Controller {

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
	public function index()
	{

		$this->load->model('Student_marks_model');
		$usn=$this->session->userdata('student')['student_usn'];
		$data['marks'] =$this->Student_marks_model->getmarks($usn);

/*		foreach ($data['marks'] as $key => $value) 
		{
		 echo $key."   ";
		 echo $value['1'].$value['2'].$value['3'];

		}
*/
		$this->load->view('Student_marks_view',$data);

	}
	public function logout()
	{
		header("Location:".base_url('Home/index'));
	}

}

