<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
	
	   	var $parent_page = "pages";
        var $component_parent="component";

	    function __construct() {
	        parent::__construct();
	        $this->load->library('session');
	    }



	    function index() {
	        $this->page('a1');
	    }


	      private function _show($page = 'display' , $key = 'a1'){
           /* $link['link'] = $key;
	    	$link['admin'] = $this->_checkLvl();
	    	if (!$link['admin']) {
	    		$link['link'] = 'a2';
	    	}
	    	if (isset($data['title'])) {
	    		$T['title'] = $data['title'];
	    	}else{
	    		$T = null;
	    	}*/
	    	$this->load->view($this->component_parent.'/head', '', FALSE);
	    	$this->load->view($this->component_parent.'/header', '', FALSE);
	    	$this->load->view($this->component_parent.'/sidemenu', '', FALSE);
	    	$this->load->view($this->component_parent.'/footer', '', FALSE);

		

	    	//$this->load->view($this->parent_page.'/component/sidemenu', '', FALSE)
	    }	



	    public function page($key)
    	{
                  //$arr = $this->input->get();
        //$this->_checkSession();
            //$lvl =$this->my_func->scpro_decrypt($this->session->userdata('us_lvl'));
        switch ($key) {
                case "a1" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/dashboard', true);
                        
                        
                   break;   

              case "a21" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/list_purchase', true);
                        
                   break;  

                   case "a22" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_purchase', true);
                        
                   break; 
                     break;  

                   case "a23" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_info', true);
                        
                   break;   

                    case "a24" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_user', true);
                        
                   break; 

                     case "a25" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_list', true);
                        
                   break;   

                    case "a26" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_item', true);
                        
                   break;

                    case "a6" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->load->database();
                        $this->load->model('m_supplier');

                        $arr = $this->m_supplier->getList();

                        $temp['arr'] = $arr;



                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/supplier_list', $temp, true);
                        
                   break; 
                     case "a62" :// dashboard
                        //start added
                       /* $this->load->database();
                        $this->load->model('m_supplier');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_supplier', true);
                        
                   break;
                     case "a29" :// dashboard
                        //start added
                        $this->load->database();
                        $this->load->model('m_supplier');
                        $arr = $this->m_order->getList();
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_purchase', true);
                        
                   break;  
 

                    default:
                        //$this->_show();
                        break;
        
                    }
		  }



            public function addSupplier()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_supplier');
                  //$this->load->library('my_func');
                  
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                    /*  if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }*/
                     
                      $arr2[$key] = $value;             
                    }
                  }
                  $result = $this->m_supplier->insert($arr2);
                  redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                }else{
                  redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                }
              }
	}
?>
	