<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Login controller
 * @author Ankur Agrawal
 */
class Login extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->load->model('GetModel', 'fetch');
    }

    public function index(){
        $this->redirectIfLoggedIn();
        $this->load->view('admin/login');
    }

    public function authenticate(){
        $this->redirectIfLoggedIn();
        $this->form_validation->set_rules('uname', 'Username', 'required|min_length[3]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]');
        $response ['errors'] = '';
        if($this->form_validation->run() == FALSE){
            $response[ 'errors' ]= validation_errors() ;
        }
        else{
            if($user = $this->auth->authenticate($this->input->post()) ){
                $this->session->set_userdata(['user' =>  $user]);
                $this->redirectIfLoggedIn();
            }else{
                $response['errors'] .= "Invalid Username or Password";
            }
        }
        
        // echo validation_errors();
        $this->load->view('admin/login',$response);
    }

    public function changePwd(){
        $this->form_validation->set_rules('oldp', 'Old Password', 'required|min_length[6]');
        $this->form_validation->set_rules('newp', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|min_length[6]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            $admProfile=$this->fetch->getAdminProfile();
            if($data['newp']==$data['cnfp']){
                if( password_verify($data['oldp'], $admProfile->pwd) ){
                    $hash['pwd'] = password_hash( $this->input->post('cnfp'), PASSWORD_DEFAULT );
                    $status=$this->auth->changeLoginPassword($hash, $admProfile->user_id);

                    if($status){
                        $this->session->set_flashdata('success','Password Updated ! Please login again.');
                        redirect('Login/logout');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/adminProfile');
                    }
                }
                else{
                    $this->session->set_flashdata('failed','Invalid old password !');
                    redirect('Admin/adminProfile');
                }
            }
            else{
                $this->session->set_flashdata('failed','New & confirm password should be same !');
                redirect('Admin/adminProfile');
            }

            
        }
        else{
            $admProfile=$this->fetch->getAdminProfile();
            $this->load->view( 'admin/adminheader', ['admProfile' => $admProfile, 'errors'=> validation_errors()] ); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/adminProfile'); 
            $this->load->view('admin/adminfooter');  
        }
    }

    public function changeTPwd(){
        $this->form_validation->set_rules('oldp', 'Old Password', 'required|min_length[6]');
        $this->form_validation->set_rules('newp', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|min_length[6]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            $admProfile=$this->fetch->getAdminProfile();
            if($data['newp']==$data['cnfp']){
                if( $data['oldp']===$admProfile->transaction_pwd ){
                    $hash['transaction_pwd'] = $this->input->post('cnfp');
                    $status=$this->auth->changeTPassword($hash, $admProfile->user_id);

                    if($status){
                        $this->session->set_flashdata('success','Transaction Password Updated ! Please login again.');
                        redirect('Login/logout');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/adminProfile');
                    }
                }
                else{
                    $this->session->set_flashdata('failed','Invalid old password !');
                    redirect('Admin/adminProfile');
                }
            }
            else{
                $this->session->set_flashdata('failed','New & confirm password should be same !');
                redirect('Admin/adminProfile');
            }

            
        }
        else{
            $admProfile=$this->fetch->getAdminProfile();
            $this->load->view( 'admin/adminheader', ['admProfile' => $admProfile, 'errors'=> validation_errors()] ); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/adminProfile'); 
            $this->load->view('admin/adminfooter');  
        }
    }

    public function logout(){
        $this->session->unset_userdata(['user']);
        $this->session->sess_destroy();
        $this->index();
    }


}

// $to = "ankbiz32@gmail.com, Ankur";
// $subject = "HTML email";

// $message = "
// <p>This email contains HTML Tags!</p>
// <h1>Test1</h1>
// <h3>Test3</h3>
// ";

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: <academic.gismp@gmail.com>' . "\r\n";

// mail($to,$subject,$message,$headers);
