<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');

	}

	public function index()
	{	
		$details['query']=$this->user->showcategory();
		$details['category']=$this->user->showcategory();
		$details['query1']=$this->user->showproduct_maxrate();
		$details['query2']=$this->user->showproduct_new();
		$details['query3']=$this->user->showslider();
		$this->load->view('header',$details);
		$this->load->view('index.php',$details);
	}

	public function login()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($email,$password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('');
			}
		}
    }

    public function contact()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {	
        	$details['category']=$this->user->showcategory();
			$this->load->view('header',$details);
			$this->load->view('contacts');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($email,$password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('');
			}
		}
    }


    public function about()
	{	
		$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
		$this->load->view('about');
	}


	public function currencyinr()
	{  	
		$sess_data = array('currencyinr' =>TRUE);
        	$this->session->unset_userdata('currencyusd');
			$this->session->set_userdata($sess_data);
				redirect('');
	}
	public function currencyusd()
	{  
		$sess_data = array('currencyusd' =>TRUE);
        	$this->session->unset_userdata('currencyinr');
				$this->session->set_userdata($sess_data);
				redirect('');
	}
    public function subscribe()
	{  
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|valid_email|is_unique[user.email]");
		if ($this->input->post('email'))
        {
			$details['query']=$this->user->showcategory();
		$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
		$this->load->view('index.php',$details);
		}else
		{
			$data = array(
				'email' => $this->input->post('email')
			);
		if ($this->user->insert_subscriber($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('');
			}
		}
	}
    
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}

	function search_keyword()
	{
		if (empty($this->input->post('keyword')))
        {
			$details['category']=$this->user->showcategory();
			$this->load->view('header',$details);
    		$this->load->view('search',$data);
		}else
		{
    	$keyword = $this->input->post('keyword');
    	$data['query']=$this->user->search($keyword);
    	$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
    	$this->load->view('search',$data);
    	}
	}

}
