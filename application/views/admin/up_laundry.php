<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Add Laundry</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add New Laundry</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Add Laundry</div>
						<div class="panel-body">
    <?php
		      //echo $data;
         $this->db->select('*');
         $this->db->from('tbl_add__services');
         $this->db->where('id',$data);
                $query= $this->db->get(); 
               foreach ($query->result_array() as $row)
               {
    ?>

		<form class="form-horizontal row-border" action="<?php echo base_url(); ?>Home/Lanundry_update" method="POST">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
								<div class="form-group">
								    <label class="col-md-2 control-label">Provider Name</label>
									<div class="col-md-10">
						<input type="text" name="provider_name" class="form-control" value="<?php echo $row['name'];?>"/>
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Provider Address</label>
									<div class="col-md-10">
						<input type="text" name="provider_address" class="form-control" value="<?php echo $row['address'];?>" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Owner Name</label>
									<div class="col-md-10">
						<input type="text" name="provider_owner" class="form-control" value="<?php echo $row['services_owner'];?>" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Contact Number</label>
									<div class="col-md-10">
					<input type="text" name="contact_no" class="form-control" value="<?php echo $row['phone_no'];?>"/>
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Email Id</label>
									<div class="col-md-10">
					<input type="email" name="provider_email_id" class="form-control"value="<?php echo $row['email_id'];?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Id Proof</label>
									<div class="col-md-10">
					<input class="form-control" type="text" name="idproof" value="<?php echo $row['id_proof'];?>"/>
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
