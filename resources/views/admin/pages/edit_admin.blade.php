@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">edit admin</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Admin</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">edit admin</li>
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
							
								<div class="card-body" id="bar-parent">
									

                            {!! Form::open(['url' => '/update-admin','class'=>'form-horizontal','id'=>'form_sample_1','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_admin']) !!}
                             @csrf
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="admin_name" placeholder="Enter full name"
														class="form-control input-height" required="" value="{{$admin_info->admin_name }}" />
														<input type="hidden" name="admin_id" 
														class="form-control input-height"  value="{{$admin_info->admin_id }}" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Email
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="Email" name="admin_email" placeholder="Enter Email "
														class="form-control input-height" required="" value="{{$admin_info->admin_email }}" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Admin Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="Password" name="admin_password" placeholder="Enter Password"
														class="form-control input-height"  value="{{$admin_info->admin_password}}" />
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
													<input type="file" class="default" multiple name="admin_img"><span><img src="{{asset($admin_info->admin_img)}}" width="50" height="50"></span>
													<input type="hidden" name="admin_old_img" value="{{$admin_info->admin_img}}">
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20">Update</button>
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
			 <script type="text/javascript">

                document.forms['edit_admin'].elements['publication_status'].value='<?php echo $admin_info->publication_status ?>';
                document.forms['edit_admin'].elements['access_label'].value='<?php echo $admin_info->access_label ?>';
               
            </script>
			  @endsection