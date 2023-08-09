<header class="prague-header simple sticky-menu sticky-mobile-menu light " id="header">

	<div class="prague-logo">
		<a href="{{ route('home') }}">
			<img src="{{ asset('public/assets/img/IM-Logo.png') }}" class="image_logo" alt="logo" /></a>
		</div>

		<div class="prague-header-wrapper">

			<div class="prague-navigation">
				<div class="pargue-navigation-wrapper">
					<div class="prague-navigation-inner">
						<nav>
							<ul class="main-menu">
								<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent {{request()->is('home')? ' active' : '' }}{{request()->is('home/*')? ' active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a>
									
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('about-us')? ' active' : '' }}{{request()->is('about-us/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('about-us') }}">About Us</a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('facilities')? ' active' : '' }}{{request()->is('facilities/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('facilities') }}">Facilities</a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('packages')? ' active' : '' }}{{request()->is('packages/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('packages') }}">Packages</a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('booking')? ' active' : '' }}{{request()->is('booking/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('booking') }}">Booking</a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('gallery')? ' active' : '' }}{{request()->is('gallery/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom {{request()->is('contact-us')? ' active' : '' }}{{request()->is('contact-us/*')? ' active' : '' }}">
									<a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
								</li>
								
							</ul>
						</nav>
					</div>
				</div>
			</div>


			<div class="prague-nav-menu-icon">
				<a href="#">
					<i></i>
				</a>
			</div>


			<div class="prague-social-nav">
				<a href="#">
					<i class="fa fa-users" aria-hidden="true"></i>
				</a>
				<ul class="social-content">
					<li>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=+919577100000"><i aria-hidden="true" class="fa fa-whatsapp"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/estateimperial">
							<i aria-hidden="true" class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.instagram.com/estateimperial/">
							<i aria-hidden="true" class="fa fa-instagram"></i>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</header>