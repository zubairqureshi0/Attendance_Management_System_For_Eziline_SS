@extends('User/user_layout')
@section('content')
	
	<style type="text/css">
		.control-group textarea{
			height: 200px;
			width: 450px;
			border: 2px solid
		}
	</style>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>Add Application</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('save-leave')}}" method="post">
						  <fieldset>
							{{csrf_field()}}

							<div class="control-group hidden-phone">
							  <label>Leave Application</label>
							  
								<textarea name="application" placeholder="Write a application" required="true"></textarea>
							  </div>

							</div>

							<div class="form-actions">

							  <button type="submit" class="btn btn-primary">Submit</button>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection