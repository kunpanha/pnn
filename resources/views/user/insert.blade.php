@extends('layouts.app')

@section('title', 'Insert New User')

@section('meta')
	<link rel="canonical" href="{{ route('user.insert') }}">
@endsection

@section('content')
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<!-- title and toolbar -->
		<div class="d-md-flex align-items-md-start">
			<h1 class="page-title mr-sm-auto"> Insert New User </h1>
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
				<form method="post" action="{{ route('user.request') }}">
					{{ csrf_field() }}
					<!-- .fieldset -->
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Name">Name </label>
									<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Enter you name" autocomplete="off">
									<span class="text-danger">{{ $errors->first('name') }}</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="Email">Email </label>
									<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter you Email" autocomplete="off">
									<span class="text-danger">{{ $errors->first('email') }}</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="user_type">User Type</label>
								<select class="custom-select{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="user_type">
									<option value=""> Choose User Type... </option>
									<option value="Admin"> Admin </option>
									<option value="User"> User </option>
								</select>
								<span class="text-danger">{{ $errors->first('type') }}</span>
							</div>
							<div class="col-md-6">
								<label for="Status">Status</label>
								<select class="custom-select{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="Status">
									<option value=""> Choose Status... </option>
									<option value="1"> Active </option>
									<option value="0"> Inactive </option>
								</select>
								<span class="text-danger">{{ $errors->first('status') }}</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="d-flex justify-content-between" for="password">
										<span>Password</span>
										<a href="#password" data-toggle="password">
											<i class="fa fa-eye fa-fw"></i>
											<span>Show</span>
										</a>
									</label>
									<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Enter you password">
									<span class="text-danger">{{ $errors->first('password') }}</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="d-flex justify-content-between" for="ConfirmPassword">
										<span>Confirm Password</span>
										<a href="#ConfirmPassword" data-toggle="password">
											<i class="fa fa-eye fa-fw"></i>
											<span>Show</span>
										</a>
									</label>
									<input type="password" class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password" id="ConfirmPassword" placeholder="Enter you confirm password">
									<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
								</div>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-plus-circle"></i> Create New User</button>
					</fieldset>
					<!-- /.fieldset -->
				</form>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
	<!-- /.page-section -->
@endsection