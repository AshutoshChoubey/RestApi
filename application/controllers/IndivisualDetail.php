<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class IndivisualDetail extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->library('session');
        $this->load->model('IndivisualDetailModel');
    }
    
    public function indivisualDetail_get($id = 0) {
        $this->load->model('user');
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $users = $this->IndivisualDetailModel->getRows($id);
       //  $this->response("hii");
      //  check if the user data exists
        if(!empty($users)){
            //set the response and exit
            $this->response($users, REST_Controller::HTTP_OK);
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No Detail were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function indivisualDetail_post() {
        $userData = array();
        $userData['user_id'] = $this->post('user_id');
        $userData['group_id'] = $this->post('group_id');
        $userData['total_paid'] = $this->post('total_paid');
        $userData['remaining_paid'] = $this->post('remaining_paid');
        $userData['extra_paid'] = $this->post('extra_paid');

        if(!empty($userData['user_id'])  ){
            //insert user data
            $insert = $this->IndivisualDetailModel->insert($userData);
            
            //check if the user data inserted
            if($insert){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User Detail has been added successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response("Provide complete user information to create.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function indivisualDetail_put() {
       
        $userData = array();
        $id = $this->put('id');
         $userData['id'] = $this->put('id');
        $userData['user_id'] = $this->put('user_id');
        $userData['group_id'] = $this->put('group_id');
        $userData['total_paid'] = $this->put('total_paid');
        $userData['remaining_paid'] = $this->put('remaining_paid');
        $userData['extra_paid'] = $this->put('extra_paid');
        if(!empty($id) && !empty($userData['user_id']) ){
            //update user data
            $update = $this->IndivisualDetailModel->update($userData, $id);
            
            //check if the user data updated
            if($update){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been updated successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            // $this->response($userData);
            $this->response("Provide complete id and user Id  to update.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function indivisualDetail_delete($id){
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->IndivisualDetailModel->delete($id);
            
            if($delete){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been removed successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }  
}

?>