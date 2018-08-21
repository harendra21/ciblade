<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index(){
		$head = array();
		$data = array();
		
		$this->front_render('home',$data,$head);
	}
}
