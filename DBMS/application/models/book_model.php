<?php
class book_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    // get subjects for perticular semester for perticular branch
    function getBooks($book_list_id)
    {
	

		//$query = $this->db->query('SELECT subject FROM subjects WHERE department="$branch" AND semester="$sem" ');
		
		$this->db->select('book,link,author');
		$this->db->from('books');
		$this->db->where('book_list_id', $book_list_id);
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