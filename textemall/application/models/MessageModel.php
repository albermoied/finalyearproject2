<?php

class MessageModel extends CI_Model{
  
    public function setMsg($gid)
    {
        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d H:i:s");
        $ins = array(
            'SentMessage' => $this->input->post('msg'),
            'Time' => $date,
            'Group_GroupId' => $gid
        );
        $this->db->insert('sentmsg', $ins);
    }
    
    public function getMsg($gid)
    {
        $query = $this->db->where('Group_GroupId', $gid)->get('sentmsg');
        return $query->result();
    }
    
    public function getNumber($gid)
    {
        $this->db->select('contact.ContactNo AS number');
	$this->db->from('groupcontacts');
	$this->db->join('contact', 'groupcontacts.Contact_ContactId=contact.ContactId');
	$this->db->join('group', 'groupcontacts.Group_GroupId=group.GroupId');
	$this->db->where('groupcontacts.Group_GroupId', $gid);
	$query = $this->db->get();
        return $query->result();
    }
    
}

?>
