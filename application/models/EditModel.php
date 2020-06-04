<?php
class EditModel extends CI_Model{

    // Update Website Profile
    public function updateWebProfile($data)
    {
        $this->db->where('id',$data['id']);
        $wpflag = $this->db->update('webprofile',$data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update info by id
    public function updateInfoById($tbl,$data,$col,$key)
    {
        $this->db->where($col,$key);
        $wpflag = $this->db->update($tbl,$data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update News
    public function updateNews($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('news',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Notice
    public function updateNotice($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('notice',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Category
    public function updateGallCategory($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('gallery_categories',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Gallery Image
    public function updateImage($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('gallery',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Slider Image
    public function updateHeroImage($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('hero_images',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update note
    public function updateNote($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('note',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }




    // Update Career
    public function updateCareer($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('careers',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    
    // Update Service
    public function updateService($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('services',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Enquiry Status
    public function updateEnqStatus($id)
    {
        $data['status']="seen";
        $this->db->where('id',$id);
        $flag = $this->db->update('enquiries',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Blog
    public function updateBlog($data,$id)
    {
        $this->db->where('bid',$id);
        $flag = $this->db->update('blogs',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    
     // Update Website Profile
     public function updateAdminProfile($data, $id)
     {
         $this->db->where('user_id',$id);
         $flag = $this->db->update('users',$data);
         if($flag){
             return true;
         }
         else{
             return false;
         }
     }
    

}
?>
     