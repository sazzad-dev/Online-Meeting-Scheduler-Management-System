@extends('pages.admin_home_contant')
@section('admin_content')
	
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Event</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
					<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Event</h2>
						
					</div>
					<p class="alert-success">
					<?php


					$messege=Session::get('messege');
					     if($messege)
							 {
								 echo $messege;
								 Session::put('messege',null);
							 }
					
					
						
					
					?>
					</p>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{url('/save-event')}}" enctype="multipart/form-data">
             @csrf
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Event Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="event_name">
							  </div>
							</div>

                           <div class="control-group">
							  <label class="control-label" for="date01">Event Location</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="event_location">
							  </div>
							</div>

                            <div class="control-group">
							  <label class="control-label" for="date01">Event Date</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="event_date">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Start Time</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="start_time" id="fileInput" type="time">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">End Time</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="end_time" id="fileInput" type="time">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="event_description" rows="3"></textarea>
							  </div>
							</div> 

							


							<div class="form-actions">
							  <button type="submit"  name="submit" class="btn btn-primary">Add Event</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()