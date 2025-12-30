@extends('layouts.page')

@section('title', 'ភាពយន្តភាគថៃ')

@section('meta')
	<link rel="canonical" href="{{ route('thai') }}">
@endsection

@section('style')
	<!-- Pages CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/pages/drama_thai.css') }}" type="text/css" media="screen" />
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
                            <a href="javascript:void(0)" class="cursor-auto"><h2>ភាពយន្តភាគថៃ</h2></a>
                        </div>
                    </div>
                </div>
            </div>
			<!--- /Press Release --->

			<!--- divList --->
			<div id="divList">
				<div class="row">
					@foreach($drama_thai as $row)
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
				<div class="row">
					<div class="text-center">
						<ul class="pagination">
							{!! $drama_thai->links() !!}
						</ul>
					</div>
				</div>
			</div>
			<!--- /divList --->
		</div>
	</div>
	<!-- /wrapContainer --->
@endsection