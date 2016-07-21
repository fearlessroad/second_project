<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}
	public function index(){
		if($this->session->userdata('loggedin')==true){
			redirect("users/welcome/".$this->session->userdata['id']);
		}
		else{
		$this->load->view('index');
		}
	}
	public function register(){
// setting some validation rules!
			$this->form_validation->set_rules('first_name','First Name','trim|required|', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('last_name','Last Name','trim|required|', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('email','Email','trim|required|is_unique[users.email]|valid_email', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]', array('required'=>'{field} is required'));
			$this->form_validation->set_rules('confirm_pass','Password Confirmation','trim|required|matches[password]', array('required'=>'{field} is required'));

			if ($this->form_validation->run()== FALSE){
				$this->load->view('index');
			}
			else{
			$firstN = $this->input->post('first_name');
			$lastN = $this->input->post('last_name');
			$email = $this->input->post('email');
			$pass = md5($this->input->post('password'));
			$date = date('Y-m-d, H:i:s');
			$userdata = array($firstN, $lastN, $email, $pass, $date);
			$this->user->add_user($userdata);
			redirect("/");
		}
	}
	public function login(){
		if(!$this->input->post()){
			$this->load->view('index');
		}
		else{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$logindata = array($email, $password);
			$result = $this->user->login($logindata)->row_array();
				if(empty($result)){
					$error = array('message'=>'incorrect password');
					$this->load->view('index',$error);
				}
				else{
					$this->session->set_userdata('loggedin',true);
					$this->session->set_userdata('id',$result['id']);
					redirect("/users/welcome/".$result['id']);
				}
		}
	}	
		public function welcome($id){
			// this code prevents people from looking at other user information
			if($this->session->userdata('id')!=$id){
				$error = array('message'=>"You can't look at other people's stuff!");
				$this->load->view('index',$error);
			}
			else{
			$userdata= $this->user->get_by_id($id);
			$this->load->view('welcome',$userdata);
			}
		}
		public function logoff($id){
			$this->session->unset_userdata();
			$this->session->sess_destroy();
			redirect("/");
		}
}