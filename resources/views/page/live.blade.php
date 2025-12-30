@extends('layouts.page')

@section('title', 'Live TV')

@section('meta')
	<link rel="canonical" href="{{ route('live') }}">
@endsection

@section('style')
<link rel="stylesheet" href="{{ URL::to('assets/css/live.css') }}" type="text/css" />
@endsection

@section('content')
    <!-- wrapContainer --->
	<div id="wrapContainer">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9" id="live">
                    <div id="pnn_live" style="width:100%; height:0; padding:0 0 56.25% 0"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /wrapContainer --->
@endsection

@section('script')
<!-- You need hls.js to play HLS. -->
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest/dist/hls.min.js"></script>

<!-- Load OvenPlayer via CDN -->
<script src="https://cdn.jsdelivr.net/npm/ovenplayer/dist/ovenplayer.js"></script>

<script>
    // Initialize OvenPlayer
    const player = OvenPlayer.create('pnn_live', {
        "autoStart": true,
        "autoFallback": true,
        "mute": false,
        "sources": [{
            "label": "PNN TV",
            "type": "hls",
            "file": "https://live.ams.com.kh/app/stream/playlist.m3u8"
        }]
    });
</script>
@endsection