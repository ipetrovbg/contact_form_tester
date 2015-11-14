<?php 

class Question_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_topics()
	{

		$this->db->order_by('topic', 'asc');
		$q = $this->db->get('topics');
		$result = $q->result_array();

		return $result;

	}//end of get topics
}