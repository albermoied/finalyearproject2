<?php

class GroupController extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GroupModel');
        $this->load->model('ContactModel');
    }
    
    public function index()
    {
        $data['records'] = $this->GroupModel->getData();
        $data['record'] = $this->GroupModel->getBridge();
        $this->load->view('groups', $data);
    }
    
    public function get()
    {
       $value =  $this->input->get('i');
        $data['records'] = $this->GroupModel->getData();
        $data['record'] = $this->GroupModel->getBridgeByWhere($value);
        $this->load->view('groups', $data);
    }
    
    public function insertData()
    {
        $this->GroupModel->insertData();
        redirect('GroupController');
    }
    
    public function deleteData($id)
    {
	$this->GroupModel->delData($id);
        redirect('GroupController');
    }
    
    public function delGroup($gid)
    {
        $this->GroupModel->delGroup($gid);
        redirect('GroupController');
    }
    
    public function message()
    {
        $data['records'] = $this->GroupModel->getData();
        $this->load->view('test', $data);
    }
    
    public function addContact()
    {
        foreach($this->input->post('contact') as $sel)
        {
            if($this->GroupModel->getContact($sel) == NULL)
            {
                $this->GroupModel->setContact($sel);
            }
            else{
                $data['fail'] = '<strong>Failure!</strong> Contact already in group';
                $data['records'] = $this->ContactModel->getData();
                $data['record'] = $this->GroupModel->getData();
                $this->load->view('addtogroup', $data);
            }
        }
        $data['success'] = '<strong>Success!</strong> Contact inserted in group';
        $data['records'] = $this->ContactModel->getData();
        $data['record'] = $this->GroupModel->getData();
        $this->load->view('addtogroup', $data);
        
    }
}

?>

