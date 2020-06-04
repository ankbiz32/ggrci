<?php
class DeleteModel extends CI_Model{

// delete by id
public function deleteById($table,$column,$val)
{
    $this->db->where($column,$val);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete News
public function deleteNews($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('news');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Notice
public function deleteNotice($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('notice');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Category
public function deleteCategory($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('gallery_categories');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Galleru Image
public function deleteGalleryImg($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('gallery');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Slider Image
public function deleteHeroImg($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('hero_images');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Images by category id
public function deleteImagesByCategory($id)
{
    $this->db->where('gall_cat_id',$id);
    $del=$this->db->delete('gallery');
    if($del){
        return true;
    }
    else{
        return false;
    }
}




// delete Career
public function deleteCareer($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('careers');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Career
public function deleteApplication($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('applications');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

    
}
?>