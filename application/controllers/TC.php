<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TC extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$tc=$this->fetch->getInfo('transfer_cert');
        $this->load->view('header',['web'=>$profile ,
                                    'tc'=>$tc,
                                    'title'=>'Transfer certificate'
                                    ]);
		$this->load->view('TC');
		$this->load->view('footer');
	}
}
