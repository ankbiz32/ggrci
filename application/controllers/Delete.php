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
            $status= $this->delete->deleteCategory($id);
            if($status){
                $images= $this->fetch->getImagesByCat($id);
                foreach($images as $image){
                    $path= 'assets/images/'.$image->img_src;
                    unlink("$path");
                }
                $status= $this->delete->deleteImagesByCategory($id);
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
            $unlink_src= $this->fetch->getImageById($id)->img_src;
            $cat_id= $this->fetch->getImageById($id)->gall_cat_id;
            $count= $this->fetch->getCountOfImages($cat_id);
            $redirect="Admin/galleryInner/$cat_id";
            
            $status= $this->delete->deleteGalleryImg($id);
            if($status){
                if ($count < 2){
                    $redirect="Admin/Gallery";
                    $this->delete->deleteCategory($cat_id);
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

        // Delete Career
        public function Career($id)
        {
            $status= $this->delete->deleteCareer($id);

            if($status){
                $this->session->set_flashdata('success','Career Deleted!');
                redirect('Admin/Careers');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Careers');
            }
        }

        // Delete Career
        public function Application($id)
        {
            
            $res= $this->fetch->getAppById($id);
            $path= 'assets/resumes/'.$res->resume;
            unlink("$path");
            $status= $this->delete->deleteApplication($id);

            if($status){
                $this->session->set_flashdata('success','Application Deleted!');
                redirect('Admin/Applications');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Applications');
            }
        }

        // Delete Service
        public function Service($id)
        {
            $service= $this->fetch->getServiceById($id);
            $path= 'assets/images/'.$service->img;
            unlink("$path");
            $status= $this->delete->deleteService($id);

            if($status){
                $this->session->set_flashdata('success','Service Deleted!');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Services');
            }
        }

        // Delete Blog
        public function Blog($id)
        {
            $blogimg= $this->fetch->getBlogById($id);
            $path= 'assets/images/'.$blogimg->img;
            $countBlogs = $this->fetch->countBlogsWithCatId($blogimg->categories_id);
            unlink("$path");
            if($countBlogs){
                if($countBlogs==1){
                    $this->delete->deleteCategory($blogimg->categories_id);
                }
            }
            $status= $this->delete->deleteBlog($id);

            if($status){
                $this->session->set_flashdata('success','Blog Deleted!');
                redirect('Admin/Blog');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Blog');
            }
        }


}
