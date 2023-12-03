		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Payment</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add New Order</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Inputs</div>
						<div class="panel-body">
                  <?php
       
             $this->db->select('*');
             $this->db->from('tbl_hotel');
             $this->db->where('id',$id);
        
                 $query = $this->db->get();  
                 foreach ($query->result_array() as $row):
                      //echo $row['pick_up_date'];
                  ?>
                    <form class="form-horizontal row-border" action="<?php echo base_url(); ?>Hotel/Payment" method="POST">
					   <div class="form-group">
						<label class="col-md-2 control-label">Pick Up Date</label>
						<div class="col-md-4">
						<input type="text" name="pickupdate" class="form-control" readonly="" value="<?php echo $row['pick_up_date']; ?>" />
						</div>
						<label class="col-md-2 control-label">Clothes Id</label>
						<div class="col-md-4">
						<input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly=""/>
						</div>
						</div>
						<div class="form-group">
					             <label class="col-md-2 control-label">No Of Clothes</label>
						<div class="col-md-10">
							<input type="number" name="clothes_no" class="form-control" value="<?php echo $row['no_of_clothes']; ?>" readonly=""/>
						</div>
						</div>
						<div class="form-group">
						  <label class="col-md-2 control-label">amount</label>
									<div class="col-md-10">
										<input type="text" name="amount" class="form-control"  />
									</div>
						</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-2 col-md-offset-4">
										<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Payment" />
									</div>
								</div>
							
							</form>
						<?php endforeach; ?>
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

