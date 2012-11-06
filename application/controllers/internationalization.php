<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internationalization extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		
		$this -> load -> helper('array');
		
	}
	
	public function index(){

		$lines = $this -> input -> post('lines', TRUE);
		
		$linesFiltered = elements($lines, $lang, 'This field doesn\'t exist');
		
		return $linesFiltered;
		
	}
	
}