<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function News($id)
        {
                $news= $this->fetch->getNewsById($id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit News',
                                                        'submissonPath'=>base_url().'Edit/updateNews/'.$id,
                                                        'news'=>$news
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/news-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateNews($id)
        {
            
            $data=array('heading'=>$this->input->post('heading'),
                        'content'=>$this->input->post('content'),
                        'status'=>$this->input->post('status'),
                        'date'=>date('Y-m-d')
                        );
                        
            if( $_FILES['img']['name']!=null ){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect('Admin/News');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $news= $this->fetch->getNewsById($id);
                    $data['img_src']=$imagename;
                    if($news->img_src!=null){
                        $path= 'assets/images/'.$news->img_src;
                        unlink("$path");
                    }
                }
            } 

            $status= $this->edit->updateNews($data, $id);

            if($status){
                $this->session->set_flashdata('success','News Updated !' );
                redirect('Admin/News');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/News');
            }
        }

        public function Notice($id)
        {
                $notice= $this->fetch->getNoticeById($id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit Notice',
                                                        'submissonPath'=>base_url().'Edit/updateNotice/'.$id,
                                                        'notice'=>$notice
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateNotice($id)
        {  
            $data=array('content'=>$this->input->post('content'),
                        'status'=>$this->input->post('status'),
                        'date'=>date('Y-m-d')
                        );
                        
            if( $_FILES['notice_file']['name']!=null ){
                $path ='assets/notice';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|doc|docx|pdf|xls|xlsx|txt",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('notice_file')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect('Admin/Notice');
                }
                else {
                    $filedata = $this->upload->data();
                    $filename = $filedata['file_name'];
                    $data['file_src']=$filename;
                    $notice= $this->fetch->getNoticeById($id);
                    if($notice->file_src!='_blank_'){
                        $path= 'assets/notice/'.$notice->file_src;
                        unlink("$path");
                    }
                }
            } 

            $status= $this->edit->updateNotice($data, $id);

            if($status){
                $this->session->set_flashdata('success','Notice Updated !' );
                redirect('Admin/Notice');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Notice');
            }
        }

        public function updateNote($id)
        {  
            $data=array('content'=>$this->input->post('content'),
                        'designation'=>$this->input->post('designation')
                        );
                        
            if( $_FILES['img']['name']!=null ){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect('Admin/Note');
                }
                else {
                    $filedata = $this->upload->data();
                    $filename = $filedata['file_name'];
                    $data['img_src']=$filename;
                    $note= $this->fetch->getNote();
                    $path= 'assets/images/'.$note->img_src;
                }
            } 

            $status= $this->edit->updateNote($data, $id);

            if($status){
                $this->session->set_flashdata('success','Note Updated !' );
                unlink("$path");
                redirect('Admin/Note');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Note');
            }
        }


        public function Career($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateCareer($data, $id);

            if($status){
                $this->session->set_flashdata('success','Career Updated !');
                redirect('Admin/Careers');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Careers');
            }
        }

        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function gallCategory($id)
        {
            $status= $this->edit->updateGallCategory($this->input->post(), $id);
            if($status){
                $this->session->set_flashdata('success','Album Updated !');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Gallery');
            }
        }

        public function gallImage($id)
        {
            
            $data=array('alt_txt'=>$this->input->post('alt_txt'));
            $cat_id= $this->fetch->getImageById($id)->gall_cat_id;   
            $unlink_src= $this->fetch->getImageById($id)->img_src;   
            if( $_FILES['img']['name']!=null ){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect("Admin/galleryInner/$cat_id");
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data['img_src']=$imagename;
                    $path= 'assets/images/'.$unlink_src;
                    unlink("$path");
                }
            } 

            $status= $this->edit->updateImage($data, $id);

            if($status){
                $this->session->set_flashdata('success','Image Updated !' );
                redirect("Admin/galleryInner/$cat_id");
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect("Admin/galleryInner/$cat_id");
            }
        }

        public function heroImage($id)
        {
            
            $data=array('alt_txt'=>$this->input->post('alt_txt')); 
            $unlink_src= $this->fetch->getHeroImageById($id)->img_src;   
            if( $_FILES['img']['name']!=null ){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect("Admin/Slider");
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data['img_src']=$imagename;
                    $path= 'assets/images/'.$unlink_src;
                    unlink("$path");
                }
            } 

            $status= $this->edit->updateHeroImage($data, $id);

            if($status){
                $this->session->set_flashdata('success','Image Updated !' );
                redirect("Admin/Slider");
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect("Admin/Slider");
            }
        }

        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
            }
        }
        

}
