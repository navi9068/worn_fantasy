<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
				
    } 
     
    public function index(){ 
        if($this->isUserLoggedIn){ 
            redirect('/'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    public function account(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->user->getRows($con); 
            
            $this->load->view('welcome_message', $data); 
            
        }else{ 
            redirect('/'); 
        } 
    } 
 
    public function login(){ 
        $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('log_email')){ 
            $this->form_validation->set_rules('log_email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('log_password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('log_email'), 
                        'password' => md5($this->input->post('log_password')), 
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
					$this->session->set_userdata('usertype', 'user'); 
                    $data['success_msg'] = 'user Login successfully';  
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
         echo json_encode($data);
    } 
 
    public function registration(){ 
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('reg_email')){ 
            $this->form_validation->set_rules('reg_name', 'UserName', 'required'); 
			$this->form_validation->set_rules('reg_alias', 'Nickname', 'required');
            $this->form_validation->set_rules('reg_country', 'Country', 'required'); 
            $this->form_validation->set_rules('reg_email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('reg_password', 'password', 'required'); 
            
 
            $userData = array( 
                'nickname' => strip_tags($this->input->post('reg_alias')), 
                'username' => strip_tags($this->input->post('reg_name')), 
                'email' => strip_tags($this->input->post('reg_email')), 
                'password' => md5($this->input->post('reg_password')), 
                'gender' => $this->input->post('reg_gender'), 
                'country' => strip_tags($this->input->post('reg_country')),
				'status' => 1 				
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                    $data['success_msg'] ='Your account registration has been successful. Please login to your account.';
					
                }else{ 
                    $data['error_msg'] = 'username or email already used!'; 
                } 
            }else{ 
                $data['error_msg'] = 'username or email already used!'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
        
        echo json_encode($data);
         
    } 
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('/'); 
    } 
     
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 
}