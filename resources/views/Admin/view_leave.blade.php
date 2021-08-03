@extends('Admin/admin_layout')
@section('content')


<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Students</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							<tr>
								<th> ID</th>
                                <th>User ID</th>
								<th>Leave</t>
							</tr>
						  </thead>   
						 </th>
								@if(!empty($select))
								@foreach($select as $value)
								 <tbody>
									<tr> 
										
										<td>{{$value->id}}</td>
										<td>{{$value->user_id}}</td>
										<td>{{$value->application}}</td>
										
									</tr>
							
						 		</tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->




@endsection