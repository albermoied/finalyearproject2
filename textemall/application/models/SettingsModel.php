<?php

class SettingsModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
        
        public function updateData()
        {
            $ins = array(
                'Name' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'ContactNo' => $this->input->post('contact'),
                'Organization' => $this->input->post('organization')
            );
            
            $pid = $this->session->userdata('id');
            $this->db->where('profileId', $pid)->update('profile', $ins);
            
        }
        
        public function updateCred()
        {
            $be = $this->session->userdata('username');
            
            $update = array(
                'User_UserName' => $this->input->post('username')
            );
            
            $this->db->where('User_UserName', $be)->update('group', $update);
            
            $id = $this->session->userdata('id');
            $user = array(
                'UserName' => $this->input->post('username'),
                'Password' => $this->input->post('password'),
            );
            
            $this->db->where('Profile_profileId', $id)->update('user', $user);
            
            
            $this->session->set_userdata(array('username' => $this->input->post('username')));
        }
}

?>