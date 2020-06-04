<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$categories=$this->fetch->getInfo('gallery_categories');
		foreach($categories as $category){
			$category->thumb = $this->fetch->getInfoById('gallery','gall_cat_id',$category->id)->img_src;
		}
		// echo'<pre>';var_dump($categories);exit;
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Gallery',
									'categories'=>$categories 
									]);
		$this->load->view('album');
		$this->load->view('footer');
	}

	public function Album($id){
		$profile=$this->fetch->getWebProfile();
		$images=$this->fetch->getInfoParams('gallery','gall_cat_id',$id);
		$catName=$this->fetch->getInfoById('gallery_categories','id',$id)->name;
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Album | '.$catName,
									'images'=>$images,
									'category'=>$catName
									]);
		$this->load->view('media');
		$this->load->view('footer');
	}

}
