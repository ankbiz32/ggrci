<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
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
		$config=$this->getPaginitionConfig("News/page",$this->fetch->record_count('news') ,20);
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$news = $this->fetch->fetch_paginated_data('news',$config["per_page"], $page);
		$links = $this->pagination->create_links();
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile ,
									'title'=>'News',
									'news'=>$news,
									'links'=>$links
									]);
		$this->load->view('news');
		$this->load->view('footer');
	}

	public function innerNews($id)
	{
		$profile=$this->fetch->getWebProfile();
		$news=$this->fetch->getInfoById('news','id',$id);
		$recents=$this->fetch->getInfoLim('news','4','id');
		// echo'<pre>';var_dump($news,$id);exit;
		$this->load->view('header',['web'=>$profile ,
									'title'=>'News',
									'n'=>$news,
									'recents'=>$recents
									]);
		$this->load->view('newsInner');
		$this->load->view('footer');
	}


}
