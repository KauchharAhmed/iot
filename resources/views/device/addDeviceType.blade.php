@extends('admin.masterAdmin')
@section('content')
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Device Type</h5>
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
										<h6 class="panel-title txt-dark">Add Device Type</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											{!! Form::open(['url' => 'addDeviceTypeInfo','method' => 'post', 'class' => 'form-horizontal' ]) !!}

												<div class="form-group">
													<label class="control-label mb-10 col-sm-2">Switch No:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="Enter Switch No" name="switchNo" required>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2" for="email_hr">Wifi:</label>
												<div class="col-sm-10">
													<select name="wifi" class="form-control" required>
														<option value="">Select One</option>
														<option value="1">YES</option>
														<option value="0">NO</option>
													</select>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2" for="email_hr">Sim:</label>
												<div class="col-sm-10">
													<select name="sim" class="form-control" required>
														<option value="">Select One</option>
														<option value="1">YES</option>
														<option value="0">NO</option>
													</select>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2" for="email_hr">Motion Sensor:</label>
												<div class="col-sm-10">
													<select name="motionSensor" class="form-control" required>
														<option value="">Select One</option>
														<option value="1">YES</option>
														<option value="0">NO</option>
													</select>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2" for="email_hr">Temp Sensor:</label>
												<div class="col-sm-10">
													<select name="tempSensor" class="form-control" required>
														<option value="">Select One</option>
														<option value="1">YES</option>
														<option value="0">NO</option>
													</select>
												</div>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 col-sm-2" for="email_hr">Motor Control Device:</label>
												<div class="col-sm-10">
													<select name="motorControlDevice" class="form-control" required>
														<option value="">Select One</option>
														<option value="1">YES</option>
														<option value="0">NO</option>
													</select>
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