<?php
class Register_model extends CI_model
{
	/**
Author:Remya R
 function  to insert registered details
*/ 

function insert($data)
 {
  $this->db->insert('register', $data);
  return $this->db->insert_id();
 }
 function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('register');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => '1'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('register', $data);
   return true;
  }
  else
  {
   return false;
  }
}
 function verify_email()
 {
  if($this->uri->segment(3))
  {
    $verification_key=$this->uri->segment(3);
   }
   if($this->register_model->verify_email($verification_key))
   {
   	$data['message']='<h1>verified</h1> <a href="'.base_url().'login">here</a></h1>';
   }
  else
  {
   $data['message']='<h1>invalid</h1>';
  }
  $this->load->view('email_verification',$data);
 }
}
?>