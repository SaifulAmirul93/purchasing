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
                         $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_item');
                        $this->load->model('m_cat');
                        $this->load->model('m_supplier');
                        $arr['lvl'] = $this->m_purchase->getLvl();
                        $arr['cat'] = $this->m_cat->get();
                        $arr['item'] = $this->m_item->get();
                        $arr['supplier'] = $this->m_supplier->get(null , 'asc');
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_purchase',$arr);
                        
                   break; 
                     break;  

                   case "a23" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();




                         $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_info',$arr,  true);

                        /*$data['display'] = $this->load->view($this->parent_page.'/user_info' ,$arr , true);
                        $this->_show('display' , $data , $key); */



                        /*$this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_info', true);*/
                        
                   break;   

                    case "a24" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');

                          $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();

                     


                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_user',$arr);
                        
                   break; 

                     case "a25" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->load->database();
                        $this->load->model('m_user');
                        /*$arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_user->getList();*/
                       $arr['arr'] = $this->m_user->getAll();
                        

                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_list', $arr);
                        
                   break;   

                    case "a26" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['lvl'] = $this->m_item->getLvl();
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_item',$arr);
                        
                   break;
                     case "a27" :// dashboard
                        //start added
                      /*  $this->load->database();
                        $this->load->model('m_order');*/
                         
                     
                        //end added
                        //$this->load->view($this->parent_page.'/dashboard');
                        $this->load->database();
                        $this->load->model('m_item');



                        /*if (!$this->_checkLvl()) {
                          $where = array(
                            'cat_id !=' => 1
                            );
                          $arr['arr'] = $this->m_item->getAll($where);
                        }else{
                          $arr['arr'] = $this->m_item->getAll();
                        }*/
                         $arr['arr'] = $this->m_item->getAll();
                        /*$arr = $this->m_item->getList();

                        $temp['arr'] = $arr;*/



                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/item_list', $arr);
                        
                   break;

                     case "c26" :
                          //view
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('view')) {
                         $ItemId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['id'] = $this->input->get('view');
                        $arr['lvl'] = $this->m_item->getLvl();
                        $arr['arr'] = $this->m_item->getAll($ItemId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_item',$arr);

                      break; 

                       case "c27" :
                          //edit
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('edit')) {
                         $UserId = $this->input->get('edit');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['id'] = $this->input->get('edit');
                        $arr['lvl'] = $this->m_item->getLvl();
                        $arr['arr'] = $this->m_item->getAll($UserId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_item',$arr);
                        

                        break;  

                        

                    case "c28" :// delete
                    if ($this->input->get('delete')) {
                     $itemID = $this->input->get('delete');
                     $this->load->database();
                     $this->load->model('m_item');

                     $this->m_item->delete($itemID);
                     redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                     break;
                      } 



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
                        $this->load->view($this->parent_page.'/supplier_list', $temp);
                        
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


                    case "a13" :// delete
                    if ($this->input->get('delete')) {
                     $supplierID = $this->input->get('delete');
                     $this->load->database();
                     $this->load->model('m_supplier');

                     $this->m_supplier->delete($supplierID);
                     redirect(site_url('purchase_v1/dashboard/page/a6'),'refresh');
                     break;
                      }  

                      case "a14" :// delete
                    if ($this->input->get('delete')) {
                     $userID = $this->input->get('delete');
                     $this->load->database();
                     $this->load->model('m_user');

                     $this->m_user->delete($userID);
                     redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                     break;
                      }     
                   
                    case 'c11':
                      //edit
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('edit'))
                       {
                         $staffId = $this->input->get('edit');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_supplier');
                        $arr['id'] = $this->input->get('edit');
                        //$arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_supplier->getAll($staffId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_supplier',$arr);
                        

                        break;

                      case 'c12':
                      //view
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('view')) {
                         $supplierId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_supplier');
                        $arr['id'] = $this->input->get('view');
                        //$arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_supplier->getAll($supplierId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_supplier',$arr);
                        

                        break;

                        case "c23" :// delete
                        if ($this->input->get('delete')) {
                         $userID = $this->input->get('delete');
                         $this->load->database();
                         $this->load->model('m_user');

                         $this->m_user->delete($userID);
                         redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                         break;
                          } 

                           case "c24" :
                          //edit
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('edit')) {
                         $UserId = $this->input->get('edit');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['id'] = $this->input->get('edit');
                        $arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_user->getAll($UserId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_user',$arr);
                        

                        break;

                         case "c25" :
                          //edit
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                      if ($this->input->get('view')) {
                         $UserId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['id'] = $this->input->get('view');
                        $arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_user->getAll($UserId);
                        /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                        $this->_show('display' , $data , $key); */

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_user',$arr);
                        

                        break;


                    default:
                        //$this->_show();
                        break;
        
                    }
		  }


            public function updateSupplier()
              {
                if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_supplier');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_supplier->update($arr2 , $id);
          if(!$result){
              echo "<script>
              alert('Successfully Updated!');  
          </script>";
          redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
          }
          else{
                      $this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                     }
        
        }else{
          redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
        }
      }





            /*    if ($this->input->post()) {
                  $id = $this->input->get('edit');
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_supplier');
                  //$this->load->library('my_func');
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                      if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }
                      if ($key == 'id') {
                        $id = $this->my_func->scpro_decrypt($value);
                      }else{
                        $arr2[$key] = $value;
                     /* }   */          
                /*    }
                  }
                  $result = $this->m_supplier->update($arr2,$id );
                  redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                }*/
             /* }*/
    


            function _checkLvl($page = null)
                {     
                  //$this->load->library('my_func');
                  $lvl =$this->session->userdata('cat_id');
                        if ($lvl == 1) {
                            return true;
                        }else{
                            return false;
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
                      /*if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }*/
                      if ($key == 'id') {
                        $id =$value;
                      }else{
                        $arr2[$key] = $value;
                      }             
                    }
                  }
                  $result = $this->m_supplier->insert($arr2,$id);
                  redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                }else{
                  redirect(site_url('purchase_v1/dashboard/page/a62'),'refresh');
                }
              }


              public function updateUser()
              {
                      if ($this->input->post()) {
                      $arr = $this->input->post();          
                      $this->load->database();
                      $this->load->model('m_user');
                      //$this->load->library('my_func');
                      foreach ($arr as $key => $value) {
                        if ($value != null) {
                         /* if ($key == 'pass') {
                            $value = $this->my_func->scpro_encrypt($value);
                          }*/
                          if ($key == 'id') {
                            $id = $value;
                          }else{
                            $arr2[$key] = $value;
                          }             
                        }
                      }
                      $result = $this->m_user->update($arr2 , $id);
                      
                             echo "<script>
                          alert('Successfully Updated!');  
                      </script>";
                      redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                  /*    else{
                        $this->session->set_flashdata("message","Record Not Updated!");
                                  redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                                  
                      }*/
                    
                    }else{
                      redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                    }
            }
             public function updateItem()
              {
                      if (
                        $this->input->post()) {
                      $arr = $this->input->post();          
                      $this->load->database();
                      $this->load->model('m_item');
                      //$this->load->library('my_func');
                      foreach ($arr as $key => $value) {
                        if ($value != null) {
                         /* if ($key == 'pass') {
                            $value = $this->my_func->scpro_encrypt($value);
                          }*/
                          if ($key == 'id') {
                            $id = $value;
                          }else{
                            $arr2[$key] = $value;
                          }             
                        }
                      }
                      $result = $this->m_item->update($arr2 , $id);
                      
                             echo "<script>
                          alert('Successfully Updated!');  
                      </script>";
                      redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                  /*    else{
                        $this->session->set_flashdata("message","Record Not Updated!");
                                  redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                                  
                      }*/
                    
                    }else{
                      redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                    }
            }

              public function getAjaxSupplier()
              {
                if ($this->input->post('key')) {
                  $arr = $this->input->post('key');
                  $this->load->database();
                  $this->load->model('m_supplier');
                  //$this->load->library('my_func');
                  if($arr != -1){
                    $data['supplier'] = $this->m_supplier->get($arr);
                    echo $this->load->view('pages/getAjaxSupplier', $data, TRUE);
                  }else{
                    echo $this->load->view('pages/getAjaxSupplier', '', TRUE);
                  }
                  
                }     
              }


              public function getAjaxItem()
              {
                 
                  if ($this->input->post('catt_id')) {
                  $catt_id = $this->input->post('catt_id');
                  
                   $this->load->database();
                  $this->load->model('m_item');
                  if ($catt_id == -1) {
                      $type['cat'] = $catt_id;
                  } else {

                      $type['type'] = $this->m_item->getList($catt_id);
                      

                      $type['cat'] = $catt_id;
                      //echo "<script>alert($catt_id);</script>";
                  }         
                  
                  $this->load->view($this->parent_page."/getAjaxType", $type );
                }
              }

              public function getAjaxItemList()
        {
            $arr = $this->input->post();
            $this->load->database();
            $this->load->model('m_item');
            $this->load->model('m_cat');
            $temp['cat'] = $this->m_cat->get($arr['cat']);
            $temp['item'] = $this->m_item->get($arr['type']);
            $temp['num'] = $arr['num'];
            echo $this->load->view($this->parent_page."/ajax/getAjaxItem", $temp , true);
        }

                      // public function getAjaxItem()
                      // {
                      //     $this->load->database();
                      //     $ca_id = $this->input->post('ca_id');
                      //     $this->load->model('m_item');
                      //     if ($ca_id == -1) {
                      //         $type['cat'] = $ca_id;
                      //     } else {
                      //         $type['type'] = $this->m_type2->get(array('ca_id' => $ca_id));
                      //         $type['cat'] = $ca_id;
                      //     }         
                          
                      //     echo $this->load->view($this->parent_page."/ajax/getAjaxType", $type , true);
                      // }

              public function addUser()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_user');
                  //$this->load->library('my_func');
                  
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                    /*  if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }*/
                     
                      $arr2[$key] = $value;             
                    }
                  }
                  $result = $this->m_user->insert($arr2);

                    if(!$result)
                     {
                      echo "<script>
                        alert('Successfully Added!');  
                      </script>";
                      redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                     }
                     else{
                      $this->session->set_flashdata("message","Record Not Inserted!");
                      redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                     }
                }else{
                  redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                }
              }


               public function addItem()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_item');
                  //$this->load->library('my_func');
                  
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                    /*  if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }*/
                     
                      $arr2[$key] = $value;             
                    }
                  }
                  $result = $this->m_item->insert($arr2);

                    if(!$result)
                     {
                      echo "<script>
                        alert('Successfully Added!');  
                      </script>";
                      redirect(site_url('purchase_v1/dashboard/page/a26'),'refresh');
                     }
                     else{
                      $this->session->set_flashdata("message","Record Not Inserted!");
                      redirect(site_url('purchase_v1/dashboard/page/a26'),'refresh');
                     }
                }else{
                  redirect(site_url('purchase_v1/dashboard/page/a26'),'refresh');
                }
              }





	}
?>
	