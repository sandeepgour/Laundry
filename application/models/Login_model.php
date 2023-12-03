 <?php

 class Login_model extends CI_Model {


        public function __construct() {

            parent::__construct();

            $this-> load->library('session');

            $this->load->database();

        }

        public function Mylogin($val){
          //print_r($val);
  
        	$this->db->select('*');

			$this->db->from('tbl_login');

			$this->db->where('username', $val['username']);
			$this->db->where('password',$val['password']);
      $this->db->where('user_type',$val['user_type']);
			$query = $this->db->get();

      $data = $query->result_array();
       //print_r($data);
    
            //echo  $query->num_rows();

			//echo $this->db->last_query();

           // print_r($query);
      
            if($query->num_rows() == 1){

                return $data;    

            } else {

                return "Username or Password Not Matched!";

            }
        

        }
       // public  function insert_data($data) {  
       //    //print_r($data);
       //     $this->db->insert("account", $data);  
       // } 
        

    }

?>