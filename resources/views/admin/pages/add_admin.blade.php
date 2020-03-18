@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add admin</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Admin</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add admin</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
							<h2 style="color: lime " align="center" >
                             <?php
                             $message=Session::get('message');
                             if ($message)
                              {
                                echo $message;
                                Session::put('message','');
                             }



                             ?>
                             </h2>
								<div class="card-body" id="bar-parent">
									

                            {!! Form::open(['url' => '/save-admin','class'=>'form-horizontal','id'=>'form_sample_1','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="admin_name" placeholder="Enter full name"
														class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Email
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="Email" name="admin_email" placeholder="Enter Email "
														class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="Password" name="admin_password" placeholder="Enter Password"
														class="form-control input-height" required="" />
												</div>
											</div>
											
											
											<div class="form-group row">
												<label class="control-label col-md-3">Label
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="access_label" required="">
														<option value="">Select...</option>
														<option value="1">Admin</option>
														<option value="0">Superadmin</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Department
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="dept_id" required="">
														<option value="">Select...</option>
														 @foreach($department_info as $v_department)
														<option value="{{$v_department->dept_id}}">{{$v_department->dept_name}}</option>
														 @endforeach
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Publication Status
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="publication_status" required="">
														<option value="">Select...</option>
														<option value="1">publish</option>
														<option value="0">Unpublish</option>
													</select>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Profile Picture
												</label>
												<div class="compose-editor">
													<input type="file" class="default" multiple required="" name="admin_img">
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20">Submit</button>
														<button  class="btn btn-default" type="reset">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									 {!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			  @endsection