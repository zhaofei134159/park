<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

        public function __construct(){
                parent::__construct();
        }

        public function error_fount()
        {
        	//找不到登录的人
            $this->load->view('/error/error_fount');
        }


}
