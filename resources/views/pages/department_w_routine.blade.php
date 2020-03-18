 @extends('home')
@section('main_content')
<div style="display: block; margin-top: 70px; margin-right:50px;">
	
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

			 @foreach($department_w_routine as $shown)
			<tr>
				<td>{{$shown->course_code}}</td>
				<td>{{$shown->teacher_name }}</td>
				<td>{{$shown->day_name}}</td>
				<td>{{$shown->section_name}}</td>
				<td>{{$shown->room_no}}</td>
				<td>{{$shown->time}}</td>

			</tr>
			@endforeach
			 
		</tbody>
	</table>
	 @endsection