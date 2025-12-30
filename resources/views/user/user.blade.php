@extends('layouts.app')

@section('title', 'List All User')

@section('meta')
	<link rel="canonical" href="{{ route('user') }}">
@endsection

@section('style')
	<link href="{{ URL::to('assets/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<div class="row">
			<div class="col-md-10">
				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> List All User </h1>
				</div>
				<!-- /title and toolbar -->
			</div>
			<div class="col-md-2">
				<a href="{{ route('user.insert') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Add New User</a>
			</div>
		</div>
	</header>
	<!-- /.page-title-bar -->
	<!-- .page-section -->
	<div class="page-section">
		<!-- .table -->
		<table id="userTable" class="table">
			<!-- thead -->
			<thead>
				<tr>
					<th> Name </th>
					<th> Profile </th>
					<th> Email </th>
					<th> User Type </th>
					<th> Status </th>
					<th> Date </th>
					<th style="width:100px; min-width:100px;"> &nbsp; </th>
				</tr>
			</thead>
			<!-- /thead -->
			<!-- tbody -->
			<tbody>
				@foreach($user as $row)
				<tr>
					<td>{{ $row->name }}</td>
					<td><img class="user-avatar user-avatar-lg" src="{{ URL::to('assets/images/avatars', $row->avatars) }}" alt="{{ $row->name }}"></td>
					<td>{{ $row->email }}</td>
					<td>{{ $row->type }}</td>
					<td>
						@if($row->status == '1')
                           <div class="text-success">Active</div>
                        @else
                            <div class="text-danger">Inactive</div>
                        @endif
					</td>
					<td>{{ date('d-m-Y | H:i',strtotime($row->created_at)) }}</td>
					<td><a class="btn btn-sm btn-icon btn-secondary" href="#598"><i class="fa fa-pencil-alt"></i></a> <a class="btn btn-sm btn-icon btn-danger" href="#598"><i class="far fa-trash-alt"></i></a></td>
				</tr>
				@endforeach
			</tbody>
			<!-- /tbody -->
		</table>
		<!-- /.table -->
	</div>
	<!-- /.page-section -->
@endsection

@section('script')
    <script src="{{ URL::to('assets/datatables/jquery.dataTables.js') }}"></script>
	<script src="{{ URL::to('assets/datatables/dataTables.bootstrap4.js') }}"></script>
	<script src="{{ URL::to('assets/js/pages/user.js') }}"></script>
@endsection