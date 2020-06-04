<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function News()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add News',
                                                        'submissonPath'=>'saveNews'
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/news-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function gallCategory()
        {
            $this->form_validation->set_rules('name', 'Album name', 'required');
            if($this->form_validation->run() == true){
                $imagename = '';
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect('Admin/Gallery');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                } 

                $data=array('name'=>$this->input->post('name'),
                            'descr'=>$this->input->post('descr')
                            );
                $status= $this->save->saveCategory($data);

                if($status){
                    $cat_id=$this->fetch->getLatestCategory();
                    $data=array('img_src'=>$imagename,
                            'gall_cat_id'=>$cat_id
                            );
                    $status= $this->save->saveGalleryImg($data);
                    
                    $this->session->set_flashdata('success','Album added !' );
                    redirect('Admin/Gallery');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Gallery');
                }
            }
            else{
                $this->session->set_flashdata('failed','Invalid inputs');
                redirect('Admin/Gallery');
            }
        }

        public function gallImage($cid)
        {
                $imagename = '';
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect("Admin/galleryInner/$cid");
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                } 
                if($this->input->post('alt_txt')!=null){
                    $data=array('img_src'=>$imagename,
                            'alt_txt'=>$this->input->post('alt_txt'),
                            'gall_cat_id'=>$cid
                            );
                }
                else{
                    $data=array('img_src'=>$imagename,
                            'gall_cat_id'=>$cid
                            );
                }
                $status= $this->save->saveGalleryImg($data);

                if($status){
                    $this->session->set_flashdata('success','Image added !' );
                    redirect("Admin/galleryInner/$cid");
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect("Admin/galleryInner/$cid");
                }
        }

        public function heroImage()
        {
                $imagename = '';
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
                } 
                if($this->input->post('alt_txt')!=null){
                    $data=array('img_src'=>$imagename,
                            'alt_txt'=>$this->input->post('alt_txt')
                            );
                }
                else{
                    $data=array('img_src'=>$imagename
                            );
                }
                $status= $this->save->saveHeroImg($data);

                if($status){
                    $this->session->set_flashdata('success','Image added !' );
                    redirect("Admin/Slider");
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect("Admin/Slider");
                }
        }

        public function saveNews()
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            if($this->form_validation->run() == true){
                $imagename = '';
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
                    } 
                }

                $data=array('heading'=>$this->input->post('heading'),
                            'content'=>$this->input->post('content'),
                            'status'=>$this->input->post('status'),
                            'date'=>date('Y-m-d'),
                            'img_src'=>$imagename
                            );
                $status= $this->save->saveNews($data);

                if($status){
                    $this->session->set_flashdata('success','News added !' );
                    redirect('Admin/News');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/News');
                }
            }
            else{
                $this->session->set_flashdata('failed',validation_errors());
                redirect('Admin/News');
            }
        }

        public function Notice()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add Notice',
                                                        'submissonPath'=>'saveNotice'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function saveNotice()
        {
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            if($this->form_validation->run() == true){
                $fileName = '_blank_';
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
                        $fileName = $filedata['file_name'];
                    } 
                }

                $data=array('content'=>$this->input->post('content'),
                            'status'=>$this->input->post('status'),
                            'date'=>date('Y-m-d'),
                            'file_src'=>$fileName
                            );
                $status= $this->save->saveNotice($data);

                if($status){
                    $this->session->set_flashdata('success','Notice added !' );
                    redirect('Admin/Notice');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Notice');
                }
            }
            else{
                $this->session->set_flashdata('failed',validation_errors());
                redirect('Admin/Notice');
            }
        }

        public function Career()
        {
            $data=$this->input->post();
            $status= $this->save->saveCareer($data);

            if($status){
                $this->session->set_flashdata('success','New Career added !' );
                redirect('Admin/Careers');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Careers');
            }
        }

        


}
