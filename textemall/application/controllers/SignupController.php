<?php

class SignupController extends CI_Controller {

    
    public function __construct()
    {
	parent::__construct();
        $this->load->model('ProfileModel');
    }

    public function registration()
    {
        if($this->form_validation->run('user_signup') == FALSE)
        {
            $this->load->view('page_registration1');
        }
        else{
            
            $this->ProfileModel->setData();
            $email = $this->input->post('email');
            $this->welcome($email);
            redirect(base_url());
        }
    }
    
    public function welcome($em)
	{
            $subject = 'Text em All';
            
            $message = '<h2>Dear User,<br /><br /><br />'
                    . 'Welcome to Text em All !!<br /><br /><br />'
                    . 'Regards,<br />'
                    . 'Team.</h2>';
            
            $result = $this->email
                ->from('noreply.textemlall@gmail.com')
                ->to($em)
                ->subject($subject)
                ->message($message)
                ->send();
            
            $this->load->view('login');
	}

    
}    
?>
