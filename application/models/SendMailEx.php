<?php 
class SendMailEx extends CI_Model { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
         $this->load->library('email');
      } 

public function otp()
{
$to="";


$this->sendMail($to,$sub,$message);

}


    
   function sendMail($to,$sub,$message)
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'sandeep.spancoders@gmail.com', // change it to yours
  'smtp_pass' => 'India@1234', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        //$message = 'email testing heloo ';
      //$this->load->library('email', $config);
         $this->email->initialize($config);
         $this->load->library('email');



      $this->email->set_newline("\r\n");
      $this->email->from('sandeep.spancoders@gmail.com'); // change it to yours
      $this->email->to($to);// change it to yours
      $this->email->cc('another@gmail.com');
      $this->email->bcc('another@gmail.com');
      $this->email->subject($sub);
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
   } 
?>