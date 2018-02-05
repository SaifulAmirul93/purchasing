<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
	
	   	var $parent_page = "pages";
        var $component_parent="component";

	    function __construct() {
	        parent::__construct();
	        $this->load->library('session');
	    }



        function index()
        {
	        $this->page('a1');
	    }


        private function _show($page = 'display' , $data = null , $key = 'a1')
        {
            $this->load->library('my_func');

            $link['link'] = $key;

                if (isset($data['title'])) {
                    $T['title'] = $data['title'];
                }else{
                    $T = null;
                }

	    	$this->load->view($this->component_parent.'/head', FALSE);

	    	$this->load->view($this->component_parent.'/header',$link, FALSE);

            $this->load->view($this->component_parent.'/sidemenu',$link, FALSE);

            $this->load->view($this->component_parent.'/title', $T, FALSE);

	    	$this->load->view($this->parent_page.'/'.$page, $data, FALSE);

	    	$this->load->view($this->component_parent.'/footer', FALSE);

	    }	



	    public function page($key)
    	{
                 
            $this->_checkSession();
            
        switch ($key) {
                case "a1" :// dashboard
                      

                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_category');
                        $this->load->library('my_func');
                        $arr['enquiry'] = $this->m_purchase->countPurType(1);
                        $arr['nego'] = $this->m_purchase->countPurType(2);
                        $arr['inv'] = $this->m_purchase->countPurType(3);
                        $arr['happy'] = $this->m_purchase->countPurType(4);
                        $arr['etd'] = $this->m_purchase->countPurType(5);
                        $arr['arr'] = $this->m_purchase->countPurType(6);

                        $arr['lvl'] = $this->m_category->getLvl();
                        $arr['sup'] = $this->m_purchase->getLvl();

                        $data['title'] = '<i class="fa fa-fw fa-tachometer"></i> Dashboard';
                        $data['display']=$this->load->view($this->parent_page.'/dashboard',$arr,true);
                        $this->_show('display', $data , $key);
                        
                break;   

                case "a21" :
                        
                        $data['display']=$this->load->view($this->parent_page.'/list_purchase','',true);
                        $this->_show('display',  $data , $key);
                        
                break;  

                case "p1" :
                        
                        $data['display']=$this->load->view($this->parent_page.'/list_purchase','',true);
                        $this->_show('display',  $data , $key);
                break;  

                case "a22" :
                         $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_item');
                        $this->load->model('m_category');
                        $this->load->model('m_supplier');
                        $this->load->model('m_unit');
                        $this->load->model('m_ncompany');
                        $arr['prjk'] = $this->m_purchase->getPro();
                        $arr['lvl'] = $this->m_purchase->getLvl();
                        $arr['unit'] = $this->m_unit->get();
                        $arr['cat'] = $this->m_category->getAll();
                        $arr['item'] = $this->m_item->get();
                        $arr['nc'] = $this->m_ncompany->get();
                        $arr['supplier'] = $this->m_supplier->get(null , 'asc');
                        
                        $data['title'] = '<i class="fa fa-fw fa-shopping-cart"></i> Add Purchase';                        
                        
                        $data['display']=$this->load->view($this->parent_page.'/add_purchase',$arr,true);
                        $this->_show('display',  $data , $key);
                        
                break; 
                    
                case "a22.1" :
                         $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_item');
                        $this->load->model('m_cat');
                        $this->load->model('m_supplier');
                        $this->load->model('m_unit');
                        $arr['prjk'] = $this->m_purchase->getPro();
                        $arr['lvl'] = $this->m_purchase->getLvl();
                        $arr['unit'] = $this->m_unit->get();
                        $arr['cat'] = $this->m_cat->get();
                        $arr['item'] = $this->m_item->get();
                        $arr['supplier'] = $this->m_supplier->get(null , 'asc');
                        
                        $data['title'] = '<i class="fa fa-fw fa-shopping-basket"></i> Add Job Order';
                        
                        $data['display']=$this->load->view($this->parent_page.'/add_purchase_stf',$arr,true);
                        $this->_show('display',  $data , $key);
      
                break; 

                case "a23" :
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();


                        $data['title'] = '<i class="fa fa-fw fa-user"></i> User ';                        

                        $data['display']=$this->load->view($this->parent_page.'/user_info',$arr,true);
                        $this->_show('display',  $data , $key);

                       
                        
                break;   

                case "a24" :

                         $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();

                     
                        $data['title'] = '<i class="fa fa-fw fa-user"></i> Add User ';                                                

                        $data['display']=$this->load->view($this->parent_page.'/add_user',$arr,true);
                        $this->_show('display',  $data , $key);
                        
                break; 

                case "a25" :
                        $this->load->database();
                        $this->load->model('m_user');
                        $this->load->library('my_func');
                        
                        $arr['arr'] = $this->m_user->getAll();
                        
                        $data['title'] = '<i class="fa fa-fw fa-user"></i> User List';
                        
                        $data['display']=$this->load->view($this->parent_page.'/user_list', $arr,true);
                        $this->_show('display',  $data , $key);
                        
                break;   

                case "a26" :
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['lvl'] = $this->m_item->getLvl();
                     
                        $data['title'] = '<i class="fa fa-fw fa-plus-circle"></i> Add Item';
                        
                        $data['display']=$this->load->view($this->parent_page.'/add_item',$arr,true);
                        $this->_show('display',  $data ,  $key);
                        
                break;


                case "e26" :
                        $data['title'] = '<i class="fa fa-fw fa-plus-circle"></i> Add Category';
                        $data['display']=$this->load->view($this->parent_page.'/add_cat','',true);
                        $this->_show('display',  $data ,  $key);
                        
                break;
                
                case "a27" :
                        $this->load->database();
                        $this->load->model('m_item');



                       
                         $arr['arr'] = $this->m_item->getAll();
                     


                        $data['title'] = '<i class="fa fa-fw fa-list"></i> Item List';
                        $data['display']=$this->load->view($this->parent_page.'/item_list',$arr,true);
                        $this->_show('display',  $data ,  $key);
                        
                break;

                case "e27" :
                        $this->load->database();
                        $this->load->model('m_category');



                       
                         $arr['arr'] = $this->m_category->getAll();
                  


                        $data['title'] = '<i class="fa fa-fw fa-list"></i> Category List';
                        $data['display']=$this->load->view($this->parent_page.'/cat_list', $arr, true);
                        $this->_show('display',  $data , $key);
                        
                break;

                case "t1" :
                        

                        $this->load->database();
                        $this->load->model('m_type');

                         $arr['arr'] = $this->m_type->getAll();
                  
                        $data['title'] = '<i class="fa fa-fw fa-list"></i> Type List';
                        
                        $data['display']=$this->load->view($this->parent_page.'/type_list', $arr, true);
                        
                       	$this->_show('display' , $data , $key);

                break;

                case 't2':
                        $data['title'] = '<i class="fa fa-fw fa-plus-circle"></i> Add Type';
                        
                        $data['display']=$this->load->view($this->parent_page.'/add_type', '', true);
                        
                       	$this->_show('display' , $data , $key);
                break;

                case 't3':
                    
                    if ($this->input->get('view'))
                    {
                        $id = $this->input->get('view');

                        $this->load->database();
                        $this->load->model('m_type');

                        $arr['arr'] = $this->m_type->getAll($id);

                        $data['title'] = '<i class="fa fa-fw fa-eye"></i> View Type';
                        
                        $data['display']=$this->load->view($this->parent_page.'/view_type',$arr, true);
                        $this->_show('display',  $data , $key);
                      
                    }

                break;

                case 't4':
                      if ($this->input->get('edit')) 
                      {
                            $id = $this->input->get('edit');

                            $this->load->database();
                            $this->load->model('m_type');

                            $arr['arr'] = $this->m_type->getAll($id);

                            $data['title'] = '<i class="fa fa-fw fa-edit"></i> Edit Type';
                            
                            $data['display']=$this->load->view($this->parent_page.'/edit_type',$arr, true);
                            $this->_show('display',  $data , $key);
                      }
                break;

                case "c26" :
                  
                        if ($this->input->get('view')) 
                        {
                            $ItemId = $this->input->get('view');
                            
                            $this->load->database();
                            $this->load->model('m_item');
                            $arr['id'] = $this->input->get('view');
                            $arr['lvl'] = $this->m_item->getLvl();
                            $arr['arr'] = $this->m_item->getAll($ItemId);
                            
                            $data['title'] = '<i class="fa fa-fw fa-eye"></i> View Type';
                            
                            $data['display']=$this->load->view($this->parent_page.'/view_item',$arr, true);
                            $this->_show('display',  $data , $key);
                        }       
                break; 

                       case "c27" :
                       
                      if ($this->input->get('edit')) {
                         $UserId = $this->input->get('edit');
                        
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['id'] = $this->input->get('edit');
                        $arr['lvl'] = $this->m_item->getLvl();
                        $arr['arr'] = $this->m_item->getAll($UserId);
                       
                        $data['title'] = '<i class="fa fa-fw fa-edit"></i> Edit Type';
                        
                        $data['display']=$this->load->view($this->parent_page.'/edit_item',$arr, true);
                        $this->_show('display',  $data , $key);
                      }       
                        

                        

                        break;  


                        case "d27" :
                        
                      if ($this->input->get('edit')) 
                      {
                         $UserId = $this->input->get('edit');
                        
                        $this->load->database();
                        $this->load->model('m_category');
                        $arr['id'] = $this->input->get('edit');
                        
                        $arr['arr'] = $this->m_category->get($UserId);
                        
                        $data['title'] = '<i class="fa fa-fw fa-edit"></i> Edit Category';
                        
                        $data['display']=$this->load->view($this->parent_page.'/edit_cat',$arr, true);
                        $this->_show('display',  $data , $key);
                      }       
                        
                        

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

                        case "e28" :// delete
                    if ($this->input->get('delete')) {
                     $itemID = $this->input->get('delete');
                     $this->load->database();
                     $this->load->model('m_category');

                     $this->m_category->delete($itemID);
                     redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                     break;
                      } 



                    case "a6" :

                        if ($this->input->get('page')) 
                        {
                            $p = $this->input->get('page');
                        }else{
                            $p = 0;
                        }

                        $this->load->database();
                        $this->load->model('m_supplier');

                        $ver = $this->m_supplier->orderCount();


                        $arr['arr'] = $this->m_supplier->getList(10,$p);

                        $result1 = sizeof($arr['arr']);

                        $arr['page'] = $p;

                        $arr['total'] = $ver;

                        $arr['row'] = $result1;

                        $data['title'] = '<i class="fa fa-fw fa-list"></i> Supplier List';                        

                        $data['display']=$this->load->view($this->parent_page.'/supplier_list', $arr, true);
                        $this->_show('display',  $data , $key);
                        
                   break; 
                     case "a62" :
                        $data['display']=$this->load->view($this->parent_page.'/add_supplier','', true);
                        $this->_show('display',  $data , $key);
                        
                   break;
                     case "a29" :

                        if ($this->input->get('page')) 
                        {
                            $p = $this->input->get('page');
                        }else{
                            $p = 0;
                        }


                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');
                        $this->load->library('my_func');


                        $ver = $this->m_purchase->orderCount(1);
                        $arr['lvl'] = $this->m_project->get();

                        $arr['arr'] = $this->m_purchase->getAll3(10 , $p , 1);
                        $result1 = sizeof($arr['arr']);
                        $arr['page'] = $p;
                        $arr['total'] = $ver;
                        $arr['row'] = $result1;
                        $data['title'] = '<i class="fa fa-fw fa-shopping-cart"></i> Purchase List';
                        
                        $data['display']=$this->load->view($this->parent_page.'/purchase_list',$arr, true);
                        $this->_show('display',  $data , $key);
                        
                   break;

                   case "a29old" :
                        if ($this->input->get('page')) 
                        {
                            $p = $this->input->get('page');
                        }else{
                            $p = 0;
                        }


                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');


                        $ver = $this->m_purchase->orderCount(0);

                        $arr['lvl'] = $this->m_project->get();

                        $arr['arr'] = $this->m_purchase->getAll3(10 , $p , 0);
                        $result1 = sizeof($arr['arr']);
                        $arr['page'] = $p;
                        $arr['total'] = $ver;
                        $arr['row'] = $result1;
                        $data['display']=$this->load->view($this->parent_page.'/view_purchase_old' , $arr , true);
                        $this->_show('display',  $data , $key);
                        
                   break;

                   case "a30" :

                        if ($this->input->get('page')) 
                        {
                            $p = $this->input->get('page');
                        }else{
                            $p = 0;
                        }

                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');
                        $this->load->library('my_func');
                        
                        $us_id = $this->session->userdata('us_id');

                        $ver = $this->m_purchase->orderCount(1,$us_id);

                        $arr['lvl'] = $this->m_project->get();

                        $arr['arr'] = $this->m_purchase->getAll2(10 , $p ,null, 1, $us_id);

                        $result1 = sizeof($arr['arr']);

                        $arr['page'] = $p;

                        $arr['total'] = $ver;

                        $arr['row'] = $result1;

                        $data['title'] = '<i class="fa fa-fw fa-shopping-basket"></i>Job Order List';
                        
                        $data['display']=$this->load->view($this->parent_page.'/your_purchase',$arr , true);
                        $this->_show('display', $data , $key);
                        
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

                      case "a15" :// delete
                    if ($this->input->get('delete')) {
                     $proID = $this->input->get('delete');
                     $this->load->database();
                     $this->load->model('m_purchase');

                     $this->m_purchase->delete($proID);

                     $this->session->set_flashdata('success', 'Purchase Order successfully deleted');
                     redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                     break;
                      }     
                   
                    case 'c11':
                      //edit supplier
                      
                      if ($this->input->get('edit'))
                       {
                         $staffId = $this->input->get('edit');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_supplier');
                        $arr['id'] = $this->input->get('edit');
                      
                        $arr['arr'] = $this->m_supplier->getAll($staffId);
                       

                      }       
                        $data['display']=$this->load->view($this->parent_page.'/edit_supplier',$arr, true);
                        $this->_show('display', $data , $key);
                        

                        break;

                      case 'c12':
                      //view supplier
                      
                      if ($this->input->get('view')) {
                         $supplierId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                        $this->load->database();
                        $this->load->model('m_supplier');
                        $arr['id'] = $this->input->get('view');
                        $arr['arr'] = $this->m_supplier->getAll($supplierId);
                       

                      }       
                        $data['display']=$this->load->view($this->parent_page.'/view_supplier',$arr);
                        $this->_show('display', $data , $key);
                        

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
                //edit User
                      
                    if ($this->input->get('edit')) 
                    {
                        $this->load->library('my_func');
                        
                        $UserId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['id'] = $this->input->get('edit');
                        $arr['lvl'] = $this->m_user->getLvl();
                        $arr['arr'] = $this->m_user->getAll($UserId);

                            $data['title'] = '<i class="fa fa-fw fa-edit"></i>Edit User';
                        
                      
                        $data['display']=$this->load->view($this->parent_page.'/edit_user',$arr,true);
                        $this->_show('display', $data ,$key);

                    }       
                       
                        

                break;

                case "c25" :
                //view User
                      
                    if ($this->input->get('view')) 
                    {
                            $this->load->library('my_func');

                            $UserId = $this->my_func->scpro_decrypt($this->input->get('view'));
                        
                            $this->load->database();
                            $this->load->model('m_user');
                            $arr['id'] = $this->input->get('view');
                            $arr['lvl'] = $this->m_user->getLvl();
                            $arr['arr'] = $this->m_user->getAll($UserId);
                        
                            $data['title'] = '<i class="fa fa-fw fa-eye"></i>View User';
                            
                            $data['display']=$this->load->view($this->parent_page.'/view_user',$arr,true);
                            $this->_show('display', $data , $key);
                    }       

                break;

                case "c29" :
                //edit purchase
                     
                       if ($this->input->get('edit')) 
                       {
                            
                            $this->load->library('my_func');
                            $PurId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $this->load->model('m_unit');
                            $this->load->model('m_ncompany');

                            $arr['prjk'] = $this->m_purchase->getPro();
                            $arr['lvl'] = $this->m_purchase->getLvl();
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $arr['unit'] = $this->m_unit->get();
                            $arr['nc'] = $this->m_ncompany->get();
                            
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                          
                            $data['title'] = '<i class="fa fa-fw fa-edit"></i>Edit Job Order';
                            
                            $data['display']=$this->load->view($this->parent_page.'/edit_purchase',$arr,true);
                            $this->_show('display', $data , $key);

                      }       

                break;

                        case "c30" :
                          //view
                     
                       if ($this->input->get('view')) {
                            
                            $this->load->library('my_func');
                            $PurId = $this->my_func->scpro_decrypt($this->input->get('view'));
          
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $this->load->model('m_unit');
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $arr['unit'] = $this->m_unit->get();
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                            $data['title'] = '<i class="fa fa-fw fa-eye"></i>View Job Order';
                            
                            $data['display']=$this->load->view($this->parent_page.'/purchase_view',$arr,true);
                            $this->_show('display', $data , $key);

                      }   
                      break;
                      case "c30.1" :
                          //view
                     
                       if ($this->input->get('view')) {
                            
                            $this->load->library('my_func');
                            $PurId = $this->my_func->scpro_decrypt($this->input->get('view'));
          
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $this->load->model('m_unit');
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $arr['unit'] = $this->m_unit->get();
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                            $this->_show('display', $key);
                            $data['display']=$this->load->view($this->parent_page.'/purchase_view',$arr,true);
                            $this->_show('display', $data , $key);

                      }   
                      break;
                         case "s30" :
              
                      
                       if ($this->input->get('view')) {
                            $PurId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                           
                            $data['display']=$this->load->view($this->parent_page.'/pur_view',$arr,true);
                            $this->_show('display', $data , $key);

                      }       

                        break;
                        case "P01" :
                          //view
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                       if ($this->input->get('edit')) {
                            $PurId = $this->input->get('edit');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $this->load->model('m_unit');
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $arr['unit'] = $this->m_unit->get();
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                            //$this->_show('display', $key);
                        $this->load->view($this->parent_page.'/purchase_order',$arr);
                      }       

                        break;

                      case 'z11':
                      //add purchase

                      if ($this->input->post()) {
                        $arr = $this->input->post();
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->library('my_func');

                        if ($arr['Supplier'] == -1) {  
                            $sl = array(
                                'su_name' => $arr['supplier_name'],
                                'su_email' => $arr['supplier_email'],                              
                                'su_contact' => $arr['supplier_contact'],
                                'su_address' => $arr['supplier_address'],
                                'su_company' => $arr['supplier_company'],

                                
                            );
                            $this->load->model('m_supplier');
                            $arr['Supplier'] = $this->m_supplier->insert($sl);
                        }
                      
                        $purchase = array(
                            "su_id" => $arr['Supplier'],
                            "us_id" =>  $this->session->userdata('us_id'),                            
                            "pu_date" => $arr['date'],
                            "pu_deli" => $arr['deli'],
                            "pr_id" => $arr['pro_id'],
                            'pu_curr' => $arr['curr'],
                            // 'pu_pay' => $arr['pay'],
                            'pro_id' => $arr['prjk_id'],
                            'nc_id' => $arr['nc'],
                            'pu_gst' => $arr['gst'],
                            'ver' => 1
                        );
                        $pur_id = $this->m_purchase->insert($purchase);
                        $this->load->model('m_purchase_item');
                        $sizeArr = sizeof($arr['itemId']);

                        for ($i=0; $i < $sizeArr ; $i++) { 
                            $item = array(
                                'pu_id' => $pur_id,
                                'it_id' => $arr['itemId'][$i],
                                'cat_id' => $arr['cattId'][$i],
                                'pi_price' => $arr['price'][$i],
                                'un_id' => $arr['unit'][$i],
                                'pi_qty' => $arr['qty'][$i],
                                'pi_disc' => $arr['disc'][$i],
                                 
                            );
                            $this->m_purchase_item->insert($item);
                        }
                        $this->session->set_flashdata('success', 'New Purchase Order successfully added');
                        redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                      }


                      break;

                      case 'z11.1':
                      //add purchase

                      if ($this->input->post()) {
                        $arr = $this->input->post();
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->library('my_func');

                        if ($arr['Supplier'] == -1) {  
                            $sl = array(
                                'su_name' => $arr['supplier'],
                                'su_email' => $arr['email'],                              
                                'su_contact' => $arr['contact'],
                                'su_address' => $arr['address'],
                                'su_company' => $arr['company'],

                                
                            );
                            $this->load->model('m_supplier');
                            $arr['Supplier'] = $this->m_supplier->insert($sl);
                        }
                      
                        $purchase = array(
                            "su_id" => $arr['Supplier'],
                            "us_id" =>  $this->session->userdata('us_id'),                            
                            "pu_date" => $arr['date'],
                            "pu_deli" => $arr['deli'],
                            "pr_id" => 1,
                            'pu_curr' => $arr['curr'],
                            'prj_id' => $arr['project'],
                            'pu_gst' => $arr['gst'],
                            'ver' => 1
                        );
                        $pu_id = $this->m_purchase->insert($purchase);

                        $this->load->model('m_purchase_item');
                        $sizeArr = sizeof($arr['itemId']);

                        for ($i=0; $i < $sizeArr ; $i++) { 
                            $item = array(
                                'pu_id' => $pu_id,
                                'it_id' => $arr['itemId'][$i],
                                'cat_id' => $arr['cattId'][$i],
                                'pi_price' => $arr['price'][$i],
                                'pi_qty' => $arr['qty'][$i],
                                'un_id' => $arr['unit'][$i],
                                'pu_disc' => $arr['disc'][$i],
                                
  
                            );
                            $this->m_purchase_item->insert($item);
                        }
                        $this->session->set_flashdata('success', 'New Purchase Order successfully added');
                        redirect(site_url('purchase_v1/dashboard/page/a30'),'refresh');
                      }


                      break;


                      case 'z121':
                          if ($this->input->post() && $this->input->get('key')) {
                              $this->load->library('my_func');

                              $arr = $this->input->post();
                              $pur_id = $this->my_func->scpro_decrypt($this->input->get('key'));
                              $this->load->database();
                              $this->load->model('m_purchase');
                              $this->load->model('m_purchase_item');


                              //$sizeArr = sizeof($arr['itemId']);

                        if (isset($arr['idE'])) {
                            if (sizeof($arr['idE']) != 0) {
                                for ($i=0; $i < sizeof($arr['idE']); $i++) { 
                                    $pi_id = $arr['idE'][$i];
                                    $temp = array(
                                        'pi_price' => $arr['price1'][$i],
                                        'un_id' => $arr['unit1'][$i],
                                        'pi_qty' => $arr['qty1'][$i],
                                        'pi_disc' => $arr['disc1'][$i]
                               
                                    );
                                    $this->m_purchase_item->update($temp , $pi_id);
                                }   
                            }   
                        }
                        if (isset($arr['itemId'])) 
                        { 
                                $sizeArr = sizeof($arr['itemId']);
                                if (sizeof($arr['itemId'])) 
                                { 
                                      for ($i=0; $i < $sizeArr ; $i++) 
                                      { 
                                          $item = array(
                                            'pu_id' => $pur_id,
                                            'it_id' => $arr['itemId'][$i],
                                            'cat_id' => $arr['cattId'][$i],
                                            'pi_price' => $arr['price'][$i],
                                            'un_id' => $arr['unit'][$i],
                                            'pi_qty' => $arr['qty'][$i],
                                            'pi_disc' => $arr['disc'][$i]
                                              
                
                                          );
                                          $this->m_purchase_item->insert($item);
                                      }
                                }
                        }

                             $order_ext = array(
                            "su_id" => $arr['Supplier'],
                            'pu_curr' => $arr['currency'],                          
                            'pu_deli' => $arr['deli_date'],
                            // 'pu_pay' => $arr['pay'],
                            'nc_id' => $arr['nc'],
                            'pu_gst' => $arr['gst'],
                            'pro_id' => $arr['prjk_id']
                            );
                            $orex_id = $this->m_purchase->update($order_ext , array('pu_id' => $pur_id));

                             $this->session->set_flashdata("success","Record Updated!");
                              redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                        }   

                      break;

                      case "acc1" :

                         if ($this->input->get('page')) 
                        {
                            $p = $this->input->get('page');
                        }else{
                            $p = 0;
                        }


                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');


                        $ver = $this->m_purchase->orderCount(1,null,3);


                        $arr['lvl'] = $this->m_project->get();

                        $arr['arr'] = $this->m_purchase->getAll2(10,$p,3,1);

                        $result1 = sizeof($arr['arr']);

                        $arr['page'] = $p;

                        $arr['total'] = $ver;

                        $arr['row'] = $result1;

                        $data['title'] = '<i class="fa fa-fw fa-calculator"></i> Purchase Order List';
                        
                        $data['display']=$this->load->view($this->parent_page.'/view_acc',$arr,true);
                        $this->_show('display', $data , $key);
                        
                   break;

                   case "acc1Old" :
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');
                        $ul_id=$this->session->userdata('ul_id');
                        $arr['lvl'] = $this->m_project->get();
                        $arr['arr'] = $this->m_purchase->getAll($ul_id,0);
                        $data['display']=$this->load->view($this->parent_page.'/view_acc_old',$arr,true);
                        $this->_show('display', $data , $key);
                        
                   break;

                     case "d1" :
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_department');
                        $arr['lvl'] = $this->m_department->getLvl();
                        $data['display']=$this->load->view($this->parent_page.'/add_project', $arr,true);
                        $this->_show('display', $data , $key);
                        
                   break;


                   case "d2" :
                        //project list
                        $this->load->database();
                        $this->load->model('m_project');

                        $arr['arr'] = $this->m_project->getAll();
        
                        $data['title'] = '<i class="fa fa-fw fa-tasks"></i> Project List';

                        $data['display']=$this->load->view($this->parent_page.'/project_list', $arr,true);
                        $this->_show('display', $data , $key);
                        
                   break;


                   case "d3" :
                   if ($this->input->get('edit')) {

                        $Pj_Id = $this->input->get('edit');

                        $this->load->database();
                        $this->load->model('m_project');
                        $this->load->model('m_department');
                        $arr['lvl'] = $this->m_department->getLvl();
                        $arr['arr'] = $this->m_project->getAll($Pj_Id);

                        $data['title'] = '<i class="fa fa-fw fa-edit"></i> Edit Project';                        
        
                        $data['display']=$this->load->view($this->parent_page.'/edit_project', $arr,true);
                        $this->_show('display', $data , $key);

                    }
                   break;

                    case "d4" :
                    if ($this->input->get('view')) {

                        $Pj_Id = $this->input->get('view');

                        $this->load->database();
                        $this->load->model('m_project');
                        $this->load->model('m_department');
                        $arr['lvl'] = $this->m_department->getLvl();
                        $arr['arr'] = $this->m_project->getAll($Pj_Id);

                        $data['title'] = '<i class="fa fa-fw fa-eye"></i> View Project';
                         
        
                        $data['display']=$this->load->view($this->parent_page.'/view_project', $arr,true);
                        $this->_show('display', $data , $key);

                      } 
                   break;

                    case "u1" :
                        
                        
                        $data['title'] = '<i class="fa fa-fw fa-plus-circle"></i> Add Quantity Unit';
                       
                        $data['display']=$this->load->view($this->parent_page.'/add_unit','',true);
                        $this->_show('display', $data , $key);
                        
                   break;
                   case "u2" :
                        $this->load->database();
                        $this->load->model('m_unit');

                        $arr['arr'] = $this->m_unit->get();

                        $data['title'] = '<i class="fa fa-fw fa-balance-scale"></i> Quantity Unit List';
                        $data['display']=$this->load->view($this->parent_page.'/unit_list', $arr,true);
                        $this->_show('display', $data , $key);
                        
                   break;

                   case "u3" :
                   if ($this->input->get('edit')) {

                        $un_id = $this->input->get('edit');

                        $this->load->database();
                        $this->load->model('m_unit');
                        
                        $arr['arr'] = $this->m_unit->getAll($un_id);

                        $data['title'] = '<i class="fa fa-fw fa-edit"></i>Edit Quantity Unit';
                        
                        $data['display']=$this->load->view($this->parent_page.'/edit_unit', $arr,true);
                        $this->_show('display', $data , $key);

                    }
                   break;
                    case "u4" :
                    if ($this->input->get('view')) {

                        $un_id = $this->input->get('view');

                        $this->load->database();
                        $this->load->model('m_unit');
                        
                         $arr['arr'] = $this->m_unit->getAll($un_id);
                        $data['title'] = '<i class="fa fa-fw fa-eye"></i>View Quantity Unit';
                        
                        $data['display']=$this->load->view($this->parent_page.'/view_unit', $arr,true);
                        $this->_show('display', $data , $key);

                      } 
                     break;
                    case 'k1':

                        $this->_loadCrud();
                        $crud = new grocery_CRUD();
                        // $crud->set_model('m_ncompany');
                        $crud->set_table('nasty_company');
                        $crud->set_subject('Nasty Company');
                        $crud->required_fields('nc_name');
                        $crud->columns('nc_id','nc_name');

                        $crud->display_as('nc_id','No')
                        ->display_as('nc_name','Company Name');


                        $output = $crud->render();
                        $data['title'] = '<i class="fa fa-fw fa-list"></i>Nasty Company';
                        
                        $data['display'] = $this->load->view($this->parent_page.'/crud' , $output , true);
		    		    $this->_show('display' , $data , $key);       


                    break;
                  
                    default:
                        $this->_show();
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
                      $this->session->set_flashdata('error', 'Supplier details not updated');
                      redirect(site_url('purchase_v1/dashboard/page/a6'),'refresh');
                     }
        
        }else{
          $this->session->set_flashdata('success', 'Supplier details updated');
          redirect(site_url('purchase_v1/dashboard/page/a6'),'refresh');
        }
      }
    


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

              public function addProject()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_project');
                  //$this->load->library('my_func');
                  
                  $arr2 = array(
                            
                            "project_code" => $arr['code'],                            
                            "project_name" => $arr['name'],
                            "dt_id" => $arr['department'],
                            "incharge" => $arr['incharge']
                        );
                  $result = $this->m_project->insert($arr2);
                  if($result)
                  {
                  $this->session->set_flashdata('success', 'Project details are successfully inserted');
                  redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                  }
                  else
                  {
                  $this->session->set_flashdata('error', 'Project details are not inserted');
                  redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                  }
                }
              }
              public function editProject()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_project');
                  //$this->load->library('my_func');
                  $id=$arr['id'];
                  $arr2 = array(
                            
                            "project_code" => $arr['code'],                            
                            "project_name" => $arr['name'],
                            "dt_id" => $arr['department'],
                            "incharge" => $arr['incharge']
                        );
                  $result = $this->m_project->update($arr2 , $id);
                  if($result)
                  {
                  $this->session->set_flashdata('success', 'Project details are successfully updated');
                  redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                  }
                  else
                  {
                  $this->session->set_flashdata('error', 'Project details are not updated');
                  redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                  }




                }
              }
              public function editType()
              {
                    if ($this->input->post()) 
                    {
                          $id = $this->input->post('id');

                          $this->load->database();
                          $this->load->model('m_type');

                          $arr = $this->input->post();

                          $arr2 = array(
                            'ty_desc' => $arr['desc'],
                            'ty_color' => $arr['color'] );

                          $result = $this->m_type->update($arr2 , $id);

                          $this->session->set_flashdata('success', 'Type details are successfully updated');
                          redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                        
                      
                    }
                    else
                    {
                          $this->session->set_flashdata('error', 'Type details are not updated');
                          redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                    }
              }
              public function addUnit()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_unit');
                  //$this->load->library('my_func');
                  
                  $arr2 = array(
                            
                                                      
                            "un_desc" => $arr['unit']
                            
                        );
                  $result = $this->m_unit->insert($arr2);
                  if($result)
                  {
                  $this->session->set_flashdata('success', 'Unit quantity are successfully inserted');
                  redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                  }
                  else
                  {
                  $this->session->set_flashdata('error', 'Unit quantity are not inserted');
                  redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                  }
                }
              }

               public function editUnit()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_unit');
                  //$this->load->library('my_func');
                  $id=$arr['id'];
                  $arr2 = array(
                            
                                                      
                            "un_desc" => $arr['unit']
                            
                        );
                  $result = $this->m_unit->update($arr2 , $id);
                  if($result)
                  {
                  $this->session->set_flashdata('success', 'Unit quantity are successfully updated');
                  redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                  }
                  else
                  {
                  $this->session->set_flashdata('error', 'Unit quantity are not updated');
                  redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                  }




                }
              }

        public function callback_col_id($value, $primary_key)
        {
            return '#'.(100+$value);
        }


        public function getAjaxUpload()
        {
                        //$this->_show('display', $key);
                        
                            $arr = $this->input->post();
                            $this->load->database();
                            $this->load->model('m_picture');
                            $temp = array(
                                "ne_id" =>$this->input->post('pur_id')
                            );
                        $arr['img'] = $this->m_picture->getPaid($temp);   
                        echo $this->load->view('pages/getAjaxUpload', $arr, TRUE);
                        //$this->load->view($this->parent_page.'/getAjaxUpload');
                      
        }
          public function getAjaxUpload2()
        {
                        //$this->_show('display', $key);
                        
                            $arr = $this->input->post();
                            $this->load->database();
                            $this->load->model('m_payment');
                            $temp = array(
                                "ny_id" =>$this->input->post('pur_id')
                            );
                        $arr['img'] = $this->m_payment->getPaid($temp);   
                        echo $this->load->view('pages/getAjaxUpload2', $arr, TRUE);
                        //$this->load->view($this->parent_page.'/getAjaxUpload');
                      
        }

        public function uploadPaid()
        {


            if ($this->input->post()) {
               

                $arr = $this->input->post();                
                $this->load->database();
                $this->load->model('m_picture');
                $this->load->model('m_purchase');
                //$this->load->library('my_func');
                $this->load->library('upload');
               


                $config = array(
                'upload_path' => "./dist/invoice/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "4000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1600",
                'max_width' => "1600",
                'encrypt_name' => true
                );
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $pur_id = $this->input->post('pur_id');
                $img_background = $this->input->post('fileImg');


                 $result2=$this->upload->do_upload('fileImg');
                 $data = $this->upload->data();
                 $background="dist/invoice/".$data['raw_name'].$data['file_ext'];
               

                




                 $arr2 = array(
                            
                            "img_url" => $background,
                            "ne_id" => $arr['pur_id'] 
                            
                            
                           
                        );           
                
                $result=$this->m_purchase->updateInv(1, $pur_id);
                $this->m_picture->insert($arr2);
                $this->session->set_flashdata('success' , '<b>Well done!</b> You successfully send the document.');
                redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
            }else{
                $this->session->set_flashdata('warning' , '<b>Uh Crap!</b> You got Error. The image size is to big');
                redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
            }
        


            
    
        }
        public function uploadPaid2()
        {


            if ($this->input->post()) {
               

                $arr = $this->input->post();                
                $this->load->database();
                $this->load->model('m_payment');
                $this->load->model('m_purchase');
                //$this->load->library('my_func');
                $this->load->library('upload');
               


                $config = array(
                'upload_path' => "./dist/payment/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "4000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1600",
                'max_width' => "1600",
                'encrypt_name' => true
                );
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $pur_id = $this->input->post('pur_id');
                $img_background = $this->input->post('fileImg');


                 $result2=$this->upload->do_upload('fileImg');
                 $data = $this->upload->data();
                 $background="dist/payment/".$data['raw_name'].$data['file_ext'];
               

                




                 $arr2 = array(
                            
                            "image_url" => $background,
                            "ny_id" => $arr['pur_id'] 
                            
                            
                           
                        );           
                
               //$result=$this->m_purchase->updateInv(1, $pur_id);
                $this->m_payment->insert($arr2);
                $this->session->set_flashdata('success' , '<b>Well done!</b> You successfully send the document.');
                redirect(site_url('purchase_v1/dashboard/page/acc1'),'refresh');
            }else{
                $this->session->set_flashdata('warning' , '<b>Uh Crap!</b> You got Error. The image size is to big');
                redirect(site_url('purchase_v1/dashboard/page/acc1'),'refresh');
            }   
    
        }
        public function PO()
        {
              if ($this->input->get('po')) 
                  {
                    $this->load->library('my_func');
                    
                    $PurId = $this->my_func->scpro_decrypt($this->input->get('po'));
                              
                    $this->load->database();
                    $this->load->model('m_purchase');
                    $this->load->model('m_item');
                    $this->load->model('m_cat');
                    $this->load->model('m_unit');
                    $arr['cat'] = $this->m_cat->get();
                    $arr['item'] = $this->m_item->get();
                    $arr['unit'] = $this->m_unit->get();
                    $data=$this->m_purchase->getList($PurId);
                    $arr['arr'] = array_shift($data);
                                   
                    $this->load->view($this->parent_page.'/purchase_order',$arr);
                  }  
        }   



               public function change_pr_id()
        {
                
                $pur_id = $this->input->post('pur_id');
                $pr_id = $this->input->post('pr_id');
                $this->load->database();
                $this->load->model('m_purchase');


                 
                    $result=$this->m_purchase->updatePR($pr_id, $pur_id);
                    if($result){
                    $this->session->set_flashdata('success', 'Your order status are updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Your order status are not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
          
        }

        public function getAjaxSearch()
              {
                 
                  if ($this->input->post('cat_id')) {
                  $cat_id = $this->input->post('cat_id');


                  
                   $this->load->database();

                  $this->load->model('m_item');
                  if ($cat_id == -1) {
                      $type['cat'] = $cat_id;
                  } else {

                      $type['item'] = $this->m_item->getList($cat_id);
                       
                  
                      $type['cat'] = $cat_id;
                    
                  }         
                  
                  $this->load->view($this->parent_page."/getAjaxSearch",$type );
                }
              }
              public function getAjaxGraph2()
              {
                  $arr1 = $this->input->post();
                  $this->load->database();
                  $this->load->model('m_item');
                  $this->load->model('m_category');
                  $this->load->model('m_supplier');
                  $arr['cat'] = $this->m_category->getName($arr1['cat']);
                  $arr['item'] = $this->m_item->getName($arr1['item']);
                  $arr['supp'] = $this->m_supplier->getName($arr1['supp']);
                  
                
                  $arr['arr'] = $this->m_item->totalByItem($arr1['year1'] , $arr1['month1'] , $arr1['cat'] , $arr1['item'] , $arr1['supp']);  

                  $arr['arr2'] = $this->m_item->totalByValue($arr1['year1'] , $arr1['month1'] , $arr1['cat'] , $arr1['item'], $arr1['supp']);                      
              
                 $this->load->view($this->parent_page.'/getAjaxGraph2', $arr);
              }
        public function testmail()
        {
              
                   $this->load->view('/mail/del_email');
                    
        }
        public function testmail2()
        {
              
                   $this->load->view('/mail/app_email');
                    
        }
        public function testmail3()
        {
              
                   $this->load->view('/mail/pur_email');
                    
        }
         public function del_email()
        {
                
                

                $this->load->database();
                $this->load->model('m_purchase');
                $this->load->library('my_func');
                $cancel = $this->input->post('cancel');
                $pur_id = $this->my_func->scpro_decrypt($this->input->post('pur_id'));
                $reason = $this->input->post('reason');
                    if($reason && $pur_id)
                    {
                        if($cancel == 1)
                        {

                          $this->load->library('email');
                          $this->email->set_newline("\r\n");
                          $config['protocol'] = 'smtp';
                          $config['smtp_host'] = 'ssl://moon.sfdns.net';
                          $config['smtp_port'] = '465';
                          $config['smtp_user'] = 'epul@nastyjuice.com';
                          $config['smtp_from_name'] = 'epul@nastyjuice.com';
                          $config['smtp_pass'] = 'selasih2014';
                          $config['charset'] = 'utf-8';
                          $config['wordwrap'] = TRUE;
                          $config['newline'] = "\r\n";
                          $config['mailtype'] = 'html'; 
                          
                          $this->email->initialize($config);
                          $this->email->from($config['smtp_user'],$config['smtp_from_name']);
                          $this->email->to('epul@nastyjuice.com');

                          $arr['arr'] = array(
                            
                            "id" => $pur_id,
                            "reason" => $this->input->post('reason'),
                             "username" => $this->session->userdata('us_username'),
                            
                            
                           
                        );   
                          // $email['fromName'] = "Nasty Juice Purchasing Department";
                          // $email['fromEmail'] = "purchasing@nastyjuice.com";
                          // $email['toEmail'] = "epul@nastyjuice.com";
                          // $email['subject'] = 'Request For Cancel Purchase Order #'.(110000+$pur_id);
                          // $email['html'] = true;
                          // $email['msg']=$this->load->view('/mail/del_email',$arr,true);
           
                          $this->email->subject('Request For Cancel Purchase Order #'.(110000+$pur_id));
                          $content=$this->load->view('/mail/del_email',$arr,true);
                          $this->email->message($content);
                          $result=$this->email->send();



                          


                           //$result=$this->sendEmail($email);

                            if($result)
                            {
                            $this->session->set_flashdata('success', 'Your request are successfully send to the administrator');
                            redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                            }
                            else
                            {
                                $this->session->set_flashdata('error', 'Your request are not successfully send to the administrator');
                            redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                            }     

                        }
                    }

                        
        }
               public function app_email()
        {
                
                $pur_id = $this->input->post('pur_id');
                $pr_id = $this->input->post('pr_id');
                $this->load->database();
                $this->load->model('m_purchase');
                $this->load->library('email');
                $this->load->library('my_func');
                $this->email->set_newline("\r\n");

                          $config['protocol'] = 'smtp';
                          $config['smtp_host'] = 'ssl://moon.sfdns.net';
                          $config['smtp_port'] = '465';
                          $config['smtp_user'] = 'epul@nastyjuice.com';
                          $config['smtp_from_name'] = 'epul@nastyjuice.com';
                          $config['smtp_pass'] = 'selasih2014';
                          $config['charset'] = 'utf-8';
                          $config['wordwrap'] = TRUE;
                          $config['newline'] = "\r\n";
                          $config['mailtype'] = 'html'; 
                          
                          $this->email->initialize($config);
                          $this->email->from($config['smtp_user'],$config['smtp_from_name']);
                          $this->email->to('epul@nastyjuice.com');

                          $arr['arr'] = array(
                            
                            "id" => $this->input->post('pur_id'),
                             "username" => $this->session->userdata('us_username')   
                           
                        );   

                          $this->email->subject('Request For Approval Purchase Order #'.(110000+$pur_id));
                          $content=$this->load->view('/mail/app_email',$arr,true);

                          $this->email->message($content);
                          $this->email->send();
               

                 
                    $result=$this->m_purchase->updatePR($pr_id, $pur_id);
                    if($result){
                    $this->session->set_flashdata('info', 'Your request are successfully send to the administrator');
                    // $this->session->set_flashdata('success', 'Your order status are updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Your order status are not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
          
        }

        public function acc_email()
        {
                
                $pur_id = $this->input->post('pur_id');
                $pr_id = $this->input->post('pr_id');
                $this->load->database();
                $this->load->model('m_purchase');
                $this->load->library('email');
                $this->email->set_newline("\r\n");

                          $config['protocol'] = 'smtp';
                          $config['smtp_host'] = 'ssl://moon.sfdns.net';
                          $config['smtp_port'] = '465';
                          $config['smtp_user'] = 'epul@nastyjuice.com';
                          $config['smtp_from_name'] = 'epul@nastyjuice.com';
                          $config['smtp_pass'] = 'selasih2014';
                          $config['charset'] = 'utf-8';
                          $config['wordwrap'] = TRUE;
                          $config['newline'] = "\r\n";
                          $config['mailtype'] = 'html'; 
                          
                          $this->email->initialize($config);
                          $this->email->from($config['smtp_user'],$config['smtp_from_name']);
                          $this->email->to('epul@nastyjuice.com');

                          $arr['arr'] = array(
                            
                            "id" => $this->input->post('pur_id'),
                             "username" => $this->session->userdata('us_username')   
                           
                        );   

                          $this->email->subject('Request For Payment Purchase Order #'.(110000+$pur_id));
                          $content=$this->load->view('/mail/acc_email',$arr,true);

                          $this->email->message($content);
                          $this->email->send();
               

                 
                    $result=$this->m_purchase->updatePR($pr_id, $pur_id);
                    if($result){
                    $this->session->set_flashdata('info', 'Your request are successfully send to the account department');
                    $this->session->set_flashdata('success', 'Your order status are updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Your order status are not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
          
        }

        public function sendEmail($email = null){            
            if ($email != null && is_array($email)) {
                $this->load->library('email');

                $this->email->from($email['fromEmail'], $email['fromName']);
                if(isset($email['toEmail'])){
                    if (is_array($email['toEmail'])) {
                        foreach ($email['toEmail'] as $key => $toEmail) {
                            $this->email->to($toEmail);
                        }
                    }else{
                        $this->email->to($email['toEmail']);
                    }
                }else{
                    $this->session->set_flashdata('error', 'Please set to->email');
                    return false;
                }
                if (isset($email['toCc'])) {
                    if (is_array($email['toCc'])) {
                        foreach ($email['toCc'] as $key) {
                            $this->email->cc($key);
                        }
                    }else{
                        $this->email->cc($email['toCc']); 
                    }
                }                  
                if (isset($email['toBcc'])) {
                    if (is_array($email['toBcc'])) {
                        foreach ($email['toBcc'] as $key) {
                            $this->email->bcc($key);
                        }
                    }else{
                        $this->email->bcc($email['toBcc']); 
                    }
                }
                $this->email->subject($email['subject']);
                $this->email->message($email['msg']);  
                if (isset($email['html'])) {
                $this->email->set_mailtype('html');
            }
                if($this->email->send()){
                    $this->session->set_flashdata('info', "Successfully Send the Notification");
                }else{
                    $this->session->set_flashdata('Warning', "Unable To send The email");
                }
                //$msg = $this->email->print_debugger();
                
                return true;
            }
            return false;         
        }



         public function del_purchase()
        {
                
                $this->load->library('my_func');

                $id = $this->my_func->scpro_decrypt($this->input->get('del'));
               
                $this->load->database();
                $this->load->model('m_purchase');

                    $result=$this->m_purchase->updatePR(7, $id);
                    if($result)
                    {
                    $this->session->set_flashdata('success', 'Purchase order successfully deleted');
                    redirect(site_url(''),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Purchase order are not deleted');
                    redirect(site_url(''),'refresh');
                    }           
        }

         public function app_purchase()
        {
                $this->load->library('my_func');
                
                $id = $this->my_func->scpro_decrypt($this->input->get('app'));
               
                $this->load->database();
                $this->load->model('m_purchase');

                    $result=$this->m_purchase->updatePR(3, $id);
                    if($result)
                    {


                    $this->load->library('email');
                    $this->email->set_newline("\r\n");

                          $config['protocol'] = 'smtp';
                          $config['smtp_host'] = 'ssl://moon.sfdns.net';
                          $config['smtp_port'] = '465';
                          $config['smtp_user'] = 'epul@nastyjuice.com';
                          $config['smtp_from_name'] = 'epul@nastyjuice.com';
                          $config['smtp_pass'] = 'selasih2014';
                          $config['charset'] = 'utf-8';
                          $config['wordwrap'] = TRUE;
                          $config['newline'] = "\r\n";
                          $config['mailtype'] = 'html'; 
                          
                          $this->email->initialize($config);
                          $this->email->from($config['smtp_user'],$config['smtp_from_name']);
                          $this->email->to('epul@nastyjuice.com');

                          $arr['arr'] = array(
                            
                            "id" => $id,
                             "username" => $this->session->userdata('us_username')   
                           
                        );   

                          $this->email->subject('Your purchase order is already approved #'.(110000+$id));
                          $content=$this->load->view('/mail/pur_email',$arr,true);

                          $this->email->message($content);
                          $this->email->send();





                    $this->session->set_flashdata('success', 'Purchase order are successfully approved.');
                    redirect(site_url(''),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Purchase order are not approved.');
                    redirect(site_url(''),'refresh');
                    }           
        }

        private function _loadCrud()
    	{
    		$this->load->database();
    		$this->load->library('grocery_CRUD');
    	}

        public function del_item()
        { 
                      
                      $pj_id = $this->input->post('pj');
                      
                      $del_id = $this->input->post('del');  
                      $this->load->database();

                      $this->load->model('m_project');
                  

                          $arr = $this->m_project->getAll($pj_id);

                         

                          $result=$this->m_project->del($del_id, $pj_id);
                          if($result)
                          {
                          
                          $this->session->set_flashdata('success', 'Project are successfully deleted');
                          redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                          }
                          else
                          {
                              $this->session->set_flashdata('error', 'Project are not deleted');
                          redirect(site_url('purchase_v1/dashboard/page/d2'),'refresh');
                          }           
          }

          public function del_type()
        { 
                    if($this->input->post())
                    {
                      $id = $this->input->post('id');
                      
                      $del = $this->input->post('del');  
                      $this->load->database();

                      $this->load->model('m_type');
                
                      $result=$this->m_type->del($del, $id);
                       
                          
                      $this->session->set_flashdata('success', 'Type are successfully deleted');
                      redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                    }
                    else
                    {
                      $this->session->set_flashdata('error', 'Type are not deleted');
                      redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                    }           
          }

                public function del_unit()
                { 
                      
                      $un_id = $this->input->post('un');
                      
                      $del_id = $this->input->post('del');  
                      $this->load->database();

                      $this->load->model('m_unit');
                  


                          $result=$this->m_unit->del($del_id, $un_id);
                          if($result)
                          {
                          
                          $this->session->set_flashdata('success', 'Project are successfully deleted');
                          redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                          }
                          else
                          {
                              $this->session->set_flashdata('error', 'Project are not deleted');
                          redirect(site_url('purchase_v1/dashboard/page/u2'),'refresh');
                          }           
                }

               public function change_pay()
                {
                 
                $pur_id = $this->input->post('pur_id');
                
                $pay = $this->input->post('pay');
                $this->load->database();
                $this->load->model('m_purchase');

               
/*
                  1 - New Order
                    2 - In Progress
                    3 - Complete
                    4 - Unconfirm
                    5 - Cancel
                    6 - Cancel In Progress
                    7 - On Hold In Progress
                    8 - ROS
                    9 - DOC
                    10 - RTS
                    11 - Shipping
                    12 - Arrived
                    13 - Return */
                    $result=$this->m_purchase->updatePay($pay, $pur_id);
                    if($result){
                    $this->session->set_flashdata('success', 'Your order status is updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Your order status is not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                    }

               

                    
                     }

              public function updateUser()
              {
                      if ($this->input->post()) {
                      $arr = $this->input->post();          
                      $this->load->database();
                      $this->load->model('m_user');
                      $this->load->library('my_func');
                      foreach ($arr as $key => $value) {
                        if ($value != null) {
                          if ($key == 'us_pass') {
                            $value = $this->my_func->scpro_encrypt($value);
                          }
                          if ($key == 'id') {
                            $id = $this->my_func->scpro_decrypt($value);
                          }else{
                            $arr2[$key] = $value;
                          }             
                        }
                      }

                      $result = $this->m_user->update($arr2 , $id);
                      if($result){
                    $this->session->set_flashdata('success', 'User details are updated');
                    redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'User details are not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                    }

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
                      
                          
                      

                    if($result){
                    $this->session->set_flashdata('success', 'Item details is updated');
                    redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Item details is not updated');
                    redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                    }
               
                    
                    }
                    
            }
             public function updateCat()
              {
                      if (
                        $this->input->post()) {
                      $arr = $this->input->post();          
                      $this->load->database();
                      $this->load->model('m_category');
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
                      $result = $this->m_category->update($arr2 , $id);
                      
                          
                      redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                  /*    else{
                        $this->session->set_flashdata("message","Record Not Updated!");
                                  redirect(site_url('purchase_v1/dashboard/page/a25'),'refresh');
                                  
                      }*/
                    
                    }else{
                      redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                    }
            }

              public function getAjaxSupplier()
              {
                if ($this->input->post('key')) 
                {
                  $arr = $this->input->post('key');
                  $this->load->database();
                  $this->load->model('m_supplier');
                  //$this->load->library('my_func');
                  
                    $data['supplier'] = $this->m_supplier->get($arr);
                    echo $this->load->view('pages/getAjaxSupplier', $data, TRUE);   
                }     
              }

              public function getAjaxSupplier2()
              {
                if ($this->input->post('key')) {

                  $this->load->library('my_func');

                  $arr = $this->input->post('key');

                  $id= $this->input->post('i');
                  $this->load->database();
                  $this->load->model('m_supplier');
                  $this->load->model('m_purchase');
                  
                    $arr1=$this->m_purchase->getList($id);
                    $data['arr'] = array_shift($arr1);

                    $data['supplier'] = $this->m_supplier->get($arr);
                    echo $this->load->view('pages/getAjaxSupplier2', $data, TRUE);
                 
                  
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
                     
                  }         
                  
                  $this->load->view($this->parent_page."/getAjaxType", $type );
                }
              }

              public function getAjaxItemList()
              {
         
                
                $catt_id = $this->input->post('cat');
                $item_id = $this->input->post('type');

                

                
                  
                $this->load->database(); 
                $this->load->model('m_unit');
                $this->load->model('m_item');
                $this->load->model('m_cat');
                $temp['unit'] = $this->m_unit->get(); 
                $temp['cat'] = $this->m_cat->get($catt_id);
                $temp['item'] = $this->m_item->get($item_id);
                $temp['num'] = $this->input->post('num');
                $this->load->view($this->parent_page."/getAjaxItem", $temp);
              }

            

              public function addUser()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_user');
                  $this->load->library('my_func');

                  $arr2 = array(
                            "us_fname" => $arr['us_fname'],
                            "us_lname" => $arr['us_lname'],                            
                            "us_username" => $arr['us_username'],
                            "us_email" => $arr['us_email'],
                            "us_pass" => $this->my_func->scpro_encrypt($arr['us_pass']),
                            "ul_id" => $arr['ul_id']
                            
                        );

                
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

              public function addType()
              {
                if ($this->input->post()) 
                {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_type');

                  $arr2 = array(
                            "ty_desc" => $arr['desc'],
                            "ty_color" => $arr['color']
                            
                        );
                  $result = $this->m_type->insert($arr2);
                  
                  $this->session->set_flashdata('success', 'Item are successfully added');

                  redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                 
                }
                else {
                  $this->session->set_flashdata('error', 'Item are not added');

                  redirect(site_url('purchase_v1/dashboard/page/t1'),'refresh');
                }
              }

               public function addItem()
              {
                if ($this->input->post()) 
                {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_item');
                  //$this->load->library('my_func');
                  
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                  
                      $arr2[$key] = $value;             
                    }
                  }
                  $this->m_item->insert($arr2);

                 
                    $this->session->set_flashdata('success', 'Item are successfully added');
                      
                    redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                }
                  
               
              }
               public function addCat()
              {
                if ($this->input->post()) {
                  $arr = $this->input->post();          
                  $this->load->database();
                  $this->load->model('m_category');
                  //$this->load->library('my_func');
                  
                  foreach ($arr as $key => $value) {
                    if ($value != null) {
                    /*  if ($key == 'pass') {
                        $value = $this->my_func->scpro_encrypt($value);
                      }*/
                     
                      $arr2[$key] = $value;             
                    }
                  }
                  $result = $this->m_category->insert($arr2);

                    if(!$result)
                     {
                      echo "<script>
                        alert('Successfully Added!');  
                      </script>";
                      redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                     }
                     else{
                      $this->session->set_flashdata("message","Record Not Inserted!");
                      redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                     }
                }else{
                  redirect(site_url('purchase_v1/dashboard/page/e27'),'refresh');
                }
              }

         public function getAjaxDelImg()
        {
            $pi_id = $this->input->post("pi_id");            
            $this->load->database();
            $this->load->model("m_picture");
            $img = $this->m_picture->get($pi_id);
            $this->load->helper('file');            
            if (unlink('./assets/uploads/img/'.$img->img_url)) {
                $this->m_picture->delete($pi_id);
                echo "true";
            }else{
                echo "false";
            }            
        }
        public function getAjaxDelImg2()
        {
            $py_id = $this->input->post("py_id");            
            $this->load->database();
            $this->load->model("m_payment");
            $img = $this->m_payment->get($py_id);
            $this->load->helper('file');            
            // if (unlink('./'.$img->image_url)) {
                $this->m_payment->delete($py_id);
            //     echo "true";
            // }else{
            //     echo "false";
            // }            
        }
        public function getAjaxDelItem()
        {
            $pi_id = $this->input->post('pi_id');
            $this->load->database();
            $this->load->model('m_purchase_item');
            $row = $this->m_purchase_item->delete($pi_id);
            echo $row;
        }


              public function getAjaxImg()
        {
            
            $ne_id =$this->input->post("pur_id");            
            $this->load->database();
            $this->load->model("m_picture");
            $arr['img'] = $this->m_picture->getPaid(array("ne_id" => $ne_id));
            echo $this->load->view('pages/getAjaxImg', $arr , TRUE);
        }

              public function getAjaxImg2()
        {
            
            $ny_id =$this->input->post("pur_id");            
            $this->load->database();
            $this->load->model("m_payment");
            $arr['img'] = $this->m_payment->getPaid(array("ny_id" => $ny_id));
            echo $this->load->view('pages/getAjaxImg2', $arr , TRUE);
        }

public function getAjaxGraph()
        {
            $this->load->database();
            $this->load->model('m_item');
            $arr['arr'] = $this->m_item->totalByOrder();
            echo $this->load->view('pages/getAjaxGraph', $arr, TRUE);
        }

        public function logout()
    {
            
            
            //$this->session->sess_destroy();
            $this->session->unset_userdata('us_id');
            $this->session->unset_userdata('ul_id');
            $this->session->unset_userdata('us_username');
            
            



            $this->load->driver('cache');
            $this->session->sess_destroy();
            $this->cache->clean();
            // $this->load->view("main/login");

            $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
            $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

            $this->session->set_flashdata('success', 'Successfully Logout!!!');

            redirect(site_url('login'),'refresh');
        
      
    }
    function _checkSession()
    {
      $this->load->database();
      $this->load->model('m_login');
      // $this->load->library('my_func');
      if ($this->session->userdata('us_id')) {
        $id = $this->session->userdata('us_id');
        if ($this->m_login->get($id)) {
          return true;
        }else{
          redirect(site_url('login'),'refresh');
        }
      }else{
        redirect(site_url('login'),'refresh');
      }     
    }





	}
?>
	