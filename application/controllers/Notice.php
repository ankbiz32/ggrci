<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$notice=$this->fetch->getInfo('notice');
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Notice',
									'notice'=>$notice
									]);
		$this->load->view('notice');
		$this->load->view('footer');
	}



}
