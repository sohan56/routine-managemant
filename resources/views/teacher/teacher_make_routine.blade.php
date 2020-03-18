
@extends('teacher.index')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Make routine</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active">Manage routine</li>
							</ol>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="card card-topline-purple">
										<div class="card-head">
										
											<div class="tools">
												<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
												<a class="t-collapse btn-color fa fa-chevron-down"
													href="javascript:;"></a>
												<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
											</div>
										</div>
										<div class="card-body ">
											<div class="table-responsive">
												<table class="table table-striped custom-table table-hover">

													
													<thead>
														<tr>
															
															
															<th>Course Code</th>
															<th>Teacher Name</th>
															<th>Course Type</th>
															<th>Section</th>
															
															
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														 @foreach($show_routine as $t_routine)
														<tr>
															<td>{{$t_routine->course_code}}</td>
															<td>{{$t_routine->teacher_name}}</td>
															<td><span class="label label-info label-mini"> @if($t_routine->course_type==0)
				                                             Theory
				                                             @else
				                                            Lab
				                                             @endif</span>
															</td>
															<td>{{$t_routine->section_name}}</td>
															
															<td> <a href="{{URL::to('/edit-routine',$t_routine->routine_id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
															
														
														</tr>
															  @endforeach
														
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
 @endsection
			<!-- end page content -->