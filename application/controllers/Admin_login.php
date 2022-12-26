<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Admin_login extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('admin_model'); 
         
        // User login status 
        $this->isadminLoggedIn = $this->session->userdata('isadminLoggedIn'); 
		if($this->isadminLoggedIn){ 
			redirect('admin'); 
		}
    }
	public function index(){ 
         $this->load->view('admin/login'); 
    }
	public function signin(){ 
         if($this->input->post('useremail')){ 
            $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('userpass', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('useremail'), 
                        'password' => md5($this->input->post('userpass')), 
                        'active' => 1 
                    ) 
                ); 
                $checkLogin = $this->admin_model->getRows($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isadminLoggedIn', TRUE); 
                    $this->session->set_userdata('adminId', $checkLogin['id']); 
					$this->session->set_userdata('usertype', 'admin'); 
                    $data['success_msg'] = 'admin Login successfully'; 
					redirect('admin');	
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        }
		$data['error_msg'] = 'Please fill all the mandatory fields.'; 
		$this->load->view('admin/login',$data); 	
    }

}	