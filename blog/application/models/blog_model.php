<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model {

	function getArticles(){
		$q = $this->db->get('articles');
		return $q->result();
	}

}	