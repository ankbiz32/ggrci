<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TC extends MY_Controller {
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
		$config=$this->getPaginitionConfig("TC/page",$this->fetch->record_count('transfer_cert') ,20);
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$tc = $this->fetch->fetch_paginated_data('transfer_cert',$config["per_page"], $page);
		$links = $this->pagination->create_links();
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Transfer Certificates',
									'tc'=>$tc,
									'links'=>$links
									]);
		$this->load->view('tc');
		$this->load->view('footer');
	}
}
