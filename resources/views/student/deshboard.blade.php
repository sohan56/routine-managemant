
@extends('student.index')

@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title" >Home</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{URL::to('/student-deshboard')}}"></a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active"></li>
							</ol>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="card ">
										
										<div class="card-body ">
											<div class="table-responsive">
												<h3>Welcome to My Asian</h3>
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