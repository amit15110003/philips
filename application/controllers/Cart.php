<?php
class cart extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
		$details['query']=$this->user->showcart_user($this->session->userdata('uid'));
		$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
		$this->load->view('cart',$details);
		$this->load->view('footer');
	}

	 public function remove_cart()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('postid');
		$this->db->delete('cart', array('id'=>$id,
                                          'uid'=>$uid));
    }

    public function itemadd()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('id');
    	$item=$this->input->post('item');
		$this->db->query('update cart set item="'.$item.'" where id="'.$id.'" and uid="'.$uid.'"');
    }

	
		
}