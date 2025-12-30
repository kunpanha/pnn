@extends('layouts.page')

@section('title', 'ភាពយន្តភាគ')

@section('meta')
	<link rel="canonical" href="{{ route('drama') }}">
@endsection

@section('style')
	<!-- Pages CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/pages/drama.css') }}" type="text/css" media="screen" />
@endsection

@section('content')
	<!-- wrapContainer --->
	<div id="wrapContainer">
		<div class="container">
			<!--- Press Release --->
			<div class="row">
                <div class="col-xs-12">
                    <div id="sect-top">
                        <div class="section-title">
                            <a href="javascript:void(0)" class="cursor-auto"><h2>ភាពយន្តភាគខ្មែរ</h2></a>
                        </div>
                    </div>
                </div>
                @foreach($kh_drama_top_2 as $row)
                <!-- Top Khmer Drama -->
                <div class="col-md-6 col-sm-12 col-xs-12 m-bt-15">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
                    </div>
                    <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
                        <h4 class="title">{{ $row->title }}</h4>
                    </a>
                </div>
                <!-- /Top Khmer Drama -->
                @endforeach
            </div>
			<!--- /Press Release --->

			<!--- divList --->
			<div id="divList">
				<div class="row">
					@foreach($kh_drama_top_3 as $row)
					<div class="col-md-4 col-sm-6 col-xs-12 m-bt-15 countRow">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
                                <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
                            </a>
                        </div>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
                            <h6 class="title">{{ $row->title }}</h6>
                        </a>
                    </div>
					@endforeach
				</div>
			</div>
			<!--- /divList --->
			<div class="row">
				<div class="col-xs-12">
					<div class="text-right">
						<a href="{{ route('khmer') }}" class="btn btn-success">មានច្រើនទៀត</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="sect-top">
                        <div class="section-title">
                            <a href="javascript:void(0)" class="cursor-auto"><h2>ភាពយន្តភាគថៃ</h2></a>
                        </div>
                    </div>
                    <div class="margin-bt-15 pos-relative">
                    	@foreach($th_drama_top_1 as $row)
                    	<div class="image-wrapper">
	                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
	                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
	                    </div>
	                    <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
	                        <h4 class="title">{{ $row->title }}</h4>
	                    </a>
                    	@endforeach
                    </div>
                    <div class="row sub-gallery">
                    	@foreach($th_drama_top_2 as $row)
		                <div class="col-xs-6 margin-bt-10">
		                    <div class="image-wrapper">
		                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
		                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
		                    </div>
		                    <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
		                        <h4 class="title">{{ $row->title }}</h4>
		                    </a>
		                </div>
		                @endforeach
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 margin-bt-10">
							<div class="text-right">
								<a href="{{ route('thai') }}" class="btn btn-success">មានច្រើនទៀត</a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="sect-top">
                        <div class="section-title">
                            <a href="javascript:void(0)" class="cursor-auto"><h2>ភាពយន្តភាគចិន</h2></a>
                        </div>
                    </div>
                    <div class="margin-bt-15 pos-relative">
                    	@foreach($ch_drama_top_1 as $row)
                    	<div class="image-wrapper">
	                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
	                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
	                    </div>
	                    <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
	                        <h4 class="title">{{ $row->title }}</h4>
	                    </a>
                    	@endforeach
                    </div>
                    <div class="row sub-gallery">
                    	@foreach($ch_drama_top_2 as $row)
		                <div class="col-xs-6 margin-bt-10">
		                    <div class="image-wrapper">
		                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
		                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" /></a>
		                    </div>
		                    <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg hitsLink">
		                        <h4 class="title">{{ $row->title }}</h4>
		                    </a>
		                </div>
		                @endforeach
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 margin-bt-10">
							<div class="text-right">
								<a href="{{ route('chinese') }}" class="btn btn-success">មានច្រើនទៀត</a>
							</div>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<!-- /wrapContainer --->
@endsection