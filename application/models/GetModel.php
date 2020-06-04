<?php
class GetModel extends CI_Model{

    public function getInfo($table)
    {
        return $this->db->get($table)->result();
    }

    public function getInfoById($table,$column,$id)
    {
        $this->db->where($column, $id);
        return $this->db->get($table)->row();
    }

    public function getInfoParams($table,$column,$id)
    {
        $this->db->where($column, $id);
        return $this->db->get($table)->result();
    }

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    // Fetch gallery categories
    public function getGalleryCategories()
    {
        return $this->db->order_by('id','desc')
                        ->get('gallery_categories')
                        ->result();
    }

    // Fetch latest category
    public function getLatestCategory()
    {
        $catg = $this->db->order_by('id','desc')
                        ->limit(1)
                        ->get('gallery_categories')
                        ->row();
        return $catg->id;
    }

    // Fetch gallery categories backgroung img
    public function getThumbnail($tid)
    {
        return $this->db->select('img_src')
                        ->where('gall_cat_id',$tid)
                        ->order_by('id','desc')
                        ->limit('1')
                        ->get('gallery')
                        ->row();
    }

    // Fetch gallery img by category
    public function getImagesByCat($cid)
    {
        return $this->db->where('gall_cat_id',$cid)
                        ->order_by('id','desc')
                        ->get('gallery')
                        ->result();
    }

    // Fetch gallery img with limit
    public function getInfoLim($table,$lim,$orderby)
    {
        return $this->db->order_by($orderby,'desc')
                        ->limit($lim)
                        ->get($table)
                        ->result();
    }

    // Count images in category 
    public function getCountOfImages($cid)
    {
        $query= $this->db->select('*')
                        ->where('gall_cat_id',$cid)
                        ->get('gallery');
        return $query->num_rows();
    }

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }

    // Search String
    public function search_string($string, $table, $column)
    {
        $this->db->from($table);
        $this->db->like($column, `'`.$string.`'`);
        $status=$this->db->get()->result();
        if($status){
            return true;
        }
        else{
            return false;
        }
    }
    
    // Fetch string id
    public function get_string_id($str, $tbl, $col)
    {
        $this->db->from($tbl);
        $this->db->like($col, `'`.$str.`'`);
        $id_arr=$this->db->get()->row();
        return $id_arr->id;
    }

    // Fetch Admin Profile
    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }

    

}
?>