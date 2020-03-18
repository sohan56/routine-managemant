 @extends('home')
@section('main_content')
<div style="display: block; margin-top: 70px; margin-right:50px;">
	<div class="login-content" style="float: right; ">
        <a class="btn btn-warning" href="{{ url('download-routine/routine') }}">Download</a>
    </div>
</div>
<table style="border-collapse: collapse; width:100%" Border = "1" Cellpadding = "5" Cellspacing = "5"; class="table table-striped table-bordered" >
		<thead>
		    <tr>
		      <th>#Course Code</th>
		      <th>#Teacher</th>
		      <th>#Day</th>
		      <th>#Section</th>
		      <th>#Room</th>
		      <th>#Time</th>
		     
		    </tr>
	  	</thead>
		<tbody>

			 @foreach($show_routine as $show)
			<tr>
				<td>{{$show->course_code}}</td>
				<td>{{$show->teacher_name }}</td>
				<td>{{$show->day_name}}</td>
				<td>{{$show->section_name}}</td>
				<td>{{$show->room_no}}</td>
				<td>{{$show->time}}</td>

			</tr>
			@endforeach
			 
		</tbody>
	</table>
	 @endsection