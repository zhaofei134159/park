<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function center()
    {
    	$this->load->helper('url');
        $this->load->model('user_model');

    	if(!empty($this->session->userdata['username'])){

    		//获取用户数据
    		$data['user'] =  $this->user_model->select_user('user','*','id='.$this->session->userdata['id']);

       		$this->load->view('personal/center',$data);

    	}else{
			redirect('/error/error_fount/', 'refresh');
    	}

    }


}
