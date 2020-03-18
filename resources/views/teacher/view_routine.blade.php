  <img src="logo2.png "alt="" align="center" style="margin-left:  75px">
     <h1 align="center" style="color:#0E06A0"></h1>
     <h3 align="center">Class Routine</h3>
      @php
             $routine = DB::table('tbl_teacher')
              ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_teacher.dept_id')
             ->where('teacher_id', Session::get('teacher_id'))->first();
       @endphp
     <h3 align="center">Department Name:{{ $routine->dept_name }}</h3>
<table style="border-collapse: collapse; width:100%" Border = "1" Cellpadding = "5" Cellspacing = "5"; class="table table-striped table-bordered" >
		<thead>
		    <tr>
		      <th>#Course Code</th>
		      <th>#Course Type</th>
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
				<td> @if($show->course_type==0)
                         Theory
                         @else
                        Lab
                         @endif
						</td>
				<td>{{$show->teacher_name }}</td>
				<td>{{$show->day_name}}</td>
				<td>{{$show->section_name}}</td>
				<td>{{$show->room_no}}</td>
				<td>{{$show->time}}</td>

			</tr>
			@endforeach
			 
		</tbody>
	</table>
	