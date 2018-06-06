@extends('layouts.master')
@section('content')
    

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			<i class="fa fa-file-text-o"></i>TrotroTv
		
		</h2>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">Home</a>
			</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel panel-default">
			<div class="panel panel-default">
				<div class="panel-heading">Report Information</div>
				<div class="panel-body" id="add-report-info">
					<table class="table" id="investTable">
						<thead>
							<tr>
								<th>VEHICLE NAME</th>
								<th>QUESTION</th>
								<th>ANSWER</th>
								<th>UPLOADED</th>
								<th>COMMENTS</th>
								<th>TIMESTAMP</th>
								<th>USER</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($reports as $key => $r)
                                
							
							<tr>
								<td>{{$r->vehicle}}</td>
								<td class="txt-oflo">{{$r->question}} </td>
								<td class="txt-oflo">{{$r->answer}} </td>
								<td class="txt-oflo">{{$r->uploaded}} </td>
								<td class="txt-oflo">{{$r->comments}} </td>
								<td class="txt-oflo">{{$r->timestamp}} </td>
								<td class="txt-oflo">{{$r->user}} </td>
							</tr>
                            @endforeach
                            
						
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body" id="add-report-links">
                    {{$reports->links()}}
                    <div>
						<button href="#export-report" role="button" data-toggle="modal" class="btn btn-success" >Export Report</button>
					</div>	
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body" id="add-report-export"></div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Survey Information</div>
				<div class="panel-body" id="add-survey-info">
					<table class="table" id="investTable">
						<thead>
							<tr>
								<th>BRAND NAME</th>
								<th>QUESTION</th>
								<th>ANSWER</th>
								<th>UPLOADED</th>
								<th>TIMESTAMP</th>
								<th>USER</th>
								<th>RESPONDENT NAME</th>
								<th>RESPONDENT TEL. NUMBER.</th>
								<th>RESPONDNET EMAIL</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($surveys as $key => $s)
							<tr>
								<td>{{$s->brand}}</td>
								<td class="txt-oflo">{{$s->question}} </td>
								<td class="txt-oflo">{{$s->answer}} </td>
								<td class="txt-oflo">{{$s->uploaded}} </td>
								<td class="txt-oflo">{{$s->timestamp}} </td>
								<td class="txt-oflo">{{$s->user}} </td>
								<td class="txt-oflo">{{$s->respondent_name}} </td>
								<td class="txt-oflo">{{$s->respondent_tel_number}} </td>
								<td class="txt-oflo">{{$s->respondent_email}} </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body" id="add-survey-links">
					{{$surveys->links()}}
					<div>  
						<button href="#export-survey" role="button" data-toggle="modal"  class="btn btn-success">Export Survey</button>
					</div>      
				</div>
			</div>
		</section>
	</div>
</div>
<div class="export-filters">
	<!-- Modal -->
	<div id="export-report" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Export report date range</h3>
				</div>
				<form action="{{route('exportReports')}}" enctype="multipart/form-data">
				<div class="modal-body">	
					<label>FROM: </label>
					<div class="input-group date" data-date-format="dd.mm.yyyy" data-provide="date">
						<input  type="text" name="from" class="form-control" placeholder="dd.mm.yyyy">
						<div class="input-group-addon">
							<span class="fa fa-calendar"></span>
						</div>
					</div>
					<label>TO: </label>
					<div class="input-group date" data-date-format="dd.mm.yyyy" data-provide="date">
						<input  type="text" name="to" class="form-control" placeholder="dd.mm.yyyy">
						<div class="input-group-addon">
							<span class="fa fa-calendar"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" type="submit" aria-hidden="true">Export</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="export-survey" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Export Surveys</h3>
				</div>
				<form action="{{route('exportSurveys')}}" enctype="multipart/form-data">
					<div class="modal-body">
						<label>FROM: </label>
						<div class="input-group date" data-date-format="dd.mm.yyyy">
							<input  type="text" name="from" class="form-control" placeholder="dd.mm.yyyy">
							<div class="input-group-addon">
								<span class="fa fa-calendar"></span>
							</div>
						</div>
						<label>TO: </label>
						<div class="input-group date" data-date-format="dd.mm.yyyy">
								<input  type="text" name="to" class="form-control" placeholder="dd.mm.yyyy">
								<div class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" type="submit" aria-hidden="true">Export</button>
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection