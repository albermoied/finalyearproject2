<?php

class SettingsController extends CI_Controller {

    
    public function __construct()
    {
	parent::__construct();
        $this->load->model('SettingsModel');
    }

    public function index()
    {
        $this->load->view('page_profile_settings');
    }
    
    public function editProfile()
    {
        if($this->form_validation->run('edit_profile') == FALSE)
        {
            $this->load->view('page_profile_settings');
        }
        else{
            
            $this->SettingsModel->updateData();
            $data['success'] = '<strong>Success!</strong> Changes will get updated upon next login';
            $this->load->view('page_profile_settings', $data);
            
        }
    }
    
    public function editCred()
    {
        if($this->form_validation->run('edit_cred') == FALSE)
        {
            $this->load->view('page_profile_settings');
        }
        else{
            
            $this->SettingsModel->updateCred();
            $data['success'] = '<strong>Success!</strong> Changes will get updated upon next login';
            $this->load->view('page_profile_settings', $data);
            
        }
    }

}

?>