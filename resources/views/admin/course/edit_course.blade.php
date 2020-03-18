@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Edit Course</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Course</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Edit Course</li>
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
									

                            {!! Form::open(['url' => '/update-course','class'=>'form-horizontal','id'=>'form_sample_1','method'=>'post','enctype'=>'multipart/form-data','name'=>'edit_course']) !!}
                             @csrf
										<div class="form-body">
											
											<div class="form-group row">
												<label class="control-label col-md-3">Course Title
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="course_title" placeholder=""
														class="form-control input-height" required="" value="{{ $course_info->course_title}}" />
														<input type="hidden" name="course_id" placeholder=""
														class="form-control input-height" required="" value="{{ $course_info->course_id}}" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Course Code
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="course_code" placeholder="Enter course no"
														class="form-control input-height" required="" value="{{ $course_info->course_code}}" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Course Type
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="course_type" required="">
														<option value="">Select...</option>
														<option value="0">Theory</option>
														<option value="1">Lab</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												 <?php 
                                                     $dept_info = DB::table('tbl_department')
                                                             ->where('publication_status',1)
                                                             ->get();

                                                ?>
												<label class="control-label col-md-3">Department
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="dept_id" required="">
														<option value="">Select...</option>
														 @foreach($dept_info as $v_department)
														<option value="{{$v_department->dept_id}}">{{$v_department->dept_name}}</option>
														 @endforeach
													</select>
												</div>
											</div>
											<div class="form-group row">
												 <?php 
                                                     $semester_info = DB::table('tbl_semester')
                                                            
                                                             ->get();

                                                ?>
												<label class="control-label col-md-3">Semester
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="semester_id" required="">
														<option value="">Select...</option>
														 @foreach($semester_info as $v_semester)
														<option value="{{$v_semester->semester_id}}">{{$v_semester->semester_name}}</option>
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

                document.forms['edit_course'].elements['publication_status'].value='<?php echo $course_info->publication_status ?>';
                 document.forms['edit_course'].elements['course_type'].value='<?php echo $course_info->course_type ?>';
                 document.forms['edit_course'].elements['dept_id'].value='<?php echo $course_info->dept_id ?>';
                 document.forms['edit_course'].elements['semester_id'].value='<?php echo $course_info->semester_id ?>';
                
               
            </script>
			  @endsection