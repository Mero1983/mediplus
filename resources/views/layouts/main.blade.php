<!doctype html>

	<head>

    @include('includes.head')
	</head>
	
    <body>
	
		<!-- Preloader -->
      @include('includes.preLoader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
	@include('includes.proButton')
	
		<!-- Header Area -->
		<header class="header" >
			@include('includes.topBar')
			
            @include('includes.headerInner')
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
	@yield('content')
		<!-- Footer Area -->
			<!-- Footer Top -->
			@include('includes.footer')
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
       @include('includes.footerJs')
    </body>
</html>