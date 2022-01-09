<head>
<title>HITMA PICS </title>
		<link rel="stylesheet" href="{{asset('f/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('f/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('f/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('f/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('f/css/main.css')}}">
    <link rel="icon" href="/svg/dzone.svg"/>

	</head>
	<body>
    <header class="default-header">
        <div class="sticky-header" style="width: 1349px;position: fixed ; top: 0px; background: linear-gradient(to right, rgba(60, 64, 143, 0.95) 0%, rgba(91, 97, 207, 0.95) 100%);">
            <div class="container">
                <div class="header-content d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#top" class="smooth" style="color: white"><img style="width: 30px" src="f/img/htma.png" alt="">HTMA Pics</a>
                    </div>
                    <div class="right-bar d-flex align-items-center">
                        <nav class="d-flex align-items-center">
                            <ul class="main-menu">
                                <li><a href="#top">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#subjects">subjects</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
                        </nav>

                        <div class="header-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
		<div id="top"></div>

		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center pt-150 pb-150">
					<div class="col-lg-8">
						<div class="banner-content text-center ">
							<p class="text-uppercase text-white">We work hard, we result perfect</p>
							<h1 class="text-uppercase text-white">Create take photos and post</h1>



                                <!-- Authentication Links -->
                                @guest
                                        <a class="primary-btn banner-btn pt-20" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                            <a class="primary-btn banner-btn pt-20" href="{{ route('register') }}">{{ __('Join us') }}</a>
                                    @endif
                                @else
                                        <a class="primary-btn banner-btn pt-20" href="/profile/{{Auth::user()->id}}">{{ Auth::user()->username }}</a>
                                        <div>
                                            <a class="dropdown-item " href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                @endguest
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-title text-center">
							<p class="text-uppercase">About informaton and communications engineering</p>
                            <h3>It is one of the colleges of the University of<b> Tartus in Syria </b>, approved in 2006, its headquarters is in the coastal city of Tartous. The college building is about 10 km from the city center in<b> Beit Kamouneh </b></h3>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section id="services" class="title-bg section-full">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-white text-uppercase">WE WORK HARD, WE RESULT PERFECT</p>
							<h2 class="text-white h1">CREATE TAKE PHOTOS <br>AND POST </h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-star"></span>
							</div>
							<div class="desc">
								<h4>idea</h4>
								<p>Create a unique idea that helps solve a specific problem and develop society </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-magic-wand"></span>
							</div>
							<div class="desc">
								<h4>Make it up</h4>
								<p>Make a project idea and develop it from an idea to a project on the ground</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-sun"></span>
							</div>
							<div class="desc">
								<h4>Take pictures</h4>
								<p>Take photos of the project you created, explain its purpose and how you did it </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-layers"></span>
							</div>
							<div class="desc">
								<h4>Upload pictures and text</h4>
								<p>Upload your captured pictures and texts explaining the project's work and purpose </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Start Digital Studio -->
		<section class="section-full studio-area" id="subjects">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="studio-content">
							<p class="text-uppercase text-white">WE WORK HARD, WE RESULT PERFECT</p>
							<h2 class="h1 text-white text-uppercase mb-20">subjects</h2>
							<p class="text-white mb-30">Within the Hatma branch, programming languages are taught, as well as (algorithms, data structures, web programming, multimedia, artificial intelligence, and integrated circuits .....) as well (optical, wired, wireless, visual, satellite, and .....) with many mathematics and physics courses Places for branches of mathematics</p>
							<a href="{{url('login')}}" class="primary-btn text-white d-inline-flex align-items-center">Join us<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="Contact" class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Connect with us</p>
							<h2 class="h1">Send us a message <br> not requires social</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-30">
						<p>The Faculty of Information and Communications Technology Engineering is one of the colleges affiliated to Tishreen University in Syria approved in 2006, its headquarters is in the coastal city of Tartous. The college building is about 10 km from the city center in the town of Beit Kamouneh, Tartous</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">Physical Address</h6>
									<p>Beit Kamouneh, Tartous<br> 10 km from the city <br> center in the town </p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">WEb Contact</h6>
									<a href="tel:0000">+963 994488222</a> <br>
									<a href="tel:0000">+963 994488222</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-30">
						<form id="myForm" action="mail.php" method="post" class="contact-form">
							<div class="single-input color-2 mb-10">
								<input type="text" name="fname" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="email" name="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
							</div>

							<div class="single-input color-2 mb-10">
								<textarea name="message" placeholder="Type your message here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your message here...'" required></textarea>
							</div>
							<div class="d-flex justify-content-end"><button class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center">Send Message<span class="lnr lnr-arrow-right"></span></button></div>
							<div class="alert"></div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
		<!-- Start Cta Area -->
		<section class="cta-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 d-flex no-flex-xs justify-content-between align-items-center">
						<h5 class="text-uppercase text-white">CREATE TAKE PHOTOS AND POST</h5>
						<a href="{{url('login')}}" class="primary-btn d-inline-flex text-uppercase text-white align-items-center">Join us<span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cta Area -->
		<footer class="section-full">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">About HTMA Pics</h6>
                            <p>A website for the Faculty of Information and Communications Technology Engineering to share pictures and text </p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
							<div class="d-flex">
								<ul class="footer-nav">
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Portfolio</a></li>
								</ul>
								<ul class="ml-30 footer-nav">
									<li><a href="#">Team</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">ICTE</h6>
							<p>This branch is one of the most advanced branches at the level of Syrian universities with its specializations, as it includes three branches</p>
							<div id="mc_embed_signup">
								<form target="_blank" novalidate action="" method="get" class="subscription relative d-flex justify-content-center">
									<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b" tabindex="-1" value="">
									</div>
									<button type="submit" class="newsletter-btn" name="subscribe"><span class="lnr lnr-location"></span></button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<div class="footer-bottom d-flex justify-content-between align-items-center">
					<p class="footer-text m-0">Copyright &copy; 2020  |  All rights reserved to HTMA Pics made with <span class="lnr lnr-heart"></span> by Slman Ismael.</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
	</body>



