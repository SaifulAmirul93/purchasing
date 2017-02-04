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
	public function index()
	{
		$this->load->view('pages/login');
	}




	    function signin(){
	    	/*$email = $this->input->post("email");
	        $pass = $this->input->post("pass");

	        $this->load->library("my_func");
	        $pass = $this->my_func->scpro_encrypt($pass);*/
	        redirect(site_url('purchase_v1/dashboard'),'refresh');
	        //echo $email;
	        //echo $pass;

	        /*$this->load->model("m_login");*/

	      /*  $data = array(
	        	"us_email" => $email , 
	        	"us_pass" => $pass
	        );*/
	       /* if (!$this->m_login->insert($data)) {
	        	echo "Not success";
	        }else{
	        	echo "success";
	        }*/
	    }
}
