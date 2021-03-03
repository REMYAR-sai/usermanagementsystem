<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/index.php/welcome
* - or -
* http://example.com/index.php/welcome/index
* - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/

 /**
Author:Remya R
 function construct
*/ 


 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
 }
  /**
Author:Remya R
 function index to load view
*/ 

 function index()
 {
  echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
  echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
 }

 /**
Author:Remya R
 function logout action
*/ 

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }
 

}
?>

