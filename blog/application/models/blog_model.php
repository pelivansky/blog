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

	function getTopArticle(){
		$this->db->order_by('nr_of_comments','desc');
		$this->db->limit(3);
		$q = $this->db->get('articles');
		return $q->result();
	}

	function getLastComm(){
		$this->db->order_by('post_id','desc');
		$this->db->limit(2);
		$q = $this->db->get('comments');
		return $q->result();
	}

	function getArtById(){
		$this->db->where('id',$this->uri->segment(3));
		$q = $this->db->get('articles');
		return $q->result();
	}

	function getComment(){
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->join('comments','comments.article_id = articles.id');
		$q = $this->db->get();
		return $q->result();		
	}

    public function add_comment(){
    	$data = array(
    				'name'         => $this->input->post('name'),
    				'post_content' => $this->input->post('comm'),
    				'time_posted'  => $this->input->post('date'),
    				'article_id'   => $this->input->post('url_seg')
    		);
    	$this->db->insert('comments', $data);
    	return $this->input->post('url_seg');
    	return TRUE;


    }			
}	