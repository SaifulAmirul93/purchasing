<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
	
	   	var $parent_page = "pages";
        var $component_parent="component";

	    function __construct() {
	        parent::__construct();
	        $this->load->library('session');
	    }



	    function index(){
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
      $this->_checkSession();
            //$lvl =$this->my_func->scpro_decrypt($this->session->userdata('us_lvl'));
        switch ($key) {
                case "a1" :// dashboard
                        //start added
                       $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_category');
                        $arr['enquiry'] = $this->m_purchase->countPurType(1);
                         $arr['nego'] = $this->m_purchase->countPurType(2);
                         $arr['inv'] = $this->m_purchase->countPurType(3);
                         $arr['happy'] = $this->m_purchase->countPurType(4);
                         $arr['etd'] = $this->m_purchase->countPurType(5);
                         $arr['arr'] = $this->m_purchase->countPurType(6);

                        $arr['lvl'] = $this->m_category->getLvl();
                        $arr['sup'] = $this->m_purchase->getLvl();
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/dashboard',$arr);
                        
                        
                   break;   

                  case "a21" :
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/list_purchase', true);
                        
                   break;  

                   case 'c1':
                        
                   break;

                    case "p1" :
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/list_purchase', true);
                        
                   break;  

                   case "a22" :
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
                        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_purchase',$arr);
                        
                   break; 
                     break;  

                   case "a23" :
                        $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();




                         $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_info',$arr,  true);

                       
                        
                   break;   

                    case "a24" :

                          $this->load->database();
                        $this->load->model('m_user');
                        $arr['lvl'] = $this->m_user->getLvl();

                     


                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_user',$arr);
                        
                   break; 

                     case "a25" :
                        $this->load->database();
                        $this->load->model('m_user');
                        
                       $arr['arr'] = $this->m_user->getAll();
                        

                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/user_list', $arr);
                        
                   break;   

                    case "a26" :
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['lvl'] = $this->m_item->getLvl();
                     
                        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_item',$arr);
                        
                   break;


                   case "e26" :
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_cat');
                        
                   break;
                     case "a27" :
                        $this->load->database();
                        $this->load->model('m_item');



                       
                         $arr['arr'] = $this->m_item->getAll();
                     



                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/item_list', $arr);
                        
                   break;
                   case "e27" :
                        $this->load->database();
                        $this->load->model('m_category');



                       
                         $arr['arr'] = $this->m_category->get();
                  



                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/cat_list', $arr);
                        
                   break;

                     case "c26" :
                  
                      if ($this->input->get('view')) {
                         $ItemId = $this->input->get('view');
                        
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['id'] = $this->input->get('view');
                        $arr['lvl'] = $this->m_item->getLvl();
                        $arr['arr'] = $this->m_item->getAll($ItemId);
                        

                      }       
                       $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_item',$arr);

                      break; 

                       case "c27" :
                       
                      if ($this->input->get('edit')) {
                         $UserId = $this->input->get('edit');
                        
                        $this->load->database();
                        $this->load->model('m_item');
                        $arr['id'] = $this->input->get('edit');
                        $arr['lvl'] = $this->m_item->getLvl();
                        $arr['arr'] = $this->m_item->getAll($UserId);
                       

                      }       
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_item',$arr);
                        

                        break;  


                        case "d27" :
                        
                      if ($this->input->get('edit')) {
                         $UserId = $this->input->get('edit');
                        
                        $this->load->database();
                        $this->load->model('m_category');
                        $arr['id'] = $this->input->get('edit');
                        
                        $arr['arr'] = $this->m_category->get($UserId);
                        

                      }       
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_cat',$arr);
                        

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
                        $this->load->database();
                        $this->load->model('m_supplier');

                        $arr = $this->m_supplier->getList();

                        $temp['arr'] = $arr;



                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/supplier_list', $temp);
                        
                   break; 
                     case "a62" :
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_supplier', true);
                        
                   break;
                     case "a29" :
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');
                        $arr['lvl'] = $this->m_project->get();
                        $arr['arr'] = $this->m_purchase->getAll();
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_purchase',$arr);
                        
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
                          //view
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

                         case "c29" :
                          //edit
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
                            $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_purchase',$arr);
                      }       

                        break;

                           case "c30" :
                          //view
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                       if ($this->input->get('view')) {
                            $PurId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
          
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
                        $this->load->view($this->parent_page.'/purchase_view',$arr);
                      }   
                      break;
                         case "s30" :
              
                      //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                       if ($this->input->get('view')) {
                            $PurId = $this->input->get('view');
                        //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                        //echo $staffId;
                            $this->load->database();
                            $this->load->model('m_purchase');
                            $this->load->model('m_item');
                            $this->load->model('m_cat');
                            $arr['cat'] = $this->m_cat->get();
                            $arr['item'] = $this->m_item->get();
                            $data=$this->m_purchase->getList($PurId);
                            $arr['arr'] = array_shift($data);
                            //$this->_show('display', $key);
                        $this->load->view($this->parent_page.'/pur_view',$arr);
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

                        if ($arr['Supplier'] == -1) {  
                            $sl = array(
                                'supplier_name' => $arr['supplier_name'],
                                'supplier_email' => $arr['supplier_email'],                              
                                'supplier_contact' => $arr['supplier_contact'],
                                'supplier_address' => $arr['supplier_address'],
                                'supplier_company' => $arr['supplier_company'],

                                
                            );
                            $this->load->model('m_supplier');
                            $arr['Supplier'] = $this->m_supplier->insert($sl);
                        }
                      
                        $purchase = array(
                            "supp_id" => $arr['Supplier'],
                            "user_id" => $this->session->userdata('us_id'),                            
                            "pur_date" => $arr['deli_date'],
                            "deli_date" => $arr['deli_date'],
                            "pr_id" => $arr['pro_id'],
                            'currency' => $arr['currency'],
                            'pay' => $arr['pay'],
                            ' prjk_id' => $arr['prjk_id'],
                            ' unit' => $arr['unit'],
                            ' gst' => $arr['gst'],
                        );
                        $pur_id = $this->m_purchase->insert($purchase);
                        $this->load->model('m_purchase_item');
                        $sizeArr = sizeof($arr['itemId']);

                        for ($i=0; $i < $sizeArr ; $i++) { 
                            $item = array(
                                'purc_id' => $pur_id,
                                'it_id' => $arr['itemId'][$i],
                                'cat_id' => $arr['cattId'][$i],
                                'pi_price' => $arr['price'][$i],
                                'pi_qty' => $arr['qty'][$i],
                                
  
                            );
                            $this->m_purchase_item->insert($item);
                        }
                        $this->session->set_flashdata('success', 'New Purchase Order successfully added');
                        redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                      }


                      break;

                      case 'z121':
                          if ($this->input->post() && $this->input->get('key')) {
                              $arr = $this->input->post();
                              $pur_id = $this->input->get('key');
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
                                        'pi_qty' => $arr['qty1'][$i]
                               
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
                                              'purc_id' => $pur_id,
                                              'it_id' => $arr['itemId'][$i],
                                              'cat_id' => $arr['cattId'][$i],
                                              'pi_price' => $arr['price'][$i],
                                              'pi_qty' => $arr['qty'][$i],
                                              
                
                                          );
                                          $this->m_purchase_item->insert($item);
                                      }
                                }
                        }

                             $order_ext = array(
                            'currency' => $arr['currency'],                          
                            'deli_date' => $arr['deli_date'],
                            'pay' => $arr['pay'],
                            'unit' => $arr['unit'],
                            'gst' => $arr['gst']
                            );
                            $orex_id = $this->m_purchase->update($order_ext , array('pur_id' => $pur_id));

                             $this->session->set_flashdata("success","Record Updated!");
                              redirect(site_url('purchase_v1/dashboard/page/a29'),'refresh');
                        }   

                      break;

                      case "acc1" :
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_project');
                        $arr['lvl'] = $this->m_project->get();
                        $arr['arr'] = $this->m_purchase->getAll();
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_acc',$arr);
                        
                   break;

                     case "d1" :
                        $this->load->database();
                        $this->load->model('m_purchase');
                        $this->load->model('m_department');
                        $arr['lvl'] = $this->m_department->getLvl();
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_project', $arr);
                        
                   break;


                   case "d2" :
                        $this->load->database();
                        $this->load->model('m_project');

                         $arr['arr'] = $this->m_project->getAll();
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/project_list', $arr);
                        
                   break;


                   case "d3" :
                   if ($this->input->get('edit')) {

                        $Pj_Id = $this->input->get('edit');

                        $this->load->database();
                        $this->load->model('m_project');
                        $this->load->model('m_department');
                        $arr['lvl'] = $this->m_department->getLvl();
                         $arr['arr'] = $this->m_project->getAll($Pj_Id);
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_project', $arr);

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
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_project', $arr);
                      } 
                   break;

                    case "u1" :
                        
                       
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/add_unit');
                        
                   break;
                   case "u2" :
                        $this->load->database();
                        $this->load->model('m_unit');

                         $arr['arr'] = $this->m_unit->get();
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/unit_list', $arr);
                        
                   break;

                   case "u3" :
                   if ($this->input->get('edit')) {

                        $un_id = $this->input->get('edit');

                        $this->load->database();
                        $this->load->model('m_unit');
                        
                         $arr['arr'] = $this->m_unit->getAll($un_id);
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/edit_unit', $arr);

                    }
                   break;
                    case "u4" :
                    if ($this->input->get('view')) {

                        $un_id = $this->input->get('view');

                        $this->load->database();
                        $this->load->model('m_unit');
                        
                         $arr['arr'] = $this->m_unit->getAll($un_id);
        
                        $this->_show('display', $key);
                        $this->load->view($this->parent_page.'/view_unit', $arr);
                      } 
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
                $this->session->set_flashdata('success' , '<b>Well done!</b> You successfully send the picture.');
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
                $this->session->set_flashdata('success' , '<b>Well done!</b> You successfully send the picture.');
                redirect(site_url('purchase_v1/dashboard/page/acc1'),'refresh');
            }else{
                $this->session->set_flashdata('warning' , '<b>Uh Crap!</b> You got Error. The image size is to big');
                redirect(site_url('purchase_v1/dashboard/page/acc1'),'refresh');
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
         public function del_email()
        {
                
                

                $this->load->database();
                $this->load->model('m_purchase');
                $cancel = $this->input->post('cancel');
                $pur_id = $this->input->post('pur_id');
                $reason = $this->input->post('reason');
                    if($reason && $pur_id)
                    {
                        if($cancel == 1)
                        {

                        //   $this->load->library('email');
                        //   $this->email->set_newline("\r\n");
                        //   $config['protocol'] = 'smtp';
                        //   $config['smtp_host'] = 'ssl://moon.sfdns.net';
                        //   $config['smtp_port'] = '465';
                        //   $config['smtp_user'] = 'epul@nastyjuice.com';
                        //   $config['smtp_from_name'] = 'epul@nastyjuice.com';
                        //   $config['smtp_pass'] = 'selasih2014';
                        //   $config['charset'] = 'utf-8';
                        //   $config['wordwrap'] = TRUE;
                        //   $config['newline'] = "\r\n";
                        //   $config['mailtype'] = 'html'; 
                          
                        //   $this->email->initialize($config);
                        //   $this->email->from($config['smtp_user'],$config['smtp_from_name']);
                        //   $this->email->to('epul@nastyjuice.com');

                        //   $arr['arr'] = array(
                            
                        //     "id" => $this->input->post('pur_id'),
                        //     "reason" => $this->input->post('reason'),
                        //      "username" => $this->session->userdata('us_username'),
                            
                            
                           
                        // );   
                          $email['fromName'] = "Nasty Juice Purchasing Department";
                          $email['fromEmail'] = "purchasing@nastyjuice.com";
                          $email['toEmail'] = "epul@nastyjuice.com";
                          $email['subject'] = 'Request For Cancel Purchase Order #'.(110000+$pur_id);
                          $email['html'] = true;
                          $email['msg']=$this->load->view('/mail/del_email',$arr,true);
           
                          // $this->email->subject('Request For Cancel Purchase Order #'.(110000+$pur_id));
                          // $content=$this->load->view('/mail/del_email',$arr,true);
                          // $msg = $content;






                          // $this->email->message($msg);
                          // //$this->email->send();
                          // $result=$this->email->send();



                          


                           $result=$this->sendEmail($email);

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
                
                
                $id = $this->input->get('del');
               
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
// http://localhost/purchase/purchase_v1/dashboard/del_purchase?del=8
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
                
                //if ($this->input->post('or_id')){
                //echo "<script>alert('test');</script>";
                //$this->load->library('my_func'); 
                $pur_id = $this->input->post('pur_id');
                //$or_id = $this->my_func->scpro_decrypt($this->input->post('or_id'));
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
                if ($this->input->post('key')) {
                  $arr = $this->input->post('key');
                  $this->load->database();
                  $this->load->model('m_supplier');
                  //$this->load->library('my_func');
                  
                    $data['supplier'] = $this->m_supplier->get($arr);
                    echo $this->load->view('pages/getAjaxSupplier', $data, TRUE);
                 
                  
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
                  $catt_id = $this->input->post('cat');
                  $item_id = $this->input->post('type');
                
                 
                  $this->load->database();
                  $this->load->model('m_item');
                  $this->load->model('m_cat');
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
                      redirect(site_url('purchase_v1/dashboard/page/a27'),'refresh');
                     }
                }else{
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
	