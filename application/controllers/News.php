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
		$news=$this->fetch->getInfoOrderBy('news','id');
		$this->load->view('header',['web'=>$profile ,
									'title'=>'News',
									'news'=>$news
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
