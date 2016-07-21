<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Navigation extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}
	public function index(){
	$this->load->view('index');
	}
	public function signin(){

		if(!$this->input->post()){
		$this->load->view('signin');
		}
		else{
		$this->load->model('user');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$userdata = array($email, $password);
		$result = $this->user->login($userdata)->row_array();
			if(empty($result)){
				$this->load->view('signin',$error);
			}
			else{
				$this->session->set_userdata('loggedin',true);
				$this->session->set_userdata('id',$result['id']);
				redirect("welcome/".$result['id']);
			}
		}
	}
	public function register(){
			$this->load->view('register');
	}
	public function welcome($id){
	$userdata= $this->user->get_by_id($id);
	$messages = $this->message->get_all();
	$this->load->view('welcome',$userdata);
	}
}