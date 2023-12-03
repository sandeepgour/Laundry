<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller 
{

	 public function __construct() {

            parent::__construct();

             $this->load->model('Home_model');
        }

    public function index()
	{
		
		  $this->load->view('layout/hotel_header.php');
		  $this->load->view('layout/hotel_dashboard.php');
		  $this->load->view('layout/footer.php');
	}

	public function NewOrder()
	{
		  $this->load->view('layout/hotel_header.php');
		  $this->load->view('Hotel/NewOrder.php');
		  $this->load->view('layout/footer.php');
	}

    public function PlacedOrder()
	{
		$data = array();
    $data['result'] = $this->Home_model->Viewdatajoin("tbl_hotel",null,null,null);
		  $this->load->view('layout/hotel_header.php');
		  $this->load->view('Hotel/PlacedOrder.php',$data);
		  $this->load->view('layout/footer.php');
	}
	public function AddNewOrder()
	{
		  $val = array(
		  	   'pick_up_date' =>$this->input->post('pickupdate') , 
		  	   'delivered_date' =>$this->input->post('delivered_date') , 
		  	   'no_of_clothes' =>$this->input->post('clothes_no') , 
		  	   'extra_instruction' =>$this->input->post('Instruction') , 
		  	   'status' =>"new" 
		  	);
           //print_r($val);
          $data['result']=$this->Home_model->AddData("tbl_hotel",$val);
          redirect(base_url().'Hotel/PlacedOrder');

	}

	public function MyPayment()
	{
		  $data=array();
		  $data['id']=$this->uri->segment(3);
		 
		  $this->load->view('layout/hotel_header.php');
		  $this->load->view('Hotel/Payment_send.php',$data);
		  $this->load->view('layout/footer.php');
	}

	public function Payment()
	{
		   $id=$this->input->post('id');
		   $amount=$this->input->post('amount');
		   $pay_cut_off=($amount*10)/100;
		   $cut_pay=$amount-$pay_cut_off;
		   $val = array(
		   	    'clothes_id' =>$this->input->post('id'),
		   	    'amount' =>$cut_pay,
		   	    'payment_cut_off' =>$pay_cut_off,
		   	    'payment_status' =>"completed"
		   	     );
		   //print_r($val);
		  $data['result']=$this->Home_model->AddData("tbl_payment",$val);
		  redirect(base_url().'Hotel/PlacedOrder');
		  // if ($data) {
		  // 	$payment_status = array('payment_status' =>"completed" );
		  // 	 $dat['res']=$this->Home_model->update_edit("tbl_hotel","id",$payment_status,$id);
		  // 	 
		  // }
  
	}
}