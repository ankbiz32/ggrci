<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile , 'title'=>'Facilities']);
		$this->load->view('facilities');
		$this->load->view('footer');
	}
}
