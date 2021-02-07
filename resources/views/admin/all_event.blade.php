@extends('pages.admin_home_contant')
@section('admin_content')
	
			
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                                  <th>Event Id</th>
								  <th>Event Name</th>
								  <th>Event Place</th>
								  <th>Event Date</th>
								  <th>Event Start Time</th>
                                  <th>Event End Time</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                          @foreach($all_event_info as $v_event)

<tbody>
    <tr>
            <td>{{$v_event->event_id}}</td>
            <td class="center">{{$v_event->event_name}}</td>
            <td class="center">{{$v_event->event_location}}</td>
            <td class="center">{{$v_event->event_date}}</td>
            <td class="center">{{$v_event->start_time}}</td>
            <td class="center">{{$v_event->end_time}}</td>
           


            <td class="center">
                <a class="btn btn-danger" href="{{URL::to('/delete-user/'.$v_event->event_id)}}" id="delete">
                    <i class="halflings-icon white trash"></i> 
                </a>
            </td>
        </tr>


       

            
        
               
     </tbody>

@endforeach


                                   
						 </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
 

@endsection()