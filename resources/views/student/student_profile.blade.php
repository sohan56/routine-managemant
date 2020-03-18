
@extends('student.index')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Student Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Student Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							 @php
									             $view = DB::table('tbl_student')
									              ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_student.dept_id')
									             ->where('std_id', Session::get('std_id'))->first();
									       @endphp
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="{{asset($view->std_img)}}" class="img-responsive" alt="">
											</div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name">{{ $view->std_name }} </div>
										</div>
										
										<!-- END SIDEBAR USER TITLE -->
										
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>About Me</header>
									</div>
									<div class="card-body no-padding height-9">
										
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Gender </b>
												<div class="profile-desc-item pull-right">Male</div>
											</li>
											<li class="list-group-item">
												<b>Department</b>
												<div class="profile-desc-item pull-right">{{ $view->dept_name }}</div>
											</li>
											<li class="list-group-item">
												<b>Email </b>
												<div class="profile-desc-item pull-right">test@example.com</div>
											</li>
											<li class="list-group-item">
												<b>Phone</b>
												<div class="profile-desc-item pull-right">1234567890</div>
											</li>
										</ul>
										
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>Present Address</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="row text-center m-t-10">
											<div class="col-md-12">
												<p>456, Pragri flat, varacha road, Surat
													<br> Gujarat, India.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>Permanent Address</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="row text-center m-t-10">
											<div class="col-md-12">
												<p>456, Pragri flat, varacha road, Surat
													<br> Gujarat, India.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo" id="tab1">
													<div id="biography">
														
														<hr>
														
														
														<h4 class="font-bold">Academic History Details</h4>
														
														
														
									 
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30">
												<thead>

													<tr>
														<th>Education Level</th>
														<th>Group</th>
														<th>Board Or University</th>
														<th>Institute</th>
														<th>Passing Year</th>
														<th>GradePoint</th>

													</tr>
												</thead>
												<tbody>
													
													<tr>
														<td >SSC</td>
														<td>Science</td>
														<td>Dhaka</td>
														<td>Chepan High School</td>
														<td>2012</td>
														<td>3.81</td>

														
													</tr>
													<tr>
														<td >SSC</td>
														<td>Science</td>
														<td>Dhaka</td>
														<td>Chepan High School</td>
														<td>2012</td>
														<td>3.81</td>

														
													</tr>
												</tbody>
											</table>
										</div>
									
								</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
			</div>
 @endsection
			<!-- end page content -->