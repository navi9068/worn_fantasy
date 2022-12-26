<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Admin extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('admin_model'); 
         
        // User login status 
        $this->isadminLoggedIn = $this->session->userdata('isadminLoggedIn'); 
		$typeuser = $this->session->userdata('usertype'); 
		if(!$this->isadminLoggedIn){ 
			redirect('admin_login'); 
		}
    }
	public function index(){ 
         $this->load->view('admin/main'); 
    }
	public function logo()
	{
		$where=array(
			'id'=>1
		);
		$table="setting";
		$data['logo']=$this->admin_model->select_data($table,$where);
		$this->load->view('admin/logo',$data);
	}
	public function save_logo()
	{
		$config['upload_path'] = FCPATH.'/logo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('sitelogo')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/logo', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());
			$logoname=$data['image_metadata']['file_name'];
			$table="setting";
			$where=array(
				'id'=>1
			);
			$datatoupdate=array(
				'logo'=>$logoname
			);
			$savedata=$this->admin_model->update_data($table,$where,$datatoupdate);
			redirect('admin/logo');
			}
		
	}
	public function heading()
	{
		$where=array(
			'id'=>1
		);
		$table="setting";
		$data['heading']=$this->admin_model->select_data($table,$where);
		$this->load->view('admin/heading',$data);
	}
	public function save_heading()
	{
		$table="setting";
		$where=array(
			'id'=>1
		);
		$datatoupdate=array(
			'h1_size'=>$this->input->post('h1_size'),
			'h2_size'=>$this->input->post('h2_size'),
			'h3_size'=>$this->input->post('h3_size'),
			'h4_size'=>$this->input->post('h4_size'),
			'h5_size'=>$this->input->post('h5_size'),
			'h6_size'=>$this->input->post('h6_size'),
			'heading_color'=>$this->input->post('heading_color')
		);
		$savedata=$this->admin_model->update_data($table,$where,$datatoupdate);
		if($savedata){
			redirect('admin/heading');
		}
	}
}	