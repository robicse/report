<div class="row">
	
		<div class="col-md-12">
		<form class="form-inline" role="form">
			<div class="col-md-10">
				<div class="form-group">
					<label for="">Date Range:</label>
				</div>
				
				<div class="form-group input-group date" id='datepicker1'>
					<input type="text" class="form-control" id="email" placeholder="Select Start Date">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar">
						</span>
					</span>
				</div>
				
				<div class="form-group input-group date" id='datepicker2'>
					<input type="text" class="form-control" id="pwd" placeholder="Select End Date">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar">
						</span>
					</span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn" style="background-color:#0083E9;">Submit</button>
				</div>
			</div>
		</form>
			<div class="col-md-2">	
				<div class="pull-right">
				<div class="dropdown">
					<button class="btn dropdown-toggle" style="background-color:#0083E9;" type="button" data-toggle="dropdown">Download Report
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li class="downloadul"><a href="<?php echo URL::base();?>report/xls">Download xls</a></li>
						<li class="downloadul"><a href="<?php echo URL::base();?>report/pdf">Download pdf</a></li>
						<li class="downloadul"><a href="<?php echo URL::base();?>report/xls1">Download excel</a></li>
						<!--<li><a><button class="download" >Download xls</button></a></li>-->
					</ul>
				</div>
				</div>
			</div>
		</div>
	
</div>
</br></br>

	<table class="table table2excel" id="bootstrap-table">
		<thead>
			<tr>
				<th>SL NO</th>
				<th>Created Time</th>
				<th>Caller Number</th>
				<th>Caller Name</th>
				<th>Baby Name</th>
				<th>DOB</th>
				<th>Age on Today</th>
				<th>Address</th>
				<th>Division</th>
				<th>Source</th>
				<th>Dr. Call Type</th>
				<th>Prescript</th>
			</tr>
		</thead>
		<?php
		//print_r($data);
		$i=1;
		foreach($data as $row){
		?>
		<tbody>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row->created_time;?></td>
				<td><?php echo $row->caller_number;?></td>
				<td><?php echo $row->caller_name;?></td>
				<td><?php echo $row->baby_name;?></td>
				<td><?php echo $row->dob;?></td>
				<td><?php echo $row->age_of_today;?></td>
				<td><?php echo $row->address;?></td>
				<td><?php echo $row->division;?></td>
				<td><?php echo $row->source;?></td>
				<td><?php echo $row->dr_call_type;?></td>
				<td><?php echo $row->prescript;?></td>
			</tr>
		</tbody>
		<?php
		}
		?>
	</table>


