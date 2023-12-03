		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Laundry</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">View Laundry</h1>
				</div>
			</div><!--/.row-->		
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Data Table</div>
						<div class="panel-body">
							<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead>
									<tr>
										<th data-field="state" data-checkbox="true" >Item ID</th>
										<th data-field="id" data-sortable="true">
										ID</th>
										<th data-field="name"  data-sortable="true">Name</th>
										<th data-field="Address" data-sortable="true">Address</th>
										<th data-field="Owner" data-sortable="true">Owner Name</th>
										<th data-field="contact" data-sortable="true">Phone No</th>
										<th data-field="Email_id" data-sortable="true">Email Id</th>
										<th data-field="aadar_no" data-sortable="true">Aadar No.</th>
										<th colspan="2" data-field="action" data-sortable="true">action</th>
									</tr>
								</thead>
								<tbody>
					<?php  //print_r($result);
					        foreach ($result as $row):
					       
					?>				
									<tr>
										<td><?php echo $row['id'];?></td>
										<td>#<?php echo $row['id'];?></td>
										<td><?php echo $row['name'];?></td>
										<td><?php echo $row['address'];?></td>
										<td><?php echo $row['services_owner'];?></td>
										<td><?php echo $row['phone_no'];?></td>
										<td><?php echo $row['email_id'];?></td>
										<td><?php echo $row['id_proof'];?></td>
										<!-- <td><a href="<?php //echo base_url().'Home/status_update/'.$row['id']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Edit">Pending</a></td> -->
			<td>
			<a href="<?php echo base_url().'Home/EditrowLaundry/'.$row['id']; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                 <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
			</a>
		    	
			<a href="<?php echo base_url().'Home/DelrowLaundry/'.$row['id']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
				<i class="fa fa-trash" aria-hidden="true"> </i>
			</a>                 
			</td>
									</tr>
				 	<?php endforeach; ?>			
								</tbody>
							</table>
						</div>
					</div>
				</div>
			
				
			 <div class="row">
				<div class="col-sm-12">
				   <p class="back-link">Responsive Theme by <a href="#">spancoders.com</a></p>
				</div>
			</div><!--/.row-->
			</div><!--/.row-->
		</div><!--/.main-->