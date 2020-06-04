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
			$category->thumb = $this->fetch->getInfoById('gallery','gall_cat_id',$category->id);
		}
		$this->load->view('header',['web'=>$profile ,
									'title'=>'Gallery',
									'categories'=>$categories 
									]);
		$this->load->view('album');
		$this->load->view('footer');
	}

	public function galleryInner($id){
		$profile=$this->fetch->getWebProfile();
		$images=$this->fetch->getImagesByCat($id);
		$catName=$this->fetch->getCategoryName($id);
		$this->load->view('header',['profile'=>$profile ,
									'title'=>'Gallery',
									'images'=>$images,
									'category'=>$catName
									]);
		$this->load->view('gallery-inner');
		$this->load->view('footer');
	}

}
