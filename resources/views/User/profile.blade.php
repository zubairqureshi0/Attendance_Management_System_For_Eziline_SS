@extends('User/user_layout')
@section('content')
	
	<style type="text/css">
		.control-group input{
			height: 34px;
			width: 350px;
			border: 2px solid
		}
	</style>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>Update Profile</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
                                


                                <div class="control-group hidden-phone">

							  <label >Student Name</label>
							  
								<input type="text" name="name" class="required">

							  </div>



							</div>

							<div class="form-actions">

							  <button type="submit" class="btn btn-primary">Update</button>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection