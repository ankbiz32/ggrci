<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }


        // Delete News
        public function Testimonial($id)
        {
            $status= $this->delete->deleteById('feedbacks','id',$id);
            if($status){
                $this->session->set_flashdata('success','Testimonial deleted !');
                redirect('Admin/Testimonials');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Testimonials');
            }
        }

        // Delete News
        public function News($id)
        {
            $news= $this->fetch->getNewsById($id);
            $status= $this->delete->deleteNews($id);
            if($status){
                if($news->img_src!=null){
                    $path= 'assets/images/'.$news->img_src;
                    unlink("$path");
                }
                $this->session->set_flashdata('success','News Deleted!');
                redirect('Admin/News');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/News');
            }
        }

        // Delete Notice
        public function Notice($id)
        {
            $notice= $this->fetch->getNoticeById($id);
            $status= $this->delete->deleteNotice($id);
            if($status){
                if($notice->filr_src!='_blank_'){
                    $path= 'assets/notice/'.$notice->file_src;
                    unlink("$path");
                }
                $this->session->set_flashdata('success','Notice Deleted!');
                redirect('Admin/Notice');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Notice');
            }
        }

        // Delete Album Category
        public function gallCategory($id)
        {
            $status= $this->delete->deleteById('gallery_categories','id',$id);
            if($status){
                $images= $this->fetch->getInfoParams('gallery','gall_cat_id',$id);
                foreach($images as $image){
                    $path= 'assets/images/'.$image->img_src;
                    unlink("$path");
                }
                $status= $this->delete->deleteById('gallery','gall_cat_id',$id);
                $this->session->set_flashdata('success','Album Deleted!');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Gallery');
            }
        }

        // Delete Gallery Image
        public function galleryImg($id)
        {
            $imgData= $this->fetch->getInfoById('gallery','id',$id);
            $unlink_src= $imgData->img_src;
            $cat_id= $imgData->gall_cat_id;
            $count= $this->fetch->getCountOfImages($cat_id);
            $redirect="Admin/galleryInner/$cat_id";
            
            $status= $this->delete->deleteById('gallery','id',$id);
            if($status){
                if ($count < 2){
                    $redirect="Admin/Gallery";
                    $this->delete->deleteById('gallery_categories','id',$cat_id);
                }
                $path= 'assets/images/'.$unlink_src;
                unlink("$path");
                $this->session->set_flashdata('success','Image Deleted!');
                redirect("$redirect");
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect("$redirect");
            }
        }

        // Delete Slider Image
        public function heroImg($id)
        {
            $unlink_src= $this->fetch->getHeroImageById($id)->img_src;
            $count= $this->fetch->getCountOfHeroImages();
            if ($count < 2){
                $this->session->set_flashdata('failed','Slider Images cannot be empty');
                redirect("Admin/Slider");
            }
            else{
                $status= $this->delete->deleteHeroImg($id);
                if($status){
                    $path= 'assets/images/'.$unlink_src;
                    unlink("$path");
                    $this->session->set_flashdata('success','Image Deleted!');
                    redirect("Admin/Slider");
                }
                else{
                    $this->session->set_flashdata('failed','Error!');
                    redirect("Admin/Slider");
                }
            }
        }



}
