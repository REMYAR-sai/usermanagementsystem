<?php
class Login_model extends CI_model
{
	/**
Author:Remya R
 function to see whether one can login or not
*/ 

function can_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('register');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    if($row->is_email_verified == '1')
    {
     $store_password = $this->encrypt->decode($row->password);
     if($password == $store_password)
     {
      $this->session->set_userdata('id', $row->id);
     }
     else
     {
      return 'Wrong Password';
     }
    }
    else
    {
     return 'First verify your email address';
    }
   }
  }
  else
  {
   return 'Wrong Email Address';
  }
 }
   

}
?>