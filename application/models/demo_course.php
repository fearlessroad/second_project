<?php
class Course extends CI_Model {
     function get_all_courses()
     {
         return $this->db->query("SELECT * FROM courses")->result_array();
     }
     function get_course_by_id($course_id)
     {
         return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
     }
     function add_course($name, $description, $date, $link)
     {
         $query = "INSERT INTO Courses (name, description, created_at) VALUES (?,?,?)";
         $values = array($name, $description, $date); 
         return $this->db->query($query, $values);
     }
     function get_most_recent(){
        return $this->db->query("SELECT name, description, MAX(created_at) FROM courses")->result_array();
     }
     function delete($id){
        $query = "DELETE FROM courses WHERE id=?";
        return $this->db->query($query, $id);
     }
}
?>
