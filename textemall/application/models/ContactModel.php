<?php

class ContactModel extends CI_Model {

	public function __construct()
	{
            parent::__construct();
            
	}
        
        public function getData()
        {
            return $this->db->get('contact')->result();
        }
        
        public function delData($id)
        {   
            $this->db->where('Contact_ContactId', $id)->delete('groupcontacts');
            $this->db->where('ContactId', $id)->delete('contact');
             
        }
    
        public function insData()
        {
            $ins = array(
                'Name' => $this->input->post('name'),
                'ContactNo' => $this->input->post('number')
            );
            
            $this->db->insert('contact', $ins);
        }
        
        public function updateData($id)
        {    
            $ins = array(
                'Name' => $this->input->post('name'),
                'ContactNo' => $this->input->post('number')
            );
            
            $this->db->where('ContactId', $id)->update('contact', $ins);
        }
        
}
?>