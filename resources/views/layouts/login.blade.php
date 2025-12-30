<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- End Required meta tags -->

	    <!-- Begin SEO tag -->
	    <title> @yield('title') | Administrator </title>
	    <meta property="og:title" content="Sign In">
	    <meta name="author" content="Beni Arisandi">
	    <meta property="og:locale" content="en_US">
	    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
	    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
	    <link rel="canonical" href="https://uselooper.com">
	    <meta property="og:url" content="https://uselooper.com">
	    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
	    <script type="application/ld+json">
	    	{
	    		"name": "Looper - Bootstrap 4 Admin Theme",
		        "description": "Responsive admin theme build on top of Bootstrap 4",
		        "author":
		        {
		        	"@type": "Person",
          			"name": "Beni Arisandi"
		        },
		        "@type": "WebSite",
		        "url": "",
		        "headline": "Sign In",
		        "@context": "http://schema.org"
	    	}
	    </script>
	    <!-- /Begin SEO tag -->

	    <!-- Favicons -->
	    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('assets/images/favicons/apple-touch-icon.png') }}">
	    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicons/favicon.ico') }}">
	    <meta name="theme-color" content="#3063A0">
	    <!-- /Favicons -->

	    <!-- Google font -->
	    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
	    <!-- /Google font -->

	    <!-- BEGIN PLUGINS STYLES -->
	    <link rel="stylesheet" href="{{ URL::to('assets/fontawesome/css/all.min.css') }}">
	    <!-- /BEGIN PLUGINS STYLES -->

	    <!-- BEGIN THEME STYLES -->
	    <link rel="stylesheet" href="{{ URL::to('assets/css/theme.min.css') }}" data-skin="default">
	    <link rel="stylesheet" href="{{ URL::to('assets/css/theme-dark.min.css') }}" data-skin="dark">
	    <link rel="stylesheet" href="{{ URL::to('assets/css/custom.css') }}">
	    <script>
	    	var skin = localStorage.getItem('skin') || 'default';
	    	var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
	    	// Disable unused skin immediately
	    	disabledSkinStylesheet.setAttribute('rel', '');
	    	disabledSkinStylesheet.setAttribute('disabled', true);
	    	// add loading class to html immediately
	    	document.querySelector('html').classList.add('loading');
	    </script>
	    <!-- /BEGIN THEME STYLES -->
	</head>
	<body>
		<!-- .auth -->
		<main class="auth">
			@yield('content')
		</main>
		<!-- /.auth -->

		<!-- BEGIN BASE JS -->
		<script src="{{ URL::to('assets/jquery/jquery.min.js') }}"></script>
	    <script src="{{ URL::to('assets/popper.js/umd/popper.min.js') }}"></script>
	    <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- /BEGIN BASE JS -->

		<!-- BEGIN THEME JS -->
		<script src="{{ URL::to('assets/js/theme.js') }}"></script>
		<!-- /BEGIN THEME JS -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag()
			{
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
    		gtag('config', 'UA-116692175-1');
		</script>
		<!-- /Global site tag (gtag.js) - Google Analytics -->
	</body>
</html>