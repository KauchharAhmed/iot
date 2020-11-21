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
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>form-element</span></li>
						  </ol>
						</div> -->
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-8">

					<?php if(Session::get('success') != null) { ?>
					<div class="alert alert-info alert-dismissible" role="alert">
					<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
					<strong><?php echo Session::get('success') ;  ?></strong>
					<?php Session::put('success',null) ;  ?>
					</div>
					<?php } ?>

					<?php
					if(Session::get('failed') != null) { ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
					<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
					<strong><?php echo Session::get('failed') ; ?></strong>
					<?php echo Session::put('failed',null) ; ?>
					</div>
					<?php } ?>

					@if (count($errors) > 0)
					@foreach ($errors->all() as $error)      
					<div class="alert alert-danger alert-dismissible" role="alert">
					<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
					<strong>{{ $error }}</strong>
					</div>
					@endforeach
					@endif

							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Add Device</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											{!! Form::open(['url' => 'addDeviceInfo','method' => 'post', 'class' => 'form-horizontal' ]) !!}

												<div class="form-group">
													<label class="control-label mb-10 col-sm-2">Wifi:</label>
												<div class="col-sm-10">
													<select name="deviceType" class="form-control" required>
														<option value="">Select One</option>
														<?php foreach ($result as $value) { ?>
														<?php 
														if($value->wifi == '1'){
															$wifi_status = "YES";
														}else{
															$wifi_status = "NO";
														}
														if($value->sim == '1'){
															$sim_status = "YES";
														}else{
															$sim_status = "NO";
														}
														if($value->motion_sensor == '1'){
															$motion_status = "YES";
														}else{
															$motion_status = "NO";
														}
														if($value->temp_sensor == '1'){
															$temp_status = "YES";
														}else{
															$temp_status = "NO";
														}
														if($value->motor_controll_device == '1'){
															$motor_status = "YES";
														}else{
															$motor_status = "NO";
														}

														?>
														<option value="<?php echo $value->id; ?>">
														<?php 
															echo "Switch No: ".$value->switch_no." "."Wifi: ".$wifi_status." Sim: ".$sim_status." Motion Sensor: ".$motion_status." Temp Sensor: ".$temp_status." Motion Control Device: ".$motor_status;
														?>		
														</option>
														<?php } ?>
													</select>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2">Serial No:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="Enter Serial No" name="serialNo" required>
												</div>
												</div>
												<div class="form-group mb-0"> 
													<div class="col-sm-offset-2 col-sm-10">
													  <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
													</div>
												</div>
											{!! Form::close() !!}
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