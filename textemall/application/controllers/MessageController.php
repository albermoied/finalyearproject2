<?php

class MessageController extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GroupModel');
        $this->load->model('ContactModel');
        $this->load->model('MessageModel');
    }
    
    public function index()
    {
//        $data = $this->GroupModel->getData();
//        $gid = $data[0]->GroupId;
//        $data['sentmsg'] = $this->MessageModel->getMsg($gid);
        $data['records'] = $this->GroupModel->getData();
        $this->load->view('test', $data);
    }
    
    public function sendMsg()
    {
        $date = date("d/m/Y H:i");
        
        $group = $this->session->userdata('gid');
        
        if($group == NULL)
        {
            $data['nogroup'] = '<strong>Failure!</strong> No group selected';
            $data['records'] = $this->GroupModel->getData();
            $this->load->view('test', $data);
        }
        
        $this->MessageModel->setMsg($group);
        
        $msg = $this->input->post('msg');
        $this->send($msg);
        
        $data['sentmsg'] = $this->MessageModel->getMsg($group);
        $data['records'] = $this->GroupModel->getData();
        $this->load->view('test', $data);
    }
    
    public function send($m)
    {
        $gid = $this->session->userdata('gid');
        $data = $this->MessageModel->getNumber($gid);
       
        foreach($data as $num)
        {
            $n = $num->number;
            shell_exec('"C:\xampp\htdocs\textemall\gammu\bin\gammu.exe" --sendsms TEXT '.$n.' -text "'.$m.'"');
        }
        
       
    }
    
    public function checkGroup($id)
    {
        $data['sentmsg'] = $this->MessageModel->getMsg($id);
        $data['records'] = $this->GroupModel->getData();
        $this->session->set_userdata(array('gid' => $id));
        $this->load->view('test', $data);
    }
    
}
?>