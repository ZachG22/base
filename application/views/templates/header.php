<html>
	<head>
		<title><?= $title ?></title>
		<link rel="stylesheet" href="<?php echo $this->config->base_url() . 'assets/css/main.css'?>">
		<link rel="stylesheet" href="<?php echo $this->config->base_url() . 'assets/css/font-awesome.min.css'?>">
		<link rel="stylesheet" href="<?php echo $this->config->base_url() . 'assets/css/style.css'?>">
		<script type='text/javascript' src="<?php echo $this->config->base_url() . 'assets/js/jquery.min.js' ?>"></script>
		<script type='text/javascript' src="<?php echo $this->config->base_url() . 'assets/js/index.js' ?>"></script>
	</head>
	<body>
		<header id="header">
			<div class="logo">TestLogo</div>
		</header>
		<div class="nav-container">		
			<div class="xs-menu-cont">
			<a id="menutoggle"><i class="fa fa-align-justify"></i> </a>
				<nav class="xs-menu displaynone">
					<ul>
						<li>
							<a href="<?php echo $this->config->base_url(); ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo $this->config->base_url() . 'index.php/pages/view/about'; ?>">About</a>
						</li>
						<li>
							<a href="#">Services</a>
						</li>
						<li>
							<a href="#">Team</a>
						</li>
						<li>
							<a href="#">Portfolio</a>
						</li>
						<li>
							<a href="#">Blog</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>

					</ul>
				</nav>
			</div>
			<nav class="menu">
				<ul>
					<li>
						<a href="<?php echo $this->config->base_url(); ?>">Home</a>
					</li>
					<li class="drop-down">
						<a href="<?php echo $this->config->base_url() . 'about'; ?>">About</a>
					 
						<div class="mega-menu fadeIn animated">
							<div class="mm-6column">
								<span class="left-images">
									<img src="https://4.bp.blogspot.com/-faF-AemPFUM/U4ryP7pQRsI/AAAAAAAAEvA/fZ-hskCSln4/s1600/Magento%2Bthemes.jpg">
									<p>Test Image </p>
								</span>
								<span class="categories-list">
									<ul>
										<span>Computer</span>
										<li>Desktops</li>
									</ul>
								</span>
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							 <span>TV &amp; Video</span>
								<li>LED TVs
								</li><li>Plasma TVs
								</li><li>3D TVs
							</ul>
						</span>							
							</div>
							<div class="mm-3column">
								<span class="categories-list">
						<ul>
							<span>Car Electronics</span>
							<li>GPS &amp; Navigation</li>
							<li>In-Dash Stereos</li>
						</ul>
					</span>
						</div>
					</div>
			 
					</li>
					<li>
						<a href="#">Services</a>
					</li>
					<li>
						<a href="#">Team</a>
					</li>
					<li>
						<a href="#">Portfolio</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
				</ul>
			</nav>
		</div>