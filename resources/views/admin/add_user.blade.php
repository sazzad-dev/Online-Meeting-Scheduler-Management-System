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
					<a href="#">Add User</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
					<h2><i class="halflings-icon edit"></i><span class="break"></span>Add User</h2>
						
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
						<form class="form-horizontal" method="post" action="{{url('/save-user')}}" enctype="multipart/form-data">
                    @csrf
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">User Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="user_name">
							  </div>
							</div>

            <div class="control-group">
							  <label class="control-label" for="date01">User Mail</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="user_mail">
							  </div>
							</div>

                            <div class="control-group">
							  <label class="control-label" for="date01">User Number</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="user_number">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">User Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="user_image" id="fileInput" type="file">
							  </div>
							</div> 

							


							<div class="form-actions">
							  <button type="submit"  name="submit" class="btn btn-primary">Add User</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()