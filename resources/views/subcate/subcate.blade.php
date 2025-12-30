@extends('layouts.app')

@section('title', 'List All Sub Category')

@section('meta')
	<link rel="canonical" href="{{ route('subcate') }}">
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
					<h1 class="page-title mr-sm-auto"> List All Sub Category </h1>
				</div>
				<!-- /title and toolbar -->
			</div>
			<div class="col-md-2">
				<a href="{{ route('subcate.insert') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Add New Sub Category</a>
			</div>
		</div>
	</header>
	<!-- /.page-title-bar -->
	<!-- .page-section -->
	<div class="page-section">
		<!-- .table -->
		<table id="subcateTable" class="table">
			<!-- thead -->
			<thead>
				<tr>
					<th> Title English </th>
					<th> Title Khmer </th>
					<th> Category </th>
					<th> Status </th>
					<th> Date </th>
					<th style="width:100px; min-width:100px;"> &nbsp; </th>
				</tr>
			</thead>
			<!-- /thead -->
			<!-- tbody -->
			<tbody>
				@foreach($subcate as $row)
				<tr>
					<td>{{ $row->subcate_en }}</td>
					<td>{{ $row->subcate_kh }}</td>
					<td>{{ $row->cate_title }}</td>
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
			<!-- tbody -->
		</table>
		<!-- /.table -->
	</div>
	<!-- /.page-section -->
@endsection

@section('script')
    <script src="{{ URL::to('assets/datatables/jquery.dataTables.js') }}"></script>
	<script src="{{ URL::to('assets/datatables/dataTables.bootstrap4.js') }}"></script>
	<script src="{{ URL::to('assets/js/pages/subcate.js') }}"></script>
@endsection