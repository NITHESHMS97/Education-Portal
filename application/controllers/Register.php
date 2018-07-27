
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Register extends CI_Controller {


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
		$this->load->model('Register_model');

		$data['department']=$this->Register_model->getdepartment();
		
		$this->load->view('Register_view',$data);

	}

	public function form_validation()
	{
//		echo 'ok';

		$this->load->library('form_validation');
		$this->form_validation->set_rules("student_USN","Student USN","required");
	 	$this->form_validation->set_rules("First_name","First Name","required");
	 	$this->form_validation->set_rules("email","Email Id","required");
	 	$this->form_validation->set_rules("password","Password","required");
	 	$this->form_validation->set_rules("year","Year","required");
	 	$this->form_validation->set_rules("semester","Semester","required");
	 	$this->form_validation->set_rules("department","department","required");
	 	
	 	if($this->form_validation->run())
	 	{
	 		
	 		$this->load->model("Register_model");
	 		$data = array(
	 			"student_usn" =>$this->input->post("student_USN"),
	 			"first_name" =>$this->input->post("First_name"),
	 			"middle_name" =>$this->input->post("Middle_name"),
	 			"last_name" =>$this->input->post("Last_name"),
	 			"semester" =>$this->input->post("semester"),
	 			"department_id" =>$this->input->post("department"),
	 			"mobile_no" =>$this->input->post("mobile_no"),
	 			"email_id" =>$this->input->post("email"),
	 			"password" =>$this->input->post("password"),
	 			 "year" =>$this->input->post("year")

	 		);
//	 		print_r($data);
	 		$confirm_pass = $this->input->post("c_password");
	 		if($this->Register_model->checkdublication($data)==true)
	 		{
	 			echo '<script>alert("You Already been registered!");</script>';
	 			$this->load->view('AlreadyRegistered');
	 		}
	 		else
	 		{
	 			if($data['password']==$confirm_pass)
	 			{
	 				$this->Register_model->insert_data($data);
	 				$config =Array(
	 					'protocol'=>'smtp',
	 					'smtp_user'=>'nitheshms97@gmail.com',
	 					'smtp_pass'=>'#include<>'
	 				);
	 				$this->load->library('email',$config);
	 				$this->email->from('nitheshms97@gmail.com','NITHESH MS');
	 				$this->email->to($data['email_id']);
	 				$this->email->subject("Registration complete");
	 				$this->email->message("you have be registered for EPportal -ADMIN,Nithesh MS ");
	 				$this->email->send();
//	 				$this->email->print_debugger();

	 				redirect(base_url());
	 			}
	 			else
	 			{
	 				echo '<script>alert("Confirm password is wrong");</script>';
	 				$this->index();
	 			}
	 			
	 		}
	 		
//	 		redirect(base_url());
	 	}
	 	else
	 	{
	 			$this->index();	
//	 			redirect(base_url());
//	 			header("Location:".base_url('Register/index'));
	 	}
	}
}
