<header class="header rs-nav header-transparent">
	<div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
				<!-- Header Logo ==== -->
				<div class="menu-logo">
					<a href="{{ url('/') }}"><img src="assets/images/logo-white.png" alt="Logo"></a>
				</div>
				<!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
					<div class="menu-logo">
						<a href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
					</div>
                    <ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li><a href="#">Event</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Kontak</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="{{ route('login') }}">Masuk</a></li>
					</ul>
					<div class="nav-social-link">
						<a href="#">Profezi</a>
					</div>
                </div>
				<!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>