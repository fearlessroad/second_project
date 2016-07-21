<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('course');
	}
	public function index(){
		$added_courses = $this->course->get_all_courses();
		$this->load->view('index', array('courses'=>$added_courses));
	}

// public function add_course($data)
	public function remove($course){
		$added_courses = $this->course->get_all_courses();
		$this->load->view('remove', array('courses'=>$added_courses));
	}
	public function destroy($id){
		$id = $course['id'];
		var_dump($id);
		die();
		$this->course->delete($id);
		redirect('/');
	}
	public function add(){

		// setting variables that correspond with information entered
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$date = date('Y-m-d, H:i:s');
		$link ="<a href='courses/destroy/'.$name.'>remove</a>";
// Validations 
		if($name == null){
			$error_data = array(
				'error' => '<div id="error">You must include a course name</div>'
				);
			$this->session->set_userdata('error','true');
			$this->load->view('index', $error_data);
		}
		else if(strlen($name) <15 ){
			$error_data = array(
				'error' => '<div id="error">Your course name must be at least 15 characters!</div>'
				);
			$this->session->set_userdata('error','true');
			$this->load->view('index', $error_data);
		}
// End of validations 
		else {
			$this->course->add_course($name, $description, $date, $link);
			}
			redirect("/");
	}
}
?>