@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Student</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Student</li>
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
									

                            {!! Form::open(['url' => '/save-student','class'=>'form-horizontal','id'=>'form_sample_1','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Student Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="std_name" placeholder="Enter student name"
														class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Student Id
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="std_id" placeholder="Enter student id"
														class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Student Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="std_password" placeholder="Enter student password"
														class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Student Image
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="file" name="std_img" placeholder="Enter student Image"
														class="form-control input-height" required="" />
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