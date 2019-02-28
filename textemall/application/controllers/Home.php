<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
        public function __construct()
	{
            parent::__construct();
            $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
            $this->output->set_header('Pragma: no-cache');
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
	
	public function dashboard()
	{
            $this->load->view('index');
	}
	
	public function contacts()
	{
            $this->load->view('contacts');
	}
	
	public function groups()
	{
            $this->load->view('groups');
	}
	
	public function messages()
	{
            $this->load->view('test');
	}
	
	public function settings()
	{
            $this->load->view('page_profile_settings');
	}
	
	public function registration()
	{
            $this->load->view('page_registration1');
	}
        
        public function welcome()
	{
            $subject = 'Textem All';
            
            $message = '<h2>Dear User,<br /><br /><br />'
                    . 'Welcome to Textem All !!<br /><br /><br />'
                    . 'Regards,<br />'
                    . 'Team.</h2>';
            $mail = 'alber.moied@gmail.com';
            
            $result = $this->email
                ->from('noreply.textemlall@gmail.com')
                ->to($mail)
                ->subject($subject)
                ->message($message)
                ->send();
            
            $this->load->view('login');
	}
        
        public function verifySms()
	{
            $num = '+923219430654';
            $ver = mt_rand(100000, 999999);
            $msg = 'Textem All, Your verification code is';

            $sms = shell_exec('"E:\Gammu-1.32.0\bin\gammu.exe" --sendsms TEXT '.$num.' -text "'.$msg.' '.$ver.'"');
            
            echo $sms;
 
        }
      
}
