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
						<h2>Add Attandence</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('save-attandence')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
                                   <div class="control-group hidden-phone">
                                

							  <label >Attandence</label>
								<select style="width: 350px;border: 2px solid" name="attandence">
									<option>Present</option>
									<option>Absent</option>
									
								</select>

							  </div>


                                <div class="control-group hidden-phone">

							  <label >Date</label>
							  
								<input type="date" name="date" required="true">

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