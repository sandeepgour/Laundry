<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	   public function __construct() {

            parent::__construct();

             $this->load->model('Home_model');
        }

    public function index()
	{
		  $this->load->view('layout/header.php');
		  $this->load->view('layout/dashboard.php');
		  $this->load->view('layout/footer.php');
	}

	//Hotel
	public function AddHotel()
	{
		  $this->load->view('layout/header.php');
		  $this->load->view('admin/addhotel.php');
		  $this->load->view('layout/footer.php');
	}
	public function ViewHotel()
	{
		$data = array();

    $data['result'] = $this->Home_model->ViewData("tbl_add_hotel","status","assign",null);
		  $this->load->view('layout/header.php');
		  $this->load->view('admin/viewhotel.php',$data);
		  $this->load->view('layout/footer.php');
	}
    
    public function Hotel_add()
    {
    	   $val= array(
    	   	    'hotel_name' =>$this->input->post('hotelname') , 
    	   	    'address' =>$this->input->post('hotel_address') ,
    	   	    'owner' =>$this->input->post('hotel_owner') ,
    	   	    'phone_no' =>$this->input->post('hotel_phone_no') ,
    	   	    'email_id' =>$this->input->post('email_id') ,
    	   	    'hotel_no' =>$this->input->post('hotel_number') ,
    	   	    'status' =>"assign"
    	   	  );
    	   //print_r($val);
    	   $data['result']=$this->Home_model->AddData("tbl_add_hotel",$val);
    	   $this->AddHotel();
    }
    
    public function Delrow()
    {
      $rowid="id";
      $id=$this->uri->segment(3);
      $this->Home_model->deleterow('tbl_add_hotel',$id,$rowid);
      redirect(base_url() ."/Home/ViewHotel");

    }

    public function Editrow()
    {

        $id['data']=$this->uri->segment(3);
          $this->load->view('layout/header.php');
		  $this->load->view('admin/updatehotel.php',$id);
		  $this->load->view('layout/footer.php');
      

    }
    public function Hotel_update()
    {
          $id=$this->input->post('id');
    	  $val= array(
    	   	    'hotel_name' =>$this->input->post('hotelname') , 
    	   	    'address' =>$this->input->post('hotel_address') ,
    	   	    'owner' =>$this->input->post('hotel_owner') ,
    	   	    'phone_no' =>$this->input->post('hotel_phone_no') ,
    	   	    'email_id' =>$this->input->post('email_id') ,
    	   	    'hotel_no' =>$this->input->post('hotel_number') ,
    	   	    'status' =>"assign"
    	   	  );
    	   //print_r($val);

    	   $data['result']=$this->Home_model->update_edit("tbl_add_hotel","id",$val,$id);
    	   redirect(base_url() ."/Home/ViewHotel");
    }


    //Laundry
	public function AddLaundry()
	{
		  $this->load->view('layout/header.php');
		  $this->load->view('admin/addlaundry.php');
		  $this->load->view('layout/footer.php');
	}
	public function ViewLaundry()
	{
		   $data = array();

    $data['result'] = $this->Home_model->ViewData("tbl_add__services","status","false",null);

		  $this->load->view('layout/header');
		  $this->load->view('admin/viewlaundry',$data);
		  $this->load->view('layout/footer');
	}
    
    public function Laundry_add()
    {
    	   $val= array(
    	   	    'name' =>$this->input->post('provider_name') , 
    	   	    'address' =>$this->input->post('provider_address') ,
    	   	    'services_owner' =>$this->input->post('provider_owner') ,
    	   	    'phone_no' =>$this->input->post('contact_no') ,
    	   	    'email_id' =>$this->input->post('provider_email_id') ,
    	   	    'id_proof' =>$this->input->post('idproof') ,
    	   	    'status' =>"false"
    	   	  );
    	   //print_r($val);
    	   $data['result']=$this->Home_model->AddData("tbl_add__services",$val);
    	   redirect(base_url() . "Home/ViewLaundry");
    	   //$this->ViewLaundry();

    	   
    }

    public function DelrowLaundry()
    {
      $rowid="id";
      $id=$this->uri->segment(3);
      $this->Home_model->deleterow('tbl_add__services',$id,$rowid);
      redirect(base_url() ."/Home/ViewLaundry");

    }
    public function EditrowLaundry()
    {

        $id['data']=$this->uri->segment(3);
          $this->load->view('layout/header.php');
		  $this->load->view('admin/up_laundry.php',$id);
		  $this->load->view('layout/footer.php');
      

    }

    public function Lanundry_update()
    {
          $id=$this->input->post('id');
    	  $val= array(
    	   	    'name' =>$this->input->post('provider_name') , 
    	   	    'address' =>$this->input->post('provider_address') ,
    	   	    'services_owner' =>$this->input->post('provider_owner') ,
    	   	    'phone_no' =>$this->input->post('contact_no') ,
    	   	    'email_id' =>$this->input->post('provider_email_id') ,
    	   	    'id_proof' =>$this->input->post('idproof') ,
    	   	    'status' =>"false"
    	   	  );
    
    	   
    	   $data['result']=$this->Home_model->update_edit("tbl_add__services","id",$val,$id);
    	   redirect(base_url() . "Home/ViewLaundry");
    }


	//payment history
	public function PaymentHistory()
	{
		  $this->load->view('layout/header.php');
		  $this->load->view('admin/payment_history.php');
		  $this->load->view('layout/footer.php');
	}

	//queries
	public function OrderHistory()
	{
		$data = array();
    $data['result'] = $this->Home_model->Viewdatajoin("tbl_hotel",null,null,null);
		  $this->load->view('layout/header.php');
		  $this->load->view('admin/NewQueries.php',$data);
		  $this->load->view('layout/footer.php');
	}

	public function Status_update1()
	{
		  $id=$this->uri->segment(3);
		
		  $val = array(
		  	          'status' =>'assigned'
		  	          );

		$data['result']=$this->Home_model->update_status("tbl_hotel","id",$id,$val);
    	   redirect(base_url() . "Home/OrderHistory");

	}
    
    public function MyPayment()
    {
          echo $id=$this->uri->segment(3);
    }


	public function logout()
    {
    
      $newdata=$_SESSION['user'];
     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect('Home','refresh');
    }

}
