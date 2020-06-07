<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$this->page();
	}

	public function page()
	{
		$this->load->library("pagination");
		$config=$this->getPaginitionConfig("Notice/page",$this->fetch->record_count('notice') ,15);
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$notice = $this->fetch->fetch_paginated_data('notice',$config["per_page"], $page);
		$links = $this->pagination->create_links();
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Notice',
									'notice'=>$notice,
									'links'=>$links
									]);
		$this->load->view('notice');
		$this->load->view('footer');
	}



}
