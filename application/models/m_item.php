<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_item extends CI_Model {

    /**
     * @name string TABLE_NAME Holds the name of the table in use by this model
     */
    const TABLE_NAME = 'item';

    /**
     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
     */
    const PRI_INDEX = 'item_id';

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
     public function getList($where = NULL) {
        // echo "<script>alert($where);</script>";

        $this->db->select("*");
        $this->db->from(self::TABLE_NAME);
        $this->db->where('cat_id', $where);
        $result = $this->db->get()->result();

        return $result;




        // $this->db->select('*');
        // $this->db->from(self::TABLE_NAME);
        // if ($where !== NULL) {
        //     if (is_array($where)) {
        //         foreach ($where as $field=>$value) {
        //             $this->db->where($field, $value);
        //         }
        //     } else {
        //         $this->db->where('cat_id', $where);
        //     }
        // }
        // $result = $this->db->get()->result();
        // echo "<script>alert($result);</script>";
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

     public function totalByOrder()
    {
        $this->db->select('ord.pur_date as date,MONTH(ord.pur_date) AS bulan , YEAR(ord.pur_date) as tahun, sum(ori.pi_qty) as total');
        $this->db->from('purchase_item ori');
        //$this->db->join('order_ext ox', 'ox.orex_id = ori.orex_id', 'left');
        $this->db->join('purchase ord', 'ori.purc_id = ord.pur_id', 'left');
        //$this->db->group_by('ori.orex_id');
        //$this->db->where('ord.or_del', 0);
        $this->db->group_by('date(ord.pur_date)');
        $this->db->order_by('ord.pur_date', 'asc');
       
        $result = $this->db->get()->result();
        return $result;
    }


      // public function getList()
      //   {


      //       $arr = $this->db->select('*')->from(self::TABLE_NAME)->get();
            
            /*$this->db->select('*');
            $this->db->from(self::TABLE_NAME);*/
            /*  if ($where !== NULL) {
            if (is_array($where)) {
                foreach ($where as $field=>$value) {
                    $this->db->where($field, $value);
                }
            } else {
                $this->db->where(self::PRI_INDEX, $where);
            }
        }*/

           /* $arr = $this->db->get();*/

           /* for ($i=0; $i < sizeof($result); $i++) { 
                $result[$i]->supplier = $this->db->get()->result();
            }*/
        //     return $arr->result();
        // }

         public function getLvl(){
            $this->db->select("*");
            $this->db->from('category_item');
            $result = $this->db->get()->result();
            return $result;
        }

        public function getAll($where = null , $all = false)
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
            if (!$all) {
                $this->db->where('cat_id >', 0);
            }           
            $this->db->join('category_item', 'cat_id = catt_id', 'left');
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

