<?php
class subject_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    // get subjects for perticular semester for perticular branch
    function getSubjects($branch,$sem)
    {
	

		//$query = $this->db->query('SELECT subject FROM subjects WHERE department="$branch" AND semester="$sem" ');
		
		$this->db->select('subject,description,id');
		$this->db->from('subjects');
		$this->db->where('department', $branch);
		$this->db->where('semester', $sem);
		$query = $this->db->get();
		
		$subjects = $query->result() ;
		
		if ($subjects){	
			return $subjects;
		}
		else {
			return null;
		}
        //return $this->db->insert('user', $data);
    }
    
}
?>