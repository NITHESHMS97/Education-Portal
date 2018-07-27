<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_attendence extends CI_Controller {

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

		$this->load->model('Student_attendence_model');
		$usn=$this->session->userdata('student')['student_usn'];
		$data['attend']=$this->Student_attendence_model->getattendence($usn);
		//print_r($this->session->userdata('student'));

		$this->load->view('Student_attendence_view',$data);
	}
	public function logout()
	{
		header("Location:".base_url('Home/index'));
	}

}
