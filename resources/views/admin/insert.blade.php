@extends('admin.masterAdmin')
@section('content')
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Basic Form</h5>
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
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Basic Form</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Default Text <span class="help"> e.g. "john doe"</span></label>
													<input type="text" class="form-control" value="john doe...">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
													<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Password</label>
													<input type="password" class="form-control" value="password">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Placeholder</label>
													<input type="text" class="form-control" placeholder="placeholder">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Text area</label>
													<textarea class="form-control" rows="5"></textarea>
												</div>
												<div class="form-group mt-30 mb-30">
													<label class="control-label mb-10 text-left">select</label>
													<select class="form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Radio</label>
													<div class="radio radio-info">
														<input type="radio" name="radio" id="radio1" value="option1" checked="">
														<label for="radio1">
															M
														</label>
													</div>
													<div class="radio radio-info">
														<input type="radio" name="radio" id="radio2" value="option2" checked="">
														<label for="radio2">
															F
														</label>
													</div>	
												</div>
												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Checkbox</label>
													<div class="checkbox">
														<input id="checkbox1" type="checkbox">
														<label for="checkbox1">
															Default
														</label>
													</div>
													<div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox" checked="">
														<label for="checkbox2">
															Primary
														</label>
													</div>
													<div class="checkbox checkbox-success">
														<input id="checkbox3" type="checkbox">
														<label for="checkbox3">
															Success
														</label>
													</div>	
												</div>
												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">File upload</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="...">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>
												<div class="form-group mb-0">
													<label class="control-label mb-10 text-left">Helping text</label>
													<input type="text" class="form-control" placeholder="Helping text">
													<span class="help-block mt-10 mb-0"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
												</div>
											</form>
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