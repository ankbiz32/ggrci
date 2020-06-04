<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admissions extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$profile , 'title'=>'Admissions']);
		$this->load->view('admissions');
		$this->load->view('footer');
	}

	public function InterviewPass($id)
	{
		$data['interview_passed']='1';
		$this->load->model('EditModel','update');
		$status= $this->update->updateInfoById('info',$data,'user_id',$id);

		if($status==true){
			
			$to=$this->fetch->getInfoById('users','user_id',$id)->email;
			$subject = "Interview status - Grace International School";
			$msg = '<h3>Your interview has been cleared.</h3>';
			$msg .= '<h3>Document upload link is now active.</h3>';
			$msg .= '<p>Login to GIS online admission panel for further process.</p>';
			$msg .= '<a href="'.base_url().'online-admissions">Click here to login</a>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.USERNAME.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);

			$this->session->set_flashdata('success','Interview status updated!');
			redirect('Admin/Admissions');
		}
		else{
			$this->session->set_flashdata('failed','Error!');
			redirect('Admin/Admissions');
		}
	}

	public function InterviewFail($id)
	{
		$data['interview_passed']='0';
		$this->load->model('EditModel','update');
		$status= $this->update->updateInfoById('info',$data,'user_id',$id);

		if($status==true){
			
			$to=$this->fetch->getInfoById('users','user_id',$id)->email;
			$subject = "Interview status - Grace International School";
			$msg = '<h3>You have failed in the interview processs.</h3>';
			$msg .= '<p>Contact school for clarifications.</p>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.USERNAME.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);

			$this->session->set_flashdata('success','Interview status updated!');
			redirect('Admin/Admissions');
		}
		else{
			$this->session->set_flashdata('failed','Error!');
			redirect('Admin/Admissions');
		}
	}

	public function Approve($id)
	{
		$data['is_approved']='1';
		$data['is_submitted']='1';
		$data['re_submitted']='1';
		$data['is_rejected']='0';
		$data['approval_date']=date('Y-m-d');

		$this->load->model('EditModel','update');
		$status= $this->update->updateInfoById('info',$data,'user_id',$id);

		if($status==true){
			
			$to=$this->fetch->getInfoById('users','user_id',$id)->email;
			$subject = "Documents approval - Grace International School";
			$msg = '<h3>Your documents has been approved.</h3>';
			$msg .= '<h3>Payment link is now active.</h3>';
			$msg .= '<p>Login to GIS online admission panel for further process.</p>';
			$msg .= '<a href="'.base_url().'online-admissions">Click here to login</a>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.USERNAME.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);

			$this->session->set_flashdata('success','Application form Approved!');
			redirect('Admin/Admissions');
		}
		else{
			$this->session->set_flashdata('failed','Error!');
			redirect('Admin/Admissions');
		}
	}

	public function Reject($id)
	{
		$data['is_approved']='0';
		$data['is_submitted']='0';
		$data['re_submitted']='0';
		$data['is_rejected']='1';
		$data['rejection_reason']=$this->input->post('rejection_reason');
		$data['rejection_date']=date('Y-m-d');

		$this->load->model('EditModel','update');
		$status= $this->update->updateInfoById('info',$data,'user_id',$id);

		if($status==true){
			$to=$this->fetch->getInfoById('users','user_id',$id)->email;
			$subject = "Documents rejected  - Grace International School";
			$msg = '<h3>Documents rejected.</h3>';
			$msg .= '<h3>Rejection reason:'.$data['rejection_reason'].'</h3>';
			$msg .= '<p>Login to GIS online admission panel to make changes & re-submit the required documents.</p>';
			$msg .= '<a href="'.base_url().'online-admissions">Click here to login</a>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.USERNAME.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);

			$this->session->set_flashdata('success','Application form Rejected!');
			redirect('Admin/Admissions');
		}
		else{
			$this->session->set_flashdata('failed','Error!');
			redirect('Admin/Admissions');
		}
	}

}
