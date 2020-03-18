@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Manage teacher</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active">Manage teacher</li>
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
															<th>Images</th>
															<th>Name</th>
															<th>Email</th>
															<th>Department</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														 @foreach($all_teacher as $v_teacher)
														<tr>
															<td><img src="{{asset($v_teacher->teacher_img)}}" width="50" height="50" alt="image" />
															</td>
															<td>{{$v_teacher->teacher_name}}</td>
															<td>{{$v_teacher->teacher_email}}</td>
															<td>{{$v_teacher->dept_name}}</td>
															

															
															<td><span class="label label-info label-mini"> @if($v_teacher->publication_status==1)
				                                             Publish
				                                             @else
				                                             Unpublish
				                                             @endif</span>
															</td>
															<td>
																@if($v_teacher->publication_status==1)
                                            <a href="{{URL::to('/unpublish-teacher',$v_teacher->teacher_id)}}" class="btn btn-danger"><i class="icon-thumbs-down fa fa-check"></i></a>
                                            @else
                                            <a href="{{URL::to('/publish-teacher',$v_teacher->teacher_id)}}" class="btn btn-success"><i class="icon-thumbs-down fa fa-check"></i></a>
                                            @endif
                                            <a href="{{URL::to('/edit-teacher',$v_teacher->teacher_id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            
                                            <a href="{{URL::to('/delete-teacher',$v_teacher->teacher_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="fa fa-trash-o"></i></a>

															</td>
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