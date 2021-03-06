<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Contactus extends CI_Controller {

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
		
		$this->load->view('Student_Contactus_view');
	}
	public function feedback()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('comment','comment','required');
		if($this->form_validation->run())
		{
			
			$this->load->model('Student_Contactus_model');
			$data = array(
				"name" =>$this->input->post("name"),
				"email" =>$this->input->post("email"),
				"comment" =>$this->input->post("comment")
				);
			$this->Student_Contactus_model->insert_data($data);

			$this->load->view("Student_Feedback_view");
		}
		else
		{	
			
			$this->load->view('Student_Contactus_view');	
	//		header("Location:".base_url('Contactus/index'));
		}
	}
}
