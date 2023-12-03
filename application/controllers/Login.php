<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct() {
        parent::__construct();
    }

    public function index()
	{
		$this->load->view('login');
	}

    public function LoginUser()
    {
    	  $this->load->model('Login_model','myinterest');
          if($this->input->post('submit')){
			$username = $this->input->post('username');
		    $password = $this->input->post('password');
		    $user_type = $this->input->post('user_type');
	        $post_data = array('username'=> $username,'password'=>$password,'user_type'=>$user_type);
		   // $this->db->insert('posts',$post_data);
		  $data = $this->myinterest->Mylogin($post_data);
		    //print_r($data);
		   foreach ($data as $val) {
		   	    $value=$val['user_type'];
		   	    $session=$val['username'];
		   }
		   
		     if ($value=="admin") {
		     	//$this->session->set_userdata($newdata);
		     	$_SESSION['user'] =$session;
				echo '<script>window.location = "'. site_url().'Home"</script>';
		     }
		     elseif ($value=="laundry") {
		     	//$this->session->set_userdata($newdata);
		     	$_SESSION['user'] =$session;
				echo '<script>window.location = "'. site_url().'Laundry"</script>';
		     }
		     elseif ($value=="hotel") {
		     	//$this->session->set_userdata($newdata);
		     	$_SESSION['user'] =$session;
				echo '<script>window.location = "'. site_url().'Hotel"</script>';
		     }
		    /*if(isset($data) &&  is_array($data)){
		    	$newdata = array(
                   'username'  => $data[0]['username'],
                   'user_type'     => $data[0]['user_type'],
               );
		    	$this->session->set_userdata($newdata);
				echo '<script>window.location = "'. site_url().'/Home"</script>';
		    } */
		    else {
		    	$this->session->set_flashdata('msg', array('message' => 'Username or Password Not Matched!','class' => 'alert alert-danger no-margin'));
		    	//$value = $this->session->flashdata('msg');


		    	redirect('/');
		    }
		
		    //print_r($_SESSION);
		    //return $this->db->insert_id();
	    }
          
    	 
    }

}
