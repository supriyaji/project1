<?php 
 class quries extends CI_Model{
     public function getPosts(){
        if(!empty($this->input->get("search"))){
            $this->db->like('title', $this->input->get("search"));
            $this->db->or_like('description', $this->input->get("search")); 
          }
        
        $query = $this->db->get("tbl_post");
        return $query->result();
         }

     public function addpost($data){
      return $this->db->insert('tbl_post',$data);
      }

    public function find_item($id)
    {
      $q=$this->db->select(['title','description','id'])
                ->where('id',$id)
                ->get('tbl_post');
                return $q->row();
    }

    public function updatepost( $id,Array $post){
            return $this->db->where('id',$id)
                  ->update('tbl_post',$post);

    }
 }
?>