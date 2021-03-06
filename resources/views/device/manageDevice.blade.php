@extends('admin.masterAdmin')
@section('content')
<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Device</h5>
					</div>
					<!-- Breadcrumb -->
					<!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>data-table</span></li>
					  </ol>
					</div> -->
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-10">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Manage Device</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>#SL</th>
														<th>Switch No</th>
														<th>Wifi</th>
														<th>Sim</th>
														<th>Motion Sensor</th>
														<th>Temp Sensor</th>
														<th>Motor Control Device</th>
														<th>Serial No</th>
													</tr>
												</thead>
												<tbody>
												<?php 
													$i = 1;
													foreach ($result as $value) { ?>
													<tr>
														<td><?php echo $i++; ?></td>
														<td><?php echo $value->switch_no; ?></td>
														<td>
															<?php 
																if($value->wifi == '1'){
																	echo "YES";
																}else{
																	echo "NO";
																}
															?>
														</td>
														<td>
															<?php 
																if($value->sim == '1'){
																	echo "YES";
																}else{
																	echo "NO";
																}
															?>
														</td>
														<td>
															<?php 
																if($value->motion_sensor == '1'){
																	echo "YES";
																}else{
																	echo "NO";
																}
															?>
														</td>
														<td>
															<?php 
																if($value->temp_sensor == '1'){
																	echo "YES";
																}else{
																	echo "NO";
																}
															?>
														</td>
														<td>
															<?php 
																if($value->motor_controll_device == '1'){
																	echo "YES";
																}else{
																	echo "NO";
																}
															?>
														</td>
														<td><?php echo $value->serial_no; ?></td>
													</tr>
												<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
					<div class="col-sm-12">
						<p><?php echo date('Y'); ?> &copy; IOT. Developed by <a href="http://asianitinc.com">AsianItInc</a></p>
					</div>
			</footer>
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->
@endsection