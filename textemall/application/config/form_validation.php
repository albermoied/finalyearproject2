<?php
$config = array(
	'user_signup' => array(
					array(
							'field' => 'name',
							'label' => 'Name',
							'rules' => 'required|regex_match[/[A-Z][a-z]+\s[A-Z][a-z]+/]'
						),
					array(
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|valid_email|is_unique[profile.Email]'
						),
					array(
							'field' => 'organization',
							'label' => 'Organization',
							'rules' => 'required'
						),
					array(
							'field' => 'contactNo',
							'label' => 'Contact No',
							'rules' => 'required|integer|exact_length[11]|is_unique[profile.ContactNo]'
						),
					array(
							'field' => 'username',
							'label' => 'Username',
							'rules' => 'required|regex_match[/\S+/]|is_unique[user.UserName]'
						),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|min_length[6]'
						),
					array(
							'field' => 'passconf',
							'label' => 'Confirm Password',
							'rules' => 'required|matches[password]'
						)
					
		),
        'reset' => array(
                                array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|min_length[6]'
				),
                                array(
							'field' => 'passconf',
							'label' => 'Confirm Password',
							'rules' => 'required|matches[password]'
				)
        ),
        'edit_profile' => array(
                                array(
							'field' => 'name',
							'label' => 'Name',
							'rules' => 'required|regex_match[/[A-Z][a-z]+\s[A-Z][a-z]+/]'
						),
					array(
							'field' => 'organization',
							'label' => 'Organization',
							'rules' => 'required'
						),
                                        array(
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|valid_email'
						),
					
					array(
							'field' => 'contact',
							'label' => 'Contact No',
							'rules' => 'required|integer|exact_length[11]'
						),
        ),
        'edit_cred' => array(
                                        array(
							'field' => 'username',
							'label' => 'Username',
							'rules' => 'required|regex_match[/\S+/]'
						),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|min_length[6]'
						),
					array(
							'field' => 'passconf',
							'label' => 'Confirm Password',
							'rules' => 'required|matches[password]'
						)
        ),
        'contact_valid' => array(
                                        array(
							'field' => 'name',
							'label' => 'Name',
							'rules' => 'required'
						),
					array(
							'field' => 'number',
							'label' => 'Contact No',
							'rules' => 'required|integer|exact_length[11]|is_unique[contact.ContactNo]'
						),
        )
    );
?>