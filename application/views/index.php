<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super Folio</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
	<link rel="preload" as="style"
		href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print"
		onload="this.media='all'" />
	<noscript>
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
	</noscript>
	<link href="<?php echo base_url();?>assets/bootstrap_user/css/font-awesome/css/all.min.css?ver=1.2.0"
		rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap_user/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0"
		rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap_user/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap_user/css/aos.css?ver=1.2.0" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap_user/css/main.css?ver=1.2.0" rel="stylesheet">
	<noscript>
		<style type="text/css">
			[data-aos] {
				opacity: 1 !important;
				transform: translate(0) scale(1) !important;
			}

		</style>
	</noscript>
</head>
<body id="top">
<?php foreach($home as $hm):?>
				<?php foreach($ssmd as $smd):?>
				<?php foreach($abt as $abt):?>
				<?php foreach($contact as $cont):?>
	<header class="bg-light">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
			<div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Super Folio</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation"><span
						class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto me-2">
						<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
						<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
						<li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		</header>
	<div class="page-content">
		<div id="content">
			<header>
				<div class="cover bg-light">
					<div class="container px-3">
						<div class="row">
							<div class="col-lg-6 p-2"><img class="img-fluid"
									src="<?php echo base_url();?>assets/bootstrap_user/images/illustrations/hello3.svg"
									alt="hello" /></div>
							<div class="col-lg-6">
								<div class="mt-5">
									<p class="lead text-uppercase mb-1"><?= $hm['tagline']; ?></p>
									<h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">
										<?= $hm['judul']; ?></h1>
									<p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">
										<?= $hm['paragraf']; ?></p>
									<div class="social-nav" data-aos="fade-up" data-aos-delay="200">
										<nav role="navigation">
											<ul class="nav justify-content-left">
												<li class="nav-item"><a class="nav-link" href="<?= $smd['facebook']; ?>"
														title="Facebook"><i class="fab fa-facebook"></i><span
															class="menu-title sr-only">Facebook</span></a></li>
												<li class="nav-item"><a class="nav-link"
														href="https://www.instagram.com/templateflip"
														title="Instagram"><i class="fab fa-instagram"></i><span
															class="menu-title sr-only">Instagram</span></a></li>
												<li class="nav-item"><a class="nav-link"
														href="https://www.linkedin.com/" title="LinkedIn"><i
															class="fab fa-linkedin"></i><span
															class="menu-title sr-only">LinkedIn</span></a></li>
												<li class="nav-item"><a class="nav-link"
														href="https://www.behance.net/templateflip" title="Behance"><i
															class="fab fa-behance"></i><span
															class="menu-title sr-only">Behance</span></a></li>
											</ul>
										</nav>
									</div>
									<div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a
											class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In
											Touch <i class="fas fa-arrow-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wave-bg"></div>
			</header>
			<div class="section pt-4 px-3 px-lg-4" id="about">
				<div class="container-narrow">
					<div class="row">
						<div class="col-md-6">
							<h2 class="h4 my-2">Hello! I’m Walter Patterson.</h2>
							<p>I am passionate about UI/UX design and Web Design. I am a skilled front-end developer and
								master of graphic design tools such as Photoshop and Sketch. I am a quick learner and a
								team worker that gets the job done. I can easily capitalize on low hanging fruits and
								quickly maximize timely deliverables for real-time schemas.</p>
							<div class="row mt-3">
								<div class="col-sm-2">
									<div class="pb-1">Age:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">28</div>
								</div>
								<div class="col-sm-2">
									<div class="pb-1">Email:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">walter@company.com</div>
								</div>
								<div class="col-sm-2">
									<div class="pb-1">Skype:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">username@skype.com</div>
								</div>
								<div class="col-sm-2">
									<div class="pb-1">Phone:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">+0718-111-0011</div>
								</div>
								<div class="col-sm-2">
									<div class="pb-1">Address:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">New Delhi, India</div>
								</div>
								<div class="col-sm-2">
									<div class="pb-1">Staus:</div>
								</div>
								<div class="col-sm-10">
									<div class="pb-1 fw-bolder">Available</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
								class="avatar img-fluid mt-2"
								src="<?php echo base_url();?>assets/bootstrap_user/images/avatar.jpg" width="400"
								height="400" alt="Walter Patterson" /></div>
					</div>
				</div>
			</div>
			<div class="section px-2 px-lg-4 pt-5" id="portfolio">
				<div class="container">
					<div class="text-center mb-5">
						<h2 class="marker marker-center">Portfolio </h2>
					</div>
					<div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
						<div class="grid-sizer"></div>
						<div class="grid-item"><a href="https://dribbble.com">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/1-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/1.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">Web Design</h4>
										<div>Dribbble.com</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://github.com">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/2-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/2.jpg"
										data-caption="Example of an optional caption." />
									<figcaption>
										<h4 class="h5 mb-0">Web Development</h4>
										<div>GitHub.com</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://soundcloud.com/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/3-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/3.jpg"
										data-caption="Example of an optional caption." />
									<figcaption>
										<h4 class="h5 mb-0">Audio Mixing</h4>
										<div>Soundcloud.com</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://www.adobe.com/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/4-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/4.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">Video Editing</h4>
										<div>Adobe After Effects</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://www.adobe.com/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/5-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/5.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">Photography</h4>
										<div>Adobe Photoshop</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://www.android.com/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/6-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/6.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">App Development</h4>
										<div>Android</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://flutter.dev/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/7-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/7.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">App Design</h4>
										<div>Flutter</div>
									</figcaption>
								</figure>
							</a></div>
						<div class="grid-item"><a href="https://flutter.dev/">
								<figure class="portfolio-item"><img
										src="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/8-small.png"
										data-bp="<?php echo base_url();?>assets/bootstrap_user/images/portfolio/8.jpg" />
									<figcaption>
										<h4 class="h5 mb-0">App Development</h4>
										<div>Flutter</div>
									</figcaption>
								</figure>
							</a></div>
					</div>
				</div>
			</div>
			<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
				<div class="container-narrow">
					<div class="text-center mb-5">
						<h2 class="marker marker-center">Contact Me</h2>
					</div>
					<div class="row">
						<div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
							<div class="bg-light my-2 p-3 pt-2">
								<form action="https://formspree.io/your@email.com" method="POST">
									<div class="form-group my-2">
										<label for="name" class="form-label fw-bolder">Name</label>
										<input class="form-control" type="text" id="name" name="name" required>
									</div>
									<div class="form-group my-2">
										<label for="email" class="form-label fw-bolder">Email</label>
										<input class="form-control" type="email" id="email" name="_replyto" required>
									</div>
									<div class="form-group my-2">
										<label for="message" class="form-label fw-bolder">Message</label>
										<textarea class="form-control" style="resize: none;" id="message" name="message"
											rows="4" required></textarea>
									</div>
									<button class="btn btn-primary mt-2" type="submit">Send</button>
								</form>
							</div>
						</div>
						<div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
							<div class="mt-3 px-1">
								<div class="h5">Let’s talk how I can help you!</div>
								<p>If you like my work and want to avail my services then drop me a message using the
									contact form. </p>
								<p>Or get in touch using my email, skype or my contact number.</p>
								<p>See you!</p>
							</div>
							<div class="mt-53 px-1">
								<div class="row">
									<div class="col-sm-2">
										<div class="pb-1">Email:</div>
									</div>
									<div class="col-sm-10">
										<div class="pb-1 fw-bolder">walter@company.com</div>
									</div>
									<div class="col-sm-2">
										<div class="pb-1">Skype:</div>
									</div>
									<div class="col-sm-10">
										<div class="pb-1 fw-bolder">username@skype.com</div>
									</div>
									<div class="col-sm-2">
										<div class="pb-1">Phone:</div>
									</div>
									<div class="col-sm-10">
										<div class="pb-1 fw-bolder">+0718-111-0011</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="pt-4 pb-4 text-center bg-light">
				<div class="container">
					<div class="my-3">
						<div class="h4">Walter Patterson</div>
						<p>Web Developer & Mobile Application Developer</p>
						<div class="social-nav">
							<nav role="navigation">
								<ul class="nav justify-content-center">
									<li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
											title="Twitter"><i class="fab fa-twitter"></i><span
												class="menu-title sr-only">Twitter</span></a></li>
									<li class="nav-item"><a class="nav-link"
											href="https://www.facebook.com/templateflip" title="Facebook"><i
												class="fab fa-facebook"></i><span
												class="menu-title sr-only">Facebook</span></a></li>
									<li class="nav-item"><a class="nav-link"
											href="https://www.instagram.com/templateflip" title="Instagram"><i
												class="fab fa-instagram"></i><span
												class="menu-title sr-only">Instagram</span></a></li>
									<li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/"
											title="LinkedIn"><i class="fab fa-linkedin"></i><span
												class="menu-title sr-only">LinkedIn</span></a></li>
									<li class="nav-item"><a class="nav-link" href="https://www.behance.net/templateflip"
											title="Behance"><i class="fab fa-behance"></i><span
												class="menu-title sr-only">Behance</span></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="text-small text-secondary">
						<div class="mb-1">&copy; Super Folio. All rights reserved.</div>
						<div>
							<!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design
							- <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i
					class="fas fa-angle-up fa-x"></i></span></a></div>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/BigPicture.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/purecounter.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/aos.min.js?ver=1.2.0"></script>
	<script src="<?php echo base_url();?>assets/bootstrap_user/scripts/main.js?ver=1.2.0"></script>
	<?php endforeach;?>
		<?php endforeach;?>
		<?php endforeach;?>
		<?php endforeach;?>
</body>

</html>