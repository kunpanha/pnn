@extends('layouts.page')

@section('title', 'Home')

@section('meta')
	<link rel="canonical" href="{{ route('home') }}">
@endsection

@section('style')
	<!-- Pages CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/pages/slick/css/slick.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/pages/home.css') }}" type="text/css" media="screen" />
@endsection

@section('content')
	<!-- Banner & Slide -->
    <div id="divBanner" class="container">
        <div class="row">
            <div class="col-md-8 col-ms-8 col-xs-12 margin-bt-20 margin-top-10 row-full">
                <ul id="bannerSlide">
                	@foreach($slide as $row)
                    <!-- banner drama and program -->
                    <li class="slide">
                        <a href="{{ URL::to('content/'. $row->id) }}">
                            <img class="img-responsive" src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" />
                        </a>

                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption">
                                <div class="divBox1 col-md-3 col-sm-3 col-xs-4">
                                    @if($row->time == null)
                                    <h4 class="prpnn">ថ្មីៗពីPNN</h4>
                                	@elseif($row->time == 'comingsoon')
                                    <h4 class="camingSoon">ឆាប់ៗនេះ!</h4>
                                    @else
                                    <h4>{{ $row->time_slide }}</h4>
                                    <p>{{ $row->day }}</p>
                                    @endif
                                </div>
                                <div class="divBox2 col-md-9 col-sm-9 col-xs-8">
	                                <div class="caption-entry underline">
	                                    <h4>{{ $row->title }}</h4>
	                                </div>                      
	                            </div>
                            </div>
                        </a>
                    </li>
                    <!-- /banner drama and program -->
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4 col-ms-4 col-xs-12 margin-top-10">
                <div class="row">
                    @foreach($banner_slide as $row)
                    <!-- get PR -->
                    <div class="col-md-12 col-sm-6 col-xs-6 margin-bt-17">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>

                            <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                                <div class="caption sub-caption">
                                    <div class="divBox2 bg-gradient col-xs-12">
                                        <div class="caption-entry underline">
                                            <h4>{{ $row->title }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /get PR -->
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- /Banner & Slide -->

    <!-- wrapContainer --->
    <div class="wrapp-content container margin-bt-5">
        <div class="row">
            <!-- Khmer Movie -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>ភាពយន្តភាគខ្មែរ</h2></a>
                </div>
                @foreach($kh_home_top_1 as $row)
                <div class="margin-bt-15 pos-relative">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption sub-caption">                               
                                <div class="divBox2 bg-gradient col-xs-12">
                                    <div class="caption-entry underline">
                                        <h4>{{ $row->title }}</h4>       
                                    </div>                              
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="timeSlot-small bg-transform-gold">
                        @if($row->time == 'comingsoon')
                        <span>ឆាប់ៗនេះ!</span>
                        @else
                        <span>{{ $row->time }}</span>
                        <span class="date">{{ $row->day }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="row sub-gallery">
                    @foreach($kh_home_top_2 as $row)
                    <!-- Sub Gallery -->
                    <div class="col-xs-6 margin-bt-10">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        </div>
                        <div class="timeSlot-small bg-transform-gold margin-bt-10">
                            @if($row->time == 'comingsoon')
                            <span>ឆាប់ៗនេះ!</span>
                            @else
                            <span>{{ $row->time }}</span>
                            <span class="date">{{ $row->day }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /Sub Gallery -->
                    @endforeach
                </div>
            </div>
            <!-- /Khmer Movie -->

            <!-- Thai Movie -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>ភាពយន្តភាគថៃ</h2></a>
                </div>
                @foreach($th_home_top_1 as $row)
                <div class="margin-bt-15 pos-relative">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption sub-caption">                               
                                <div class="divBox2 bg-gradient col-xs-12">
                                    <div class="caption-entry underline">
                                        <h4>{{ $row->title }}</h4>                      
                                    </div>                              
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="timeSlot-small bg-transform-gold">
                        @if($row->time == 'comingsoon')
                        <span>ឆាប់ៗនេះ!</span>
                        @else
                        <span>{{ $row->time }}</span>
                        <span class="date">{{ $row->day }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="row sub-gallery">
                    @foreach($th_home_top_2 as $row)
                    <!-- Sub Gallery -->
                    <div class="col-xs-6 margin-bt-10">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        </div>
                        <div class="timeSlot-small bg-transform-gold margin-bt-10">
                            @if($row->time == 'comingsoon')
                            <span>ឆាប់ៗនេះ!</span>
                            @else
                            <span>{{ $row->time }}</span>
                            <span class="date">{{ $row->day }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /Sub Gallery -->
                    @endforeach
                </div>
            </div>
            <!-- /Thai Movie -->

            <!-- China Movie -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>ភាពយន្តភាគចិន</h2></a>
                </div>
                @foreach($ch_home_top_1 as $row)
                <div class="margin-bt-15 pos-relative">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption sub-caption">                               
                                <div class="divBox2 bg-gradient col-xs-12">
                                    <div class="caption-entry underline">
                                        <h4>{{ $row->title }}</h4>        
                                    </div>                              
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="timeSlot-small bg-transform-gold">
                        @if($row->time == 'comingsoon')
                        <span>ឆាប់ៗនេះ!</span>
                        @else
                        <span>{{ $row->time }}</span>
                        <span class="date">{{ $row->day }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="row sub-gallery">
                    @foreach($ch_home_top_2 as $row)
                    <!-- Sub Gallery -->
                    <div class="col-xs-6 margin-bt-10">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        </div>
                        <div class="timeSlot-small bg-transform-gold margin-bt-10">
                            @if($row->time == 'comingsoon')
                            <span>ឆាប់ៗនេះ!</span>
                            @else
                            <span>{{ $row->time }}</span>
                            <span class="date">{{ $row->day }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /Sub Gallery -->
                    @endforeach
                </div>
            </div>
            <!-- /China Movie -->
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>ថ្មីៗពីPNN</h2></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pr_home as $row)
            <div class="col-md-4 col-sm-6 col-xs-6 m-bt-15">
                <div class="image-wrapper m-bt-10">
                    <a href="{{ URL::to('content/'. $row->id) }}" rel="806" class="linkimg hitsLink">
                        <img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" data-src-medium="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="{{ $row->title }}" />
                    </a>
                </div>
                <a href="{{ URL::to('content/'. $row->id) }}" class="hitsLink"><h6 class="title">{{ $row->title }}</h6></a>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>កម្មវិធីកំសាន្ត</h2></a>
                </div>
                @foreach($pro_home_top_1 as $row)
                <div class="margin-bt-15 pos-relative">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption sub-caption">                               
                                <div class="divBox2 bg-gradient col-xs-12">
                                    <div class="caption-entry underline">
                                        <h4>{{ $row->title }}</h4>       
                                    </div>                              
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="timeSlot-small bg-transform-red">
                        @if($row->time == 'comingsoon')
                        <span>ឆាប់ៗនេះ!</span>
                        @else
                        <span>{{ $row->time }}</span>
                        <span class="date">{{ $row->day }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="row sub-gallery">
                    @foreach($pro_home_top_2 as $row)
                    <div class="col-xs-6 margin-bt-10">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        </div>
                        <div class="timeSlot-small bg-transform-red margin-bt-10">
                            @if($row->time == 'comingsoon')
                            <span>ឆាប់ៗនេះ!</span>
                            @else
                            <span>{{ $row->time }}</span>
                            <span class="date">{{ $row->day }}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="section">
                    <a href="/pr" class="section-title"><h2>ព្រឹត្តិការណ៍</h2></a>
                </div>
                @foreach($ev_home_top_1 as $row)
                <div class="margin-bt-15 pos-relative">
                    <div class="image-wrapper">
                        <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        <a href="{{ URL::to('content/'. $row->id) }}" class="caption-relative">
                            <div class="caption sub-caption">                               
                                <div class="divBox2 bg-gradient col-xs-12">
                                    <div class="caption-entry underline">
                                        <h4>{{ $row->title }}</h4>                      
                                    </div>                              
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="timeSlot-small bg-transform-red">
                        <span>ព្រឹត្តិការណ៍ថ្មីពី PNN</span>
                    </div>
                </div>
                @endforeach
                <div class="row sub-gallery">
                    @foreach($ev_home_top_2 as $row)
                    <div class="col-xs-6 margin-bt-10">
                        <div class="image-wrapper">
                            <a href="{{ URL::to('content/'. $row->id) }}" class="linkimg"><img class="b-lazy" data-src="{{ URL::to('assets/uploads/'.$row->photo) }}" alt="PNN TV" /></a>
                        </div>
                        <div class="timeSlot-small bg-transform-red margin-bt-10">
                            <span>ព្រឹត្តិការណ៍ថ្មីពី PNN</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /wrapContainer --->
@endsection

@section('script')
	<script type="text/javascript" src="{{ URL::to('assets/pages/slick/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/pages/js/pages/home.js') }}"></script>
@endsection