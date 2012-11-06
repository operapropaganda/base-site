<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public function __construct(){
		 
		parent::__construct();
		$this -> accessMember();
		
	}

	private function accessMember(){
		
		if( !$this -> session -> userdata( $this -> config -> item("name_session_member") ) ){
			
			redirect("/acesso", "refresh");
			
		}
				
	}
	
}