@extends('layouts.app')

@section('title', 'Insert New Sub Category')

@section('meta')
	<link rel="canonical" href="{{ route('subcate.insert') }}">
@endsection

@section('content')
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<!-- title and toolbar -->
		<div class="d-md-flex align-items-md-start">
			<h1 class="page-title mr-sm-auto"> Insert New Sub Category </h1>
		</div>
		<!-- /title and toolbar -->
	</header>
	<!-- /.page-title-bar -->
	<!-- .page-section -->
	<div class="page-section">
		<div class="d-xl-none">
			<button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
		</div>
		<div id="base-style" class="card">
			<!-- .card-body -->
			<div class="card-body">
				<form method="post" action="{{ route('subcate.request') }}">
					{{ csrf_field() }}
					<!-- .fieldset -->
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Sub Category English">Sub Category English </label>
									<input type="text" class="form-control{{ $errors->has('subcate_en') ? ' is-invalid' : '' }}" name="subcate_en" placeholder="Enter you sub category english" autocomplete="off">
									<span class="text-danger">{{ $errors->first('subcate_en') }}</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="Sub Category Khmer">Sub Category Khmer </label>
									<input type="text" class="form-control{{ $errors->has('subcate_kh') ? ' is-invalid' : '' }}" name="subcate_kh" placeholder="Enter you sub category khmer" autocomplete="off">
									<span class="text-danger">{{ $errors->first('subcate_kh') }}</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="Category">Category</label>
								<select class="custom-select{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category">
									<option value=""> Choose Category... </option>
									@foreach($category as $row)
									<option value="{{ $row->id }}"> {{ $row->category_en }} </option>
									@endforeach
								</select>
								<span class="text-danger">{{ $errors->first('category') }}</span>
							</div>
							<div class="col-md-6">
								<label for="Status">Status</label>
								<select class="custom-select{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status">
									<option value=""> Choose Status... </option>
									<option value="1"> Active </option>
									<option value="0"> Inactive </option>
								</select>
								<span class="text-danger">{{ $errors->first('status') }}</span>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-plus-circle"></i> Create New Sub Category</button>
					</fieldset>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
	<!-- /.page-section -->
@endsection