<?php

class LoginController extends CI_Controller {


    public function __construct()
    {
	parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('ResetModel');
    
        if(!isset($_SESSION))
        {
            redirect(base_url());
        }
    }
    
    public function index()
    {
        $this->load->view('login');
    }
    
    public function signin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->ProfileModel->getData($username, $password);               
        
        if($user != NULL)
        {
            $this->session->set_userdata(array('username' => $username,
                'password' => $password));
            
            $profile = $user[0]->Profile_profileId;
            $data = $this->ProfileModel->getProfile($profile);
            $id = $data[0]->profileId;
            $name = $data[0]->Name;
            $email = $data[0]->Email;
            $ContactNo = $data[0]->ContactNo;
            $organization = $data[0]->Organization;
            
            $this->session->set_userdata(array('id' => $id,
                'name' => $name,
                'email' => $email,
                'contact' => $ContactNo,
                'org' => $organization));
            
            redirect('Home/dashboard');
        }
        else
        {
            $data['error'] = 'Invalid Username or Password';
            $this->load->view('login', $data);
        }
        
    }
    
    public function reset()
    {
        $this->load->view('reset_phone');
    }
    
    public function resetPhone()
    {
        $num = $this->input->post('contactNo');
        if($this->ResetModel->getNum($num) != NULL)
        {
            $this->session->set_userdata(array('number' => $num));
            $this->verifySms($num);
            $this->load->view('reset_code');
        }
        else
        {
            $data['error'] = 'Invalid Contact Number';
            $this->load->view('reset_phone', $data);
        }
    }
    
    public function resetCode()
    {
        $num = $this->session->userdata('number');
        $a = $this->ProfileModel->getpid($num);
        $pid = $a[0]->profileId;
        
        if($this->ResetModel->getCode($pid) != NULL)
        {
            $this->load->view('reset_pass');
        }
        else
        {
            $data['error'] = 'Verification code entered is incorrect';
            $this->load->view('reset_code', $data);
        }
    }
    
    public function resetPass()
    {
        
        if($this->form_validation->run('reset') == FALSE)
        {
            $this->load->view('reset_pass');
        }
        else{
            $num = $this->session->userdata('number');
            $a = $this->ProfileModel->getpid($num);
            $pid = $a[0]->profileId;
            $this->ResetModel->setPass($pid);
            redirect(base_url());
        }
    }
    
    public function verifySms($n)
    {
        $ver = mt_rand(100000, 999999);
        $msg = 'Textem All, Your verification code is';
        
        shell_exec('"C:\xampp\htdocs\textemall\gammu\bin\gammu.exe" --sendsms TEXT '.$n.' -text "'.$msg.' '.$ver.'"');
        
        $num = $this->session->userdata('number');
        $a = $this->ProfileModel->getpid($num);
        $pid = $a[0]->profileId;
        $this->ResetModel->setCode($ver, $pid);
        
    }
        
    public function signout()
    {
        
        
            $this->session->sess_destroy();
            redirect(base_url());
        
    }
        
}

?>