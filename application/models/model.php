<?php 
    class Model extends CI_Model {
        public function getPosts(){
            $query = $this->db->get('tbl_post');
            if($query->num_rows()>0){
                return $query->result();
            }
        }
        public function addpost($data){
            return $this->db->insert('tbl_post',$data);
        }

        public function update_product($id) 
	    {
	        $data=array(
	            'title' => $this->input->post('title'),
	            'description'=> $this->input->post('description')
	        );
	        if($id==0){
	            return $this->db->insert('tbl_post',$data);
	        }else{
	            $this->db->where('id',$id);
	            return $this->db->update('tbl_post',$data);
	        }        

    }



?>