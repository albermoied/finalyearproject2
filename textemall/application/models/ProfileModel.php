<?php

class ProfileModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
        
        public function setData()
        {
            $ins = array(
                'Name' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'ContactNo' => $this->input->post('contactNo'),
                'Organization' => $this->input->post('organization')
            );
            
            $this->db->insert('profile', $ins);
            
            $id = $this->db->select('profileId')->from('profile')->order_by('profileId', 'DESC')->limit(1)->get()->result();
            
            $user = array(
                'UserName' => $this->input->post('username'),
                'Password' => $this->input->post('password'),
                'Status' => '1',
                'Profile_profileId' => $id[0]->profileId
            );
            
            $this->db->insert('user', $user);
            
//            $groupUser = array(
//                'User_UserName' => $this->input->post('username')
//            );
//            
//            $this->db->insert('group', $groupUser);
        }
        
        public function getData($u, $p)
        {
            return $query = $this->db->select('*')
                    ->from('user')->where('UserName', $u)->where('Password', $p)->get()->result();
              
        }
        
        public function getProfile($id)
        {
            return $query = $this->db->select('*')
                    ->from('profile')->where('profileId', $id)->get()->result();
          
        }
        public function getpid($n)
        {
            return $query = $this->db->select('profileId')->from('profile')->where('ContactNo', $n)->get()->result();
        }
}
