
@extends('admin.admin_master')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/deshboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-purple">
								<h3 class="text-white box-title">Total Teacher <span class="pull-right"><i
											class="fa fa-caret-up"></i> 345</span></h3>
								<div id="sparkline7"><canvas
										style="display: inline-block; width: 267px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<h4><span class="pull-right">Total Students</span></h4>
										<span class="info-box-number">450</span>
										
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-blue">
								<h3 class="text-white box-title">Total Course <span class="pull-right"><i
											class="fa fa-caret-up"></i>50</span></h3>
								<div id="sparkline9"><canvas
										style="display: inline-block; width: 267px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-success">
								<h3 class="text-white box-title">Total Department<span class="pull-right"><i
											class="fa fa-caret-up"></i>12</span></h3>
								<div id="sparkline16" class="text-center"><canvas
										style="display: inline-block; width: 215px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					
					<!-- start new Teacher list -->
					 @if(Session::get('access_label')==1)
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Teacher List</header>
									<div class="tools">
										<div id="" class=""><label>Search:<input type="search" onclick="search()" class="form-control form-control-sm" placeholder="" aria-controls="example4" id="search"></label></div>
									</div>
								</div>
								<div class="card-body ">
									 <?php 
                                                $all_teacher = DB::table('tbl_teacher')
                                                      ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_teacher.dept_id')
                                             ->where('tbl_teacher.dept_id', Session::get('dept_id'))->get();
                                                                     

                                          ?>
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30">
												<thead>

													<tr>
														<th>No</th>
														<th>Image</th>
														<th>Name</th>
														<th>Department</th>
													</tr>
												</thead>
												<tbody>
													 @foreach($all_teacher as $v_teacher)
													<tr>
														<td class="nr"></td>
														<td><img src="{{asset($v_teacher->teacher_img)}}"  width="50" height="50"></td>
														<td>{{$v_teacher->teacher_name}}</td>
														<td>{{$v_teacher->dept_name}}</td>
														
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
					@endif
					<!-- end new student list -->
					 @if(Session::get('access_label')==0)
					<!-- start new Teacher list -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Teacher List</header>
									<div class="tools">
										<div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm"  onclick="search()" id="search"></label></div>
									</div>
								</div>
								<div class="card-body ">
									 <?php 
                                                $all_teacher = DB::table('tbl_teacher')
                                                      ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_teacher.dept_id')
                                             ->get();
                                                                     

                                          ?>
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30">
												<thead>

													<tr>
														<th>No</th>
														
														<th>Name</th>
														<th>Department</th>
													</tr>
												</thead>
												<tbody>
													 @foreach($all_teacher as $v_teacher)
													<tr>
														<td class="nr"></td>
														<td><img src="{{asset($v_teacher->teacher_img)}}"  width="50" height="50"></td>
														<td>{{$v_teacher->teacher_name}}</td>
														<td>{{$v_teacher->dept_name}}</td>
														
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
					<!-- end new student list -->
					@endif
				</div>
			</div>
			<script type="text/javascript">
    var a = document.getElementsByClassName("nr");
    for (var i = 0; i < a.length; i++) {
        a[i].innerHTML = (i+1)+".";
    }
</script>

<script type="text/javascript">
	function search(){
    var search =$('#search').val();
    $.ajax({
    	type:"post",
    	url:'{{URL::to("search")}}',
    	data:{
    		search:search,
    		_token: $('#signup-token').val()
    	},
    	datatype: 'html',
    	success: function(response){
    		console.log(response);
    		$("#success").html(response);
    	}
    });
    }
</script>
			  @endsection
			<!-- end page content -->