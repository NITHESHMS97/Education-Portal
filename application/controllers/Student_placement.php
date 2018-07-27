<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_placement extends CI_Controller {

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
		$sem=$this->session->userdata('student')['semester'];
//		if($sem >=6)			
		{
			$this->load->model('Student_placement_model');
			$data['placement']=$this->Student_placement_model->getplacement();
			$this->load->view('Student_placement_view',$data);
		}
//		else
		{

		}
	}
	public function logout()
	{
		header("Location:".base_url('Home/index'));
	}

}
