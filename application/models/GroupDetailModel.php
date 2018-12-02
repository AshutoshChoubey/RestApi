<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class GroupDetailModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        
        //load database library
        $this->load->database();
    }

    /*
     * Fetch user data
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('gropu_details', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('gropu_details');
            return $query->result_array();
        }
    }
    
    /*
     * Insert user data
     */
    public function insert($data = array()) {
        if(!array_key_exists('created_at', $data)){
            $data['created_at'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists('updated_at', $data)){
            $data['updated_at'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert('gropu_details', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    /*
     * Update user data
     */
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            if(!array_key_exists('updated_at', $data)){
                $data['updated_at'] = date("Y-m-d H:i:s");
            }
            $update = $this->db->update('gropu_details', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete user data
     */
    public function delete($id){
        $delete = $this->db->delete('gropu_details',array('id'=>$id));
        return $delete?true:false;
    }
    

}
?>