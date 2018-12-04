db_tes<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library


class DbTest extends CI_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load Group model
        $this->load->library('session');
        $this->load->model('GroupDetailModel');
    }
    
    public function groupDetails_get($id = 0) {
        $this->load->model('user');
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $users = $this->GroupDetailModel->getRows($id);
       //  $this->response("hii");
      //  check if the Group data exists
        if(!empty($users)){
            //set the response and exit
           print_r($users);
        }else{
            //set the response and exit
            print_r([
                'status' => FALSE,
                'message' => 'No Group were found.'
            ]);
        }
    }

      //`group_name``total_budget``group_created_by``total_member``total_paid``gropu_discription`
    public function groupDetails_post() {
        $this->load->model('user');
        $userData = array();
        $userData['group_name'] = $this->post('group_name');
        $userData['total_budget'] = $this->post('total_budget');
        $userData['group_created_by'] = $this->post('group_created_by');
        $userData['total_member'] = $this->post('total_member');
        $userData['total_paid'] = md5($this->post('total_paid'));
        $userData['gropu_discription'] = $this->post('gropu_discription');
        if(!empty($userData['group_name'])){
            //insert Group data
            $insert = $this->GroupDetailModel->insert($userData);
            
            //check if the Group data inserted
            if($insert){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'Group has been added successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response("Provide complete Group information to create.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function groupDetails_put() {
       
        $userData = array();
        $id = $this->put('id');
        //`group_name``total_budget``group_created_by``total_member``total_paid``gropu_discription`
        $userData['group_name'] = $this->put('group_name');
        $userData['total_budget'] = $this->put('total_budget');
        $userData['group_created_by'] = $this->put('group_created_by');
        $userData['total_member'] = $this->put('total_member');
        $userData['total_paid'] = $this->put('total_paid');
        $userData['gropu_discription'] = $this->put('gropu_discription');
        if(!empty($id) ){
            //update Group data
            $update = $this->GroupDetailModel->update($userData, $id);
            
            //check if the Group data updated
            if($update){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'Group has been updated successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response("Provide complete Group information to update.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function groupDetails_delete($id){
        $this->load->model('user');
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->GroupDetailModel->delete($id);
            
            if($delete){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'Group has been removed successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No Group were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }  
}

?>