<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$news=$this->fetch->getInfo('news');
		$this->load->view('header',['web'=>$profile ,
									'title'=>'News',
									'news'=>$news
									]);
		$this->load->view('news');
		$this->load->view('footer');
	}


}
