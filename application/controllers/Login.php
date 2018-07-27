<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		
		$this->load->view('Login_view');
		
	}
	public function login_validation()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run())
		{
				$type= $this->input->post('type');
				$email= $this->input->post('email');
				$password=$this->input->post('password');
				$this->load->model('Login_model');
				if($this->Login_model->can_login($email,$password)==true)
				{
					
				//	if($type=='STUDENT')
					{
						$student=$this->Login_model->getusn($email);
						$student['is_logged_in']=true;
						$this->session->set_userdata('student',$student);
						
						header("Location:".base_url('Student_home/index'));
					}
				//	else
					{
				//		header("Location:".base_url('Login/index'));	                
					}

				}
				else
				{
					header("Location:".base_url('Login/index'));
				}
		}
		else
		{
				$this->load->view('Login_view');
			//	header("Location:".base_url('Login/index'));
		}
	}
}
