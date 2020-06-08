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
		$social_meta='';
		if(!empty($news)){
			$social_meta='
				<meta name="og:title" content="'.$news->heading.'">
				<meta name="og:description" content="'.substr(trim(strip_tags($news->content)),0,100).'">
				<meta name="og:image" content="'.base_url("assets/news/").$news->img_src.'">
				<meta name="og:url" content="'.base_url().'">
				<meta name="og:site_name" content="Gyan Ganga Educational Academy">

				<meta name="twitter:card" content="summary">
				<meta name="twitter:title" content="'.$news->heading.'">
				<meta name="twitter:description" content="'.substr(trim(strip_tags($news->content)),0,100).'">
				<meta name="twitter:site" content="@'.base_url().'">
				<meta name="twitter:image" content="'.base_url("assets/news/").$news->img_src.'">

				<meta itemprop="name" content="'.$news->heading.'">
				<meta itemprop="description" content="'.substr(trim(strip_tags($news->content)),0,100).'">
				<meta itemprop="image" content="'.base_url("assets/news/").$news->img_src.'">
			';
			}
		$this->load->view('header',['web'=>$profile ,
									'title'=>'News',
									'social_meta'=>$social_meta,
									'n'=>$news,
									'recents'=>$recents
									]);
		$this->load->view('newsInner');
		$this->load->view('footer');
	}


}
