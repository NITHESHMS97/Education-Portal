<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_assignment extends CI_Controller {

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

		//print_r($this->session->userdata('student'));
		$usn=$this->session->userdata('student')['student_usn'];
		$semester=$this->session->userdata('student')['semester'];
		$department=$this->session->userdata('student')['department_id'];
		$this->load->model('Student_assignment_model');
		$data['subject']=$this->Student_assignment_model->getsubject($department,$semester);
//		print_r($data);
		$this->load->view('Student_assignment_view',$data);

	}
	public function logout()
	{
		header("Location:".base_url('Home/index'));
	}
	public function storeassignment()
	{
		$usn=$this->session->userdata('student')['student_usn'];
		$this->load->model('Student_assignment_model');
			$data = array (
			"assignment_title"=>$this->input->post('title'),
			"details"=> $this->input->post('comment'),
			"student_usn"=> $usn,
			"elective_id"=> $this->input->post('subject'),
			"a_marks"=> 'NULL'
		);

		$this->Student_assignment_model->insert_data($data);
//		$this->Student_assignment_model->insert_data($assignment_title,$details,$usn,$elective_id);
		header("Location:".base_url('Student_home/index'));
	}
}
