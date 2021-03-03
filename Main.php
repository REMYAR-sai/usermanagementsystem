<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('Mainmodel');
 } 

  /**
Author:Remya R
 function index inorder to view homepage
*/ 
   
function index()
 {
  $this->load->view('home');
 }      
 
  /**
Author:Remya R
 function index inorder to view admin homepage
*/ 
   
function adminlog()
 {
  $this->load->view('admin');
 }      
  /**
Author:Remya R
 function index inorder to view admin logn
*/ 
   
function admin()
 {
  $this->load->view('adminlogin');
 }      

function approvedetails()
 {
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->approvedetails();
	$this->load->view('approveuser',$data);
 }
 function approve()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->approve($id);
		redirect('main/approvedetails','refresh');
	}
function rejectit()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->reject($id);
		redirect('main/approvedetails','refresh');
	}

// function deletedetails()
// 	{
// 		$this->load->model('Mainmodel');
// 		$id=$this->uri->segment(3);
// 		$this->Mainmodel->deletedetails($id);
// 		redirect('main/new','refresh');
// 	}
// function new()
// 	{
		
// 		$this->load->model('Mainmodel');
// 		$data['n']=$this->Mainmodel->new();
// 		$this->load->view('delete',$data);
// 	}
function delete()
{
   $this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->deletesdetails($id);
   redirect('main/approvedetails','refresh');
}
public function reject()
  {
    $this->load->model('Mainmodel');
    $id=$this->uri->segment(3);
    $this->Mainmodel->reject($id);
    redirect('main/approvedetails','refresh');
  }

// function delete_data()
//     {
//         $id=$this->uri->segment(3);
//         $this->Main_model->delete_data($id);
//         redirect(base_url()."deleted");
//     }
// function deleted()
//     {
//         $this->index();
//     }

}
