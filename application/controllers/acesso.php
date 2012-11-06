<?php
class Acesso extends CI_Controller{
	
	
	public function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		if( $this -> session -> userdata($this -> config -> item('name_session_member') ) ){

			redirect('', 'refresh');
			
		}
			
		$this -> load -> view('login');			
		
	}

	function login(){
			
		$userLogin = $this -> input -> post('userLogin');	
		$userPwd = $this -> input -> post('userPwd');	
			
		$user = $this -> db -> get_where('usuarios_elastico', array( 'usuario'=> $userLogin, 'senha' => $userPwd) ) -> row(1);
		
		$existe = (bool) $this -> db -> affected_rows();
		
		if($existe){

			$this -> session -> set_userdata($this -> config ->item('name_session_member') , $user -> id);	
			
			redirect('', 'refresh');
			
		}else{
			
			redirect('/acesso', 'refresh');	
			
		}
		
	}
	
	
}