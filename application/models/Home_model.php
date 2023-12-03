 <?php



 class Home_model extends CI_Model {

        public function __construct() {



            parent::__construct();

            $this->load->database();

        }

      public function AddData($tbl,$val)

      {

          $insert_id =  $this->db->insert($tbl, $val);

          if($insert_id){

              return  $insert_id;

          } else {

            return false;

         }

      }
    

       public  function ViewData($tbl,$status,$where,$orderBy) {  

          $this->db->select('*');

          $this->db->from($tbl);

          if($where){ $this->db->where($status,$where); }

          if($orderBy){ $this->db->order_by('id','desc'); }
           //if($_SESSION['user_type'] == 2){ $this->db->where('site',$_SESSION['site']); }
          $query = $this->db->get();

          $data = $query->result_array();

            if($data){

                return $data;    

            } else {

                return false;

            }

       } 

    public function deleterow($tbl,$id,$rowid)
      {
           // echo $tbl."<br/>";
           // echo $id."<br/>";
           // echo $sn;
          $this->db->where($rowid,$id);
          $this->db->delete($tbl); 
      }

    public function  update_edit($tbl,$rowid,$val,$id)
      {
      
          $this->db->where($rowid, $id);
          $this->db->update($tbl,$val);
      }

      public function update_status($tbl,$rowid,$id,$val)
      {
           $this->db->where($rowid, $id);
           $this->db->update($tbl,$val);
      }



  public  function Viewdatajoin($tbl,$where,$orderBy) {  
   
      $this->db->select('*');
      $this->db->from($tbl);
      $this->db->join('tbl_payment','tbl_hotel.id=tbl_payment.clothes_id','left');
      $query=$this->db->get();
    
      $data = $query->result_array();
          //print_r($data);
       

          if($data){

                return $data;    

            } else {

                return false;

            } 

       } 

 
      


      
/* --============searching code--============*/
   /*
  public  function Viewsearch($tbl,$where) {  

 /* select table1.colomn_name,table2.colomn_name,table3.colomn_name from  table1 left join table2 on table1.colomn_name=table2.column_name  left join table3 on table2.colomn=table3.colomn_name; */
   /*
    $query=$this->db->query("select * from  tbl_add_item left join  tbl_supply_purchase_matrials on tbl_add_item.sn= tbl_supply_purchase_matrials.item where sn='".$where."'");
  
     
          $data = $query->result_array();
            if($data){
                return $data;    
            } else {
                return false;
            }
    
       } 
           */

    }

?>