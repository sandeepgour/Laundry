<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Placed Ordered</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Placed Ordered</h1>
				</div>
			</div><!--/.row-->		
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">All Data</div>
						<div class="panel-body">
							<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							<thead>
									<tr>
										<th data-field="state" data-checkbox="true" >Item ID</th>
										<th data-field="id" data-sortable="true">
										ID</th>
										<th data-field="name"  data-sortable="true">Pick Up Date</th>
										<th data-field="Address" data-sortable="true">No Of Clothes</th>
										<th data-field="Owner" data-sortable="true">Instruction</th>
										<th data-field="contact" data-sortable="true">Delivered Date</th>
										
									<th data-field="status" data-sortable="true">Status</th>
								<th data-field="payment" data-sortable="true">Payment</th>
									
									</tr>
								</thead>
								<tbody>
					<?php 
						if($result){
						//print_r($result);
						foreach ($result as $row):
					        // if($row['status']=="assigned" ||$row['status']=="washed" || $row['status']=="on_the_way" || $row['status']=="completed"):
						?>			
									<tr>
										<td><?php echo $row['id']; ?></td>
										<td>#<?php echo $row['id']; ?></td>
										<td><?php echo $row['pick_up_date']; ?></td>
										<td><?php echo $row['no_of_clothes']; ?></td>
								<td><?php echo $row['extra_instruction']; ?></td>
								<td><?php echo $row['delivered_date']; ?></td>
								<td>
					<?php if($row['status']=="new"){?>
					 <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Request Pending">Pending</a>
				    <?php }elseif($row['status']=="assigned"){?>
                    <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="assigned To Laundry" disabled="">Assigned</a>
				   	<?php } elseif($row['status']=="washed"){?>
                    <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Clothes Is Washing" >washing</a>
				   	<?php } elseif($row['status']=="on_the_way"){?>
                    <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="From Transfer">On The Way</a>
				   	<?php } elseif($row['status']=="completed"){?>
                    <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ordered Receved" disabled="">Completed</a>
				   		<?php } ?>
		                </td>
		       
		            <td>
		            	<?php if($row['payment_status']=="completed"){ ?>
		           <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Payment Completed" disabled="">Payment</a>
		           <?php }else{ ?>
                         <a href="<?php echo base_url().'Hotel/MyPayment/'.$row['id']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Send Payment">Payment</a>
		           <?php } ?>
		            </td>                
							
						</tr>
					   <?php
				
					      //endif;
						  endforeach;
						}
						 ?>		
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