<?php 
class User extends CI_Model{
	function add_user($arr){
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?, ?, ?, ?, ?)";
		return $this->db->query($query, $arr);
	}
	function login($arr){
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		return $this->db->query($query, $arr);
	}
	function get_by_id($id){
         return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
     }
}