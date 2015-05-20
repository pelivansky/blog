<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model {

	function count_articles(){
		$q = $this->db->count_all_results('articles');
		return $q;
	}

	function getArtPag($limit,$start){
		$this->db->limit($limit,$start);
		$q = $this->db->get('articles');
		return $q->result();	
	}	

}	