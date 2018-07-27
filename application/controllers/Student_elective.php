<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_elective extends CI_Controller {

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
		$this->load->model('Student_elective_model');
		$usn=$this->session->userdata('student')['student_usn'];
		$semester=$this->session->userdata('student')['semester'];
		$department=$this->session->userdata('student')['department_id'];

		if($this->Student_elective_model->checkregistration($usn)==true)
		{
			//already registerd
			echo '<script>alert("You Have already registered your elective courses!");</script>';
			$this->load->view('Student_elective_alreadyregistered');
	//		header("Location:".base_url('Home/index'));


		}
		else
		{	
			$data['subject']=$this->Student_elective_model->getsubject($semester,$department);
//			print_r($data);
			$data['name']=$this->session->userdata('student')['first_name'];
			$data['semester']=$semester;
			$data['department']=$department;
			$this->load->view('Student_elective_view',$data);
		}
	}
	public function logout()
	{
		header("Location:".base_url('Home/index'));
	}
	public function storeelective()
	{
		$this->load->model('Student_elective_model');
		$data['elective_name']=$this->input->post("subject");
		$data['student_usn']=$this->session->userdata('student')['student_usn'];
		$this->Student_elective_model->insert_data($data);
//		$this->storesubject();
		$this->load->view('Student_electivedone');

	}
	public function storesubject()
	{
		$this->load->model('Student_elective_model');
		$this->Student_elective_model->insert_subject1();
		

	}
}
