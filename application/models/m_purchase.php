<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_purchase extends CI_Model {

    /**
     * @name string TABLE_NAME Holds the name of the table in use by this model
     */
    const TABLE_NAME = 'purchase';

    /**
     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
     */
    const PRI_INDEX = 'pur_id';

    /**
     * Retrieves record(s) from the database
     *
     * @param mixed $where Optional. Retrieves only the records matching given criteria, or all records if not given.
     *                      If associative array is given, it should fit field_name=>value pattern.
     *                      If string, value will be used to match against PRI_INDEX
     * @return mixed Single record if ID is given, or array of results
     */
    public function get($where = NULL) {
        $this->db->select('*');
        $this->db->from(self::TABLE_NAME);
        if ($where !== NULL) {
            if (is_array($where)) {
                foreach ($where as $field=>$value) {
                    $this->db->where($field, $value);
                }
            } else {
                $this->db->where(self::PRI_INDEX, $where);
            }
        }
        $result = $this->db->get()->result();
        if ($result) {
            if ($where !== NULL) {
                return array_shift($result);
            } else {
                return $result;
            }
        } else {
            return false;
        }
    }
       public function countPurType($num = 0){
      
          if($num != 0){
            $this->db->where('pr_id', $num);
          $this->db->from('purchase');
          // if ($ver != -1) {
          //   $this->db->where('or_ver', $ver);
          // }
            $result = $this->db->count_all_results();
            }
            // else{
          //   $this->db->from('order');
          //   if ($ver != -1) {
          //   $this->db->where('or_ver', $ver);
          // }
          //   $result = $this->db->count_all_results();
          //   }
            return $result;
        }
    /**
     * Inserts new data into database
     *
     * @param Array $data Associative array with field_name=>value pattern to be inserted into database
     * @return mixed Inserted row ID, or false if error occured
     */
    public function insert(Array $data) {
        if ($this->db->insert(self::TABLE_NAME, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /**
     * Updates selected record in the database
     *
     * @param Array $data Associative array field_name=>value to be updated
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of affected rows by the update query
     */
    public function update(Array $data, $where = array()) {
            if (!is_array($where)) {
                $where = array(self::PRI_INDEX => $where);
            }
        $this->db->update(self::TABLE_NAME, $data, $where);
        return $this->db->affected_rows();
    }


      public function getList($where = null )
        {

            $this->db->select('*');
            $this->db->from(self::TABLE_NAME);
            if ($where !== NULL) {
                if (is_array($where)) {
                    foreach ($where as $field=>$value) {
                        $this->db->where($field, $value);
                    }
                } else {
                    $this->db->where(self::PRI_INDEX, $where);
                }
            }

            //$this->db->where(self::TABLE_NAME);
            $this->db->join('user', 'user_id = us_id', 'left');            
            $this->db->join('supplier','supp_id = supplier_id', 'left');
            $this->db->join('purchase_item' , 'pur_id = purc_id' , 'left');            
            $this->db->join('project' , 'prjk_id = projek_id' , 'left'); 
              $result = $this->db->get()->result();
              $data = array();


              foreach ($result as $key) {
                      $this->db->select('*');
                      
                        $this->db->from('purchase_item');
                        $this->db->join('category_item', 'catt_id = cat_id', 'left');
                        $this->db->join('item', 'item_id = it_id', 'left');
                        //$this->db->order_by('cat_id', 'asc');
                      
                        $this->db->where('purc_id', $key->pur_id); 
                        $res2 = $this->db->get()->result();
                      $this->db->select("us_username");
                      $this->db->from('user');
                      $this->db->where('us_id', $key->us_id);
                      $res3 = $this->db->get()->result();
                      $res3 = array_shift($res3);
                      $data[] = array(
                        'user' => $res3,
                        'purchase' => $key,
                        'item' => $res2
                      );
                        }
                        return $data;


              
            // if ($result) {
            //     if ($where !== NULL) {
            //         return array_shift($result);
            //     } else {
            //         return $result;
            //     }
            // } else {
            //     return false;
            // }
        }
        public function getSearch($where = null , $all=false )
        {



              $this->db->select('*');
            $this->db->from(self::TABLE_NAME);
            if ($where !== NULL) {
                if (is_array($where)) {
                    foreach ($where as $field=>$value) {
                        $this->db->where($field, $value);
                    }
                } else {
                    $this->db->where('prjk_id', $where);
                }
            }
            if (!$all) {
                $this->db->where('supplier_id >', 0);
            }           
            $this->db->join('supplier', 'supp_id = supplier_id', 'left');

            if (!$all) {
                $this->db->where('us_id >', 0);
            }           
            $this->db->join('user', 'user_id = us_id', 'left');

            if (!$all) {
                $this->db->where('pro_id >', 0);
            }           
            $this->db->join('process', 'pr_id = pro_id', 'left');

            if (!$all) {
                $this->db->where('projek_id >', 0);
            }           
            $this->db->join('project', 'pr_id = projek_id', 'left');
            $result = $this->db->get()->result();
            return $result;
            // if ($result) {
            //     if ($where !== NULL) {
            //         return array_shift($result);
            //     } else {
            //         return $result;
            //     }
            // } else {
            //     return false;
            // }
        }

         public function getLvl(){
            $this->db->select("*");
            $this->db->from('supplier');
            $result = $this->db->get()->result();
            return $result;
        }
         public function getCode($where = null){
            $this->db->select("project_name");
            $this->db->from('project');
            $this->db->where('projek_id', $where);
            $result = $this->db->get()->result();
            return $result;
        }
        public function getPro(){
            $this->db->select("*");
            $this->db->from('project');
            $this->db->where('del_id', 0);
            $result = $this->db->get()->result();
            return $result;
        }

         public function getCat(){
            $this->db->select("*");
            $this->db->from('category_item');
            $result = $this->db->get()->result();
            return $result;
        }


        public function updatePR($data = array(), $where = array()) {
            if (!is_array($where)) {
                $where =array(self::PRI_INDEX => $where);
                $pr_id =array('pr_id' => $data);
            }
          $this->db->update(self::TABLE_NAME, $pr_id, $where);
          return $this->db->affected_rows();
      }
       

       public function updatePay($data = array(), $where = array()) {
            if (!is_array($where)) {
                $where =array(self::PRI_INDEX => $where);
                $pay =array('pay' => $data);
            }
          $this->db->update(self::TABLE_NAME, $pay, $where);
          return $this->db->affected_rows();
      }

      public function updateInv($data, $where = array()) {
            if (!is_array($where)) {
                $where =array(self::PRI_INDEX => $where);
                $pr_inv =array('pr_inv' => $data);
            }
          $this->db->update(self::TABLE_NAME, $pr_inv, $where);
          return $this->db->affected_rows();
      }


        public function getAll($ul_id = null, $ver = null, $where = null , $all = false)
        {
            $this->db->select('*');
            $this->db->from(self::TABLE_NAME);
            if ($where !== NULL) {
                if (is_array($where)) {
                    foreach ($where as $field=>$value) {
                        $this->db->where($field, $value);
                    }
                } else {
                    $this->db->where(self::PRI_INDEX, $where);
                }
            }
             if ($ul_id != null) {
             
                $this->db->where('pr_id >', 3);
             
            }

            
            if($ver == 0)
            {
              $this->db->where('ver', 0);
            }
             
           
              
            if (!$all) {
                $this->db->where('supplier_id >', 0);
            }           
            $this->db->join('supplier', 'supp_id = supplier_id', 'left');

            if (!$all) {
                $this->db->where('us_id >', 0);
            }           
            $this->db->join('user', 'user_id = us_id', 'left');

            if (!$all) {
                $this->db->where('pro_id >', 0);
            }           
            $this->db->join('process', 'pr_id = pro_id', 'left');

            $this->db->order_by('pur_id', 'desc');
       

            $result = $this->db->get()->result();
            if ($result) {
                if ($where !== NULL) {
                    return array_shift($result);
                } else {
                    return $result;
                }
            } else {
                return false;
            }
        }

        public function getAll2($ul_id = null, $ver = null,$us_id = null, $where = null , $all = false)
        {
            $this->db->select('*');
            $this->db->from(self::TABLE_NAME);
            if ($where !== NULL) {
                if (is_array($where)) {
                    foreach ($where as $field=>$value) {
                        $this->db->where($field, $value);
                    }
                } else {
                    $this->db->where(self::PRI_INDEX, $where);
                }
            }
             if ($us_id) {
             
                $this->db->where('user_id', $us_id);
             
            }

             if ($ul_id != null) {
             
                $this->db->where('pr_id >', 3);
             
            }

            
            if($ver == 1)
            {
              $this->db->where('ver', 1);
            }
             
             
              
            if (!$all) {
                $this->db->where('supplier_id >', 0);
            }           
            $this->db->join('supplier', 'supp_id = supplier_id', 'left');

            if (!$all) {
                $this->db->where('us_id >', 0);
            }           
            $this->db->join('user', 'user_id = us_id', 'left');

            if (!$all) {
                $this->db->where('pro_id >', 0);
            }           
            $this->db->join('process', 'pr_id = pro_id', 'left');

            $this->db->order_by('pur_id', 'desc');
       

            $result = $this->db->get()->result();
            if ($result) {
                if ($where !== NULL) {
                    return array_shift($result);
                } else {
                    return $result;
                }
            } else {
                return false;
            }
        }

    /**
     * Deletes specified record from the database
     *
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of rows affected by the delete query
     */
    public function delete($where = array()) {

            $where = array(self::PRI_INDEX => $where);
    
        $this->db->delete(self::TABLE_NAME, $where);
        return $this->db->affected_rows();
    }
}
        
?>

