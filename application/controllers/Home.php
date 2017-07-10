<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
        $this->load->model('user_model');
        $this->load->helper('url');

		$post=$this->input->post();

		//获取用户信息
		$username=$post['username'];
		$password=md5($post['password']);

        $user = $this->user_model->select_user('user','id,username','username="'.$username.'" and password="'.$password.'"');


        if(!empty($user)){
        	$this->session->set_userdata($user);

	        // 重定向
	        //注意！！一定不要忘了加载 $this->load->helper('url');
        	redirect('/personal/center/', 'refresh');

        }else{
        	redirect('/error/error_fount/', 'refresh');
        }

        // var_dump($this->session->userdata);

        // $this->session->unset_userdata(array('username','password'));

        // var_dump($this->session->userdata);

        // var_dump(date('Y-m-d H:i:s',$this->session->userdata('__ci_last_regenerate')));

	}

}
