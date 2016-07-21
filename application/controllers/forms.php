<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function validate(){
		$this->form_validation->set_rules('first_name','First Name','trim|required|', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('last_name','Last Name','trim|required|', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('email','Email','trim|required|is_unique[users.email]|valid_email', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('confirm_password','Password Confirmation','trim|required|matches[password]', array('required'=>'{field} is required'));

			if ($this->form_validation->run()== FALSE){
				$this->load->view('register');
			}
			else{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = date('Y-m-d, H:i:s');
			$userdata = array($first_name, $last_name, $email, $password,'admin', $date);
			$this->user->add_user($userdata);
			redirect("signin");
			}
		}
		public function message($id){
			$this->load->model('message');
			$user_id = $this->session->userdata('id');
			$text = $this->input->post('content');
			$date = date('Y-m-d, H:i:s');
			$content = array($text, $date, $user_id); 
			$this->message->add_message($content);

		}
}