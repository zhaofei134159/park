<?php
defined( 'BASEPATH' ) 
		or  exit( 'No direct script access allowed' );

class  User_model extends CI_Model{
    //表名
	protected $table_name;
    //主键        
    protected $primary_key;
   
	/**
	 * construct
	 */
	function  __construct(){
		parent::__construct();
        $this->load->database();
	}
	
    public function select_user($user='user',$select='*',$where='',$limit=15){

        $this->db->from($user)->select($select);

        if(!empty($where)){
            $this->db->where($where);
        }

        $data = $this->db->limit($limit)
                ->get()
                ->row_array();
                // ->result_array();
        return $data;
    }




}