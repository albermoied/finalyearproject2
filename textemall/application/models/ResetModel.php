<?php

class ResetModel extends CI_Model{
    
    
    public function __construct()
    {
	parent::__construct();
    }
    
    
    public function getNum($n)
    {
        $query = $this->db->select('ContactNo')
                 ->from('profile')->where('ContactNo', $n);
            
        return $query->get()->result();
        
    }

    public function setCode($v, $id)
    {
        $ver = array(
                'VerificationCode' => $v
            );
        //$u = 'alber.moied';    
        $this->db->where('Profile_profileId', $id)->update('user', $ver);
    }
    
    public function getCode($pid)
    {
        $ver = $this->input->post('verificationCode');
        //$u = 'alber.moied';
        $query = $this->db->select('VerificationCode')
                ->from('user')->where('VerificationCode', $ver)->where('Profile_profileId', $pid);
        
        return $query->get()->result();
    }
    
    public function setPass($pid)
    {
        $pass = array(
                'Password' => $this->input->post('password')
            );
        //$u = 'alber.moied';    
        $this->db->where('Profile_profileId', $pid)->update('user', $pass);
    }
    
}


?>
