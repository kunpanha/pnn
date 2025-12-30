@extends('layouts.page')

@section('title')
	{{ $post->title }}
@endsection

@section('meta')
	<link rel="canonical" href="{{ URL::to('content/'. $post->id) }}">
@endsection

@section('style')
	<!-- Pages CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/pages/slick/css/slick.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/pages/content.css') }}" type="text/css" media="screen" />
@endsection

@section('content')
	<!-- wrapContainer --->
	<div id="wrapContainer" ondragstart="return false;" ondrop="return false;">
		<div class="container-fluid bg-content">
			<div class="container">
				<div class="row">
					<!-- content page -->
					<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="bg-white m-bt-40">
							<div class="divTop">
								<h4 class="title-content">{{ $post->title }}</h4>
							</div>
							<div class="m-topbt-20 pad-lr-15 clearfix">
								<div class="dateTime pull-left">
									<i class="far fa-clock"></i>
									<span class="date">{{ $post->date_kh }}</span>										
								</div>
								<div class="block-social pull-right">
									<div class="sharethis-inline-share-buttons"></div>
								</div>
							</div>
							<!-- contents -->
							<div id="contents" class="pad-lr-15">
								{!! $post->content !!}
							</div>
							
							<!-- relate content -->	
							<div id="divRelate">
								<div id="section-relate">
									<div class="section-title">
										<a href="javascript:void(0)" class="cursor-auto"><h2>ព័ត៌មាន​ទាក់ទង</h2></a>
									</div>
								</div>
								
								<div id="relate-slide">
									@foreach($slide as $row)
									<div class="slide">
										<div style="display: table;">
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
                                            <img class="img-responsive" src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
										</div>
										<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
											<h6 class="title">{{ $row->title }}</h6>
										</a>
									</div>
									@endforeach
								</div>
							</div>
							<!-- /relate content -->	
						</div>
					</div>
					<!-- /content page -->
					<!-- sidebar page -->
					<div class="col-xs-12 col-sm-12 col-md-4">
						<!-- include sidebar -->
						<div id="sidebar" class="bg-white">
							<div class="sidebar-inner">
								<!-- last Pr PNN -->
								<div class="section">
									<a href="/pr" class="section-title"><h2>ថ្មីៗពីPNN</h2></a>
								</div>
								<div class="pad-lr-15">
									<div class="row pad-bt-15">
										@foreach($pr_con_top_1 as $row)
										<div class="col-xs-12">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										@endforeach
										
										@foreach($pr_con_top_2 as $row)
										<!-- sub -->
										<div class="col-xs-6">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										<!-- /sub -->
										@endforeach
									</div>
								</div>
								<!-- /last Pr PNN -->

								<!-- last Drama -->
								<div class="section">
									<a href="/pr" class="section-title"><h2>ភាពយន្តភាគ</h2></a>
								</div>
								<div class="pad-lr-15">
									<div class="row pad-bt-15">
										@foreach($drama_top_1 as $row)
										<div class="col-xs-12">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										@endforeach
										
										@foreach($drama_top_2 as $row)
										<!-- sub -->
										<div class="col-xs-6">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										<!-- /sub -->
										@endforeach
									</div>
								</div>
								<!-- /last Drama -->

								<!-- last Program -->
								<div class="section">
									<a href="/pr" class="section-title"><h2>កម្មវិធីកំសាន្ត</h2></a>
								</div>
								<div class="pad-lr-15">
									<div class="row pad-bt-15">
										@foreach($pro_top_1 as $row)
										<div class="col-xs-12">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										@endforeach
										
										@foreach($pro_top_2 as $row)
										<!-- sub -->
										<div class="col-xs-6">
											<div class="image-wrapper">
												<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
													<img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
												</a>
											</div>
											<a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
												<h6 class="title">{{ $row->title }}</h6>
											</a>
										</div>
										<!-- /sub -->
										@endforeach
									</div>
								</div>
								<!-- /last Program -->
							</div>
						</div>
						<!-- /include sidebar -->
					</div>
					<!-- /sidebar page -->
				</div>
			</div>
		</div>
	</div>
	<!-- /wrapContainer --->
@endsection

@section('script')
	<script type="text/javascript" src="{{ URL::to('assets/pages/slick/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/pages/js/pages/content.js') }}"></script>
@endsection