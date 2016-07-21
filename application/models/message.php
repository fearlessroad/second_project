<?php
class Message extends CI_Model{
	function add_message($content){
		$query = "INSERT INTO messages (content, created_at, user_id) VALUES (?,?,?)";
		return $this->db->query($query, $content);
	}
}