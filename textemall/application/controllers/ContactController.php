<?php

class ContactController extends CI_Controller {

    
    public function __construct()
    {
	parent::__construct();
        $this->load->model('ContactModel');
        $this->load->model('GroupModel');
    }
    
    public function index()
    { 
        $data['record'] = $this->GroupModel->getData();
        $data['records'] = $this->ContactModel->getData();
        $this->load->view('contacts',$data);
    }

    public function addtogroup()
    {
        if($this->GroupModel->getData() != NULL)
        {
            $data['record'] = $this->GroupModel->getData();
            $data['records'] = $this->ContactModel->getData();
            $this->load->view('addtogroup',$data);    
        }
        else
        {
            $data['record'] = $this->GroupModel->getData();
            $data['records'] = $this->ContactModel->getData();
            $data['error'] = "No groups exist";
            $this->load->view('contacts',$data);
        }
        
    }
    
    public function insertData()
    {
        if($this->form_validation->run('contact_valid') == FALSE)
        {
            $data['not'] = 'Contact number already exists or is not in right format';
            $data['records'] = $this->ContactModel->getData();
            $this->load->view('contacts',$data);
            //redirect('ContactController');
        }
        else{
            
            //$this->SettingsModel->updateCred();
            $this->ContactModel->insData();
            $data['ins'] = '<strong>Success!</strong> Contact is successfully inserted';
            $data['records'] = $this->ContactModel->getData();
            $this->load->view('contacts',$data);
            //redirect('ContactController');
            //$data['success'] = '<strong>Success!</strong> Changes will get updated upon next login';
            //$this->load->view('page_profile_settings', $data);
            
        }
        
    }

    public function deleteData($id)
    {
	$this->ContactModel->delData($id);
        $data['del'] = '<strong>Success!</strong> Contact is successfully deleted';
        $data['records'] = $this->ContactModel->getData();
        $this->load->view('contacts',$data);
        //redirect('ContactController');
    }
    
    public function editData($id)
    {
	$this->ContactModel->updateData($id);
        $data['upd'] = '<strong>Success!</strong> Contact is successfully updated';
        $data['records'] = $this->ContactModel->getData();
        $this->load->view('contacts',$data);
        //redirect('ContactController');
    }
    
}
?>