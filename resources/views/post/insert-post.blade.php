@extends('layouts.app')

@section('title', 'Insert New Post')

@section('meta')
	<link rel="canonical" href="{{ route('insert.article') }}">
@endsection

@section('style')
	<link href="{{ URL::to('assets/css/post.css') }}" rel="stylesheet">
@endsection

@section('content')
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<!-- title and toolbar -->
		<div class="d-md-flex align-items-md-start">
			<h1 class="page-title mr-sm-auto"> Insert New Post </h1>
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
				<form method="post" action="{{ route('post.request') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!-- .fieldset -->
					<fieldset>
						<div class="row">
							<div class="col-md-9">
								<div class="form-group">
									<label for="Title">Title </label>
									<input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" placeholder="Enter you title" autocomplete="off">
									<span class="text-danger">{{ $errors->first('title') }}</span>
								</div>
								<div class="form-group">
			                        <textarea name="content" rows="35" class="form-control"></textarea>
			                        <span class="text-danger">{{ $errors->first('content') }}</span>
			                    </div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<button type="submit" name="publish" class="btn btn-primary btn-lg btn-block"><i class="fas fa-save"></i> Publish</button>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-3">
								    	<input type="checkbox" class="custom-control-input" id="addtoslide" name="slide">
								    	<label class="custom-control-label" for="addtoslide">Add to Slide</label>
								    </div>
								</div>
								<div class="form-group">
									<label for="Category">Category</label>
									<select class="custom-select{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category">
										<option value=""> Choose Category... </option>
										@foreach($category as $row)
										<option value="{{ $row->id }}"> {{ $row->category_en }} </option>
										@endforeach
									</select>
									<span class="text-danger">{{ $errors->first('category') }}</span>
								</div>
								<div class="form-group">
									<label for="Subcate">Sub Category</label>
									<select class="custom-select{{ $errors->has('subcate_id') ? ' is-invalid' : '' }}" name="subcate_id" id="subcate_id">
										<option value=""> Choose Sub Category... </option>
									</select>
								</div>
								<div class="form-group">
									<label for="Time">Time</label>
									<select class="custom-select" name="time" id="time">
										<option value=""> Choose Time... </option>
										<option value="comingsoon"> Coming Soon </option>
										<option value="១១:០០-១២:០០"> 11:00-12:00 </option>
										<option value="១២:០០-១៣:០០"> 12:00-13:00 </option>
										<option value="១១:០០-១៣:០០"> 11:00-13:00 </option>
										<option value="១៣:០០-១៥:៣០"> 13:00-15:30 </option>
										<option value="១៦:៣០-១៩:០០"> 16:30-19:00 </option>
										<option value="១៨:០០-១៩:០០"> 18:00-19:00 </option>
										<option value="១៩:០០-២០:០០"> 19:00-20:00 </option>
										<option value="២០:០០-២១:០០"> 20:00-21:00 </option>
										<option value="២១:០០-២២:០០"> 21:00-22:00 </option>
									</select>
								</div>
								<div class="form-group">
									<label for="Day">Day</label>
									<select class="custom-select" name="day" id="day">
										<option value=""> Choose Day... </option>
										<option value="ច័ន្ទ-ពុធ"> Mon-Wed </option>
										<option value="ច័ន្ទ-សុក្រ"> Mon-Fri </option>
										<option value="ព្រហស្បតិ៍-សៅរ៍">Thu-Sat</option>
										<option value="រៀងរាល់ថ្ងៃសៅរ៍">Every Saturday</option>
										<option value="រៀងរាល់ថ្ងៃអាទិត្យ">Every Sunday</option>
									</select>
								</div>
								<div class="form-group">
									<label for="Status">Status</label>
									<select class="custom-select{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status">
										<option value=""> Choose Status... </option>
										<option value="1"> Active </option>
										<option value="0"> Inactive </option>
									</select>
									<span class="text-danger">{{ $errors->first('status') }}</span>
								</div>
								<div class="form-group">
									<label for="photo">Photo Cover</label>
									<img width="100%" id='img-upload' />
									<span class="btn btn-primary btn-lg btn-block btn-file">
										<i class="fas fa-images"></i> Browse Photo…<input type="file" id="file" name="photo" class="form-control-file">
									</span>
									<span class="text-danger">{{ $errors->first('photo') }}</span>
								</div>
							</div>
						</div>
					</fieldset>
					<!-- /.fieldset -->
				</form>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
	<!-- /.page-section -->
@endsection

@section('script')
	<script src="{{ URL::to('assets/tinymce/js/tinymce/tinymce.min.js') }}"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="{{ URL::to('assets/js/pages/insert-post.js') }}"></script>
@endsection