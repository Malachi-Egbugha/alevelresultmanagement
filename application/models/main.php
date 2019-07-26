<?php
class Main extends CI_Model{
	 function __construct()
    {
        parent::__construct();
    }
	// Read data using username and password
public function login($data) {

$condition = "studentid =" . "'" . $data['username'] . "' AND " . "pin=" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('student');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

	function fetch_data()
	{
		$query=$this->db->get("student");
		return $query;

	}
}