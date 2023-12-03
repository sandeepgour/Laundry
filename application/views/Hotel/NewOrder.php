		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Order</li>
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
							<form class="form-horizontal row-border" action="<?php echo base_url(); ?>Hotel/AddNewOrder" method="POST">
								<div class="form-group">
								    <label class="col-md-2 control-label">Pick Up Date</label>
									<div class="col-md-4">
									<input type="date" name="pickupdate" class="form-control" />
									</div>

									<label class="col-md-2 control-label">Delivered Date</label>
									<div class="col-md-4">
									<input type="date" name="delivered_date" class="form-control" />
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">No Of Clothes</label>
									<div class="col-md-10">
									<input type="number" name="clothes_no" class="form-control"/>
									</div>
								</div>
								<div class="form-group">
								    <label class="col-md-2 control-label">Extra Instruction</label>
									<div class="col-md-10">
										<input type="text" name="Instruction" class="form-control" />
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-2 col-md-offset-4">
										<input class="btn btn-lg btn-primary" type="submit" name="submit" value="submit" />
									</div>
								</div>
							
								
							
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

