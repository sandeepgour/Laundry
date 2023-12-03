		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li>
					  <a href="#">
						<em class="fa fa-home"></em>
					  </a>
					</li>
					<li class="active">Hotel</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Hotel Update</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Update</div>
						<div class="panel-body">
		     <?php
		      //echo $data;
         $this->db->select('*');
         $this->db->from('tbl_add_hotel');
         $this->db->where('id',$data);
                $query= $this->db->get(); 
               foreach ($query->result_array() as $row)
              {
         ?> 				
							<form  class="form-horizontal row-border" action="<?php echo base_url();?>Home/Hotel_update" method="POST">
								<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								<div class="form-group">
								 <label class="col-md-2 control-label">Hotel Name</label>
									<div class="col-md-10">
							<input type="text" name="hotelname" class="form-control" value="<?php echo $row['hotel_name'];?>" required=""/>
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Hotel Address</label>
									<div class="col-md-10">
							<input type="text" name="hotel_address" class="form-control" value="<?php echo $row['address'];?>" required="" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Hotel Owner</label>
									<div class="col-md-10">
							<input type="text" name="hotel_owner" class="form-control" value="<?php echo $row['owner'];?>" required=""/>
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Phone No</label>
									<div class="col-md-10">
							<input type="number" name="hotel_phone_no" class="form-control" value="<?php echo $row['phone_no'];?>" required=""/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label">Email Id</label>
									<div class="col-md-10">
							<input class="form-control" type="email" name="email_id" value="<?php echo $row['email_id'];?>" required=""/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Hotel Number</label>
									<div class="col-md-10">
							<input class="form-control" type="number" name="hotel_number" value="<?php echo $row['hotel_no'];?>" required=""/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-2 col-md-offset-4">
										<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Update" />
									</div>
								</div>
							
							</form>
			<?php } ?>				
						</div>
					</div>
				</div>
			</div><!--/.row-->
			<div class="row">
				<div class="col-sm-12">
				   <p class="back-link">Responsive Theme by <a href="#">spancoders.com</a></p>
				</div>
			</div><!--/.row-->
		</div>