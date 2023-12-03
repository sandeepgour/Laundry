		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li>
					  <a href="#">
						<em class="fa fa-home"></em>
					  </a>
					</li>
					<li class="active">AddHotel</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add New Hotel</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Add Hotels</div>
						<div class="panel-body">
							<form  class="form-horizontal row-border" action="<?php echo base_url();?>Home/Hotel_add" method="POST">
								<div class="form-group">
								    <label class="col-md-2 control-label">Hotel Name</label>
									<div class="col-md-10">
									<input type="text" name="hotelname" class="form-control" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Hotel Address</label>
									<div class="col-md-10">
										<input type="text" name="hotel_address" class="form-control" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Hotel Owner</label>
									<div class="col-md-10">
										<input type="text" name="hotel_owner" class="form-control" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Phone No</label>
									<div class="col-md-10">
									<input type="text" name="hotel_phone_no" class="form-control"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label">Email Id</label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="email_id"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Hotel Number</label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="hotel_number"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-2 col-md-offset-4">
										<input class="btn btn-lg btn-primary" type="submit" name="submit" value="submit" />
									</div>
								</div>
							
								
								<!-- <div class="form-group">
									<label class="col-md-2 control-label">Column sizing</label>
									<div class="col-md-10">
										<div class="row">
											<div class="col-xs-3">
												<input type="text" class="form-control" placeholder=".col-xs-3">
											</div>
											<div class="col-xs-5">
												<input type="text" class="form-control" placeholder=".col-xs-5">
											</div>
											<div class="col-xs-4">
												<input type="text" class="form-control" placeholder=".col-xs-4">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group has-success">
									<label class="col-md-2 control-label">Input success</label>
									<div class="col-md-10">
									<input type="text" class="form-control" id="inputSuccess" placeholder="Input Success"><i class="icon-pencil input-icon success"></i></div>
								</div> -->
							
							</form>
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