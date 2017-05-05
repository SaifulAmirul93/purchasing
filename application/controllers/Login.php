<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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


	  function __construct() {
	        parent::__construct();
	        $this->load->library('session');
	    }
	public function index()
	{
		$this->load->view('pages/login');
	}




	    function signin(){
	    	$email = $this->input->post("us_email");
	        $pass = $this->input->post("us_pass");
	  
	        $this->load->database();
	    	$this->load->model('m_login');
	    	$data = $this->m_login->login($email,$pass);
	    	
	    	if ($data) {
	    		echo "<script>alert('Login Successfull')</script>";
	        $array = array(
	        		'us_id' => $data->us_id,
	    			'ul_id' => $data->ul_id,
	    			'us_username' => $data->us_username

	    		);	    		
	    		$this->session->set_userdata( $array );
	        redirect(site_url('purchase_v1/dashboard'),'refresh');
	        }
	        else{
	    		echo "<script>alert('Not Successfull')</script>";
	    		redirect(site_url('login'),'refresh');
	    	}

	        
	    }
}
