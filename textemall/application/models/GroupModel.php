<?php

class GroupModel extends CI_Model {
    
    
    public function getData() 
            {
                $username = $this->session->userdata('username');
                $query = $this->db->where('User_UserName', $username)->get('group');
                return $query->result();
            }

    public function insertData()
    {
        $username = $this->session->userdata('username');
        $ins = array(
            'Name' => $this->input->post('groupname'),
            'User_UserName' => $username
        );
            
        $this->db->insert('group', $ins);
        
    }
    public function getBridge()
    {
        $value = $this->session->userdata('username');
       // $query = $this->db->get('groupcontacts');
        $this->db->select(' contact.name AS contact_name, contact.ContactNo AS number, group.Name AS group_name, Contact_ContactId ');
	$this->db->from('groupcontacts');
	$this->db->join('contact', 'groupcontacts.Contact_ContactId=contact.ContactId');
	$this->db->join('group', 'groupcontacts.Group_GroupId=group.GroupId');
        $this->db->where('group.User_UserName',$value);
	$query = $this->db->get();
        return $query->result();
    }
    public function getBridgeByWhere($gid)
    {
       // $query = $this->db->get('groupcontacts');
        $this->db->select(' contact.name AS contact_name, contact.ContactNo AS number, group.Name AS group_name,Contact_ContactId ');
	$this->db->from('groupcontacts');
	$this->db->join('contact', 'groupcontacts.Contact_ContactId=contact.ContactId');
	$this->db->join('group', 'groupcontacts.Group_GroupId=group.GroupId');
	$this->db->where('groupcontacts.Group_GroupId', $gid);
	$query = $this->db->get();
        return $query->result();
    }
    
    public function delData($id)
    {
        $this->db->where('Contact_ContactId', $id)->delete('groupcontacts');
    }
    
    public function delGroup($id)
    {
        $this->db->where('Group_GroupId', $id)->delete('groupcontacts');
        $this->db->where('GroupId', $id)->delete('group');
        
    }
    
    public function setContact($cid)
    {
        $ins = array(
            'Group_GroupId' => $this->input->post('groupdropdown'),
            'Contact_ContactId' => $cid
        );
        
        $this->db->insert('groupcontacts', $ins);
        
    }
    
    public function getContact($cid)
    {
        $gid = $this->input->post('groupdropdown');
        $query = $this->db->where('Group_GroupId', $gid)->where('Contact_ContactId', $cid)->get('groupcontacts');
        return $query->result();
    }
    
}

?>