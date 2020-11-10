<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function __construct() {
        //load database in autoload libraries 
          parent::__construct(); 
          $this->load->model('quries');         
         }
		public function index(){
		$welcome=new quries;
		$data['data']=$welcome->getPosts();
		$this->load->view('welcome_message',$data);
	     }
	    public function create(){
		$this->load->view('create');
	     }
		public function save(){
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run())
		{
			$data= $this->input->post();
			$today = date('y-m-d');
			$data['date_created'] =  $today;
			unset($data['submit']);
			$this->load->model('quries');
			if($this->quries->addpost($data)){
				$this->session->set_flashdata('msg','POST SAVED SUCCESSFULLY!!!!');
				}
			else{
				$this->session->set_flashdata('login_failed','failed to  saved ');
				}
			return redirect('welcome');
		}
		else{
			$this->load->view('create');
		    }	
		}
		public function edit($id){
		$this->load->model('quries');
		$rt=$this->quries->find_item($id);
		$this->load->view('update',['post'=>$rt]);		
	    }
		public function update($id){
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run())
		{
			$data= $this->input->post();
			$today = date('y-m-d');
			$data['date_created'] =  $today;
			unset($data['submit']);
			$this->load->model('quries');
			if($this->quries->updatepost($id,$data)){
				$this->session->set_flashdata('msg','POST UPDATED SUCCESSFULLY!!!!');
				}
			else{
				$this->session->set_flashdata('msg','failed to Update ');
				}
			return redirect('welcome');
		}
		else{
			$this->load->view('update');
		    }
	    }
		public function view($id){
		$this->load->model('quries');
		$rt=$this->quries->find_item($id);
		$this->load->view('view',['post'=>$rt]);
		}
   	     public function delete($id){
	       $this->db->where('id', $id);
	       if($this->db->delete('tbl_post')){
		   $this->session->set_flashdata('msg','POST DELETED SUCCESSFULLY ');
			   }
		   else{
			$this->session->set_flashdata('msg','POST FAILED TO DELETE ');
		   }
	        return redirect ('welcome');
	    }	
}
?>

