<?php
class Mainmodel extends CI_model
{

public function selectpass($mail,$pass)
{
$this->db->select('*');
$this->db->from("admin");
$this->db->where("mail",$admin);
$qry=$this->db->get()->row('password');
return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
return password_verify($pass,$qry);
}

public function getuserid($mail)
{
$this->db->select('*');
$this->db->from("admin");
$this->db->where("mail",$admin);
return $this->db->get()->row('id');
}
public function getuser($id)
{
$this->db->select('*');
$this->db->from("admin");
$this->db->where("id",$id);
return $this->db->get()->row();
}

public function  approvedetails()
{
	$this->db->select('*');
	$qry=$this->db->get("register");
	return $qry;
}

public function approve($id)
{
	$this->db->set('is_email_verified','1');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("register");
	return $qry;
}
public function reject($id)
{
	$this->db->set('is_email_verified','2');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("register");
	return $qry;
}
// public function new()
// 	 {
// 		$this->db->select('*');
// 		$qry=$this->db->get("register");
// 		return $qry;
// 	 }


  
  function deletesdetails($id)
{
$this->db->set('is_email_verified','0');
$this->db->where("id",$id);
$this->db->delete("register");
} 

}
?>
