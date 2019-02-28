<?php

class script extends CI_Controller
{
    
    public function index()
    {   
//        $this->db->select_max('User_UserName');
//        $query = $this->db->get('group')->result();
//        
//        foreach($query as $max)
//        {
//            echo $max->User_UserName;
//        }
        
        $query = $this->db->select('UserName')
                    ->from('user')->get()->result();
        foreach($query as $max)
        {
            $user = $max->UserName;
            $q = $this->db->where('User_UserName', $user)->get('group')->result();
            $i = 0;
            foreach($q as $group)
            {
                
                $i++;
                //echo $user . '->' . $group->Name;
                //echo '<br>';
            }
            echo $user . '->' . $i;
            echo '<br>';
        }
        
    }
}

?>
