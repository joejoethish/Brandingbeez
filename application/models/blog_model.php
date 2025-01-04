<?php 
class Blog_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertData($data, $table)
	{
		$insert_flag = 0;
		$insert_flag = $this->db->insert($table, $data);
		return ($insert_flag == 1 ? $this->db->insert_id() : 0);
	}
    public function updateData($data, $id_field, $id_value, $table)
    {    
	    $edit_flag = 0;
	    $this->db->where($id_field, $id_value);
		$edit_flag = $this->db->update($table,$data);
		return ($edit_flag==1?$id_value:0);
	}
    public function deleteData($id_field, $id_value, $table)
	{
		// echo $table;exit;
		$this->db->where($id_field, $id_value);
		$status = $this->db->delete($table);
		return $status;
	}
    function get_blog_list(){
       $query = $this->db->query("SELECT *,date_format(created_on,'%d-%m-%Y') as blog_date FROM blogs");
        return $query->result();
    }
    function get_blog_content($id_blog){
        $query = $this->db->query("SELECT blog_content,blog_title FROM blogs WHERE id_blog=".($id_blog)."");
        return $query->row_array();
    }
}
?>