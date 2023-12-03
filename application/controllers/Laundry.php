<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry extends CI_Controller 
{

	public function __construct() {

            parent::__construct();

             $this->load->model('Home_model');
        }

    public function index()
	{
		$this->load->view('layout/laundry_header.php');
		  $this->load->view('layout/laundry_dashboard.php');
		  $this->load->view('layout/footer.php');
	}

	public function NewOrder()
	{
		

		  $data = array();
    $data['result'] = $this->Home_model->Viewdatajoin("tbl_hotel",null,null,null);
		  $this->load->view('layout/laundry_header.php');
		  $this->load->view('Laundry/NewOrder.php',$data);
		  $this->load->view('layout/footer.php');
	}

    public function Status_update1()
	{
		  $id=$this->uri->segment(3);
		
		  $val = array(
		  	          'status' =>'washed'
		  	          );

		$data['result']=$this->Home_model->update_status("tbl_hotel","id",$id,$val);
    	   redirect(base_url() . "Laundry/NewOrder");

	}
	public function Status_update2()
	{
		  $id=$this->uri->segment(3);
		
		  $val = array(
		  	          'status' =>'on_the_way'
		  	          );

		$data['result']=$this->Home_model->update_status("tbl_hotel","id",$id,$val);
    	   redirect(base_url() . "Laundry/NewOrder");

	}
    public function Status_update3()
	{
		  $id=$this->uri->segment(3);
		
		  $val = array(
		  	          'status' =>'completed'
		  	          );

		$data['result']=$this->Home_model->update_status("tbl_hotel","id",$id,$val);
    	   redirect(base_url() . "Laundry/NewOrder");

	}

	public function Payment_history()
	{
		
		  $data = array();
    //$data['result'] = $this->Home_model->ViewData("tbl_hotel",null,null,null);
		  $this->load->view('layout/laundry_header.php');
		  $this->load->view('Laundry/Payment_history.php',$data);
		  $this->load->view('layout/footer.php');
	}


	public function logout()
    {
    
      $newdata=$_SESSION['user'];
     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect('Laundry','refresh');
    }
}