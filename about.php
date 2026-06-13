<?php include 'function.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About - Wisdom Park International Schoool (CBSE)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="favicon" rel="shortcut icon" type="image/png" href="images/fav-icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header-reponsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
	<style>
		.wisdom-para {
			padding-top: 50px;
		}
		.wisdom-about-section-2 .wisdom-para {
			padding-top: 50px;
		}

		.wisdom-about-section h1 {
			margin: 0;
			font-size: 32px;
			font-weight: 700;
			line-height: 1.2;
			color: #12395c;
			font-family: 'Outfit', sans-serif;
			/* transform: rotate(-8deg); */
			display: inline-block;
			padding-bottom: 18px;
		}
		.wisdom-about-section-2 h1 {
			margin: 0;
			font-size: 32px;
			font-weight: 700;
			line-height: 1.2;
			color: #12395c;
			font-family: 'Outfit', sans-serif;
			/* transform: rotate(-8deg); */
			display: inline-block;
			padding-bottom: 18px;
		}

		.wisdom-about-section a.btn {
			color: #fff;
			font-weight: 700;
			background: #003966;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 20px;
			padding-right: 20px;
			border-radius: 20px;
		}
		.wisdom-about-section-2 a.btn {
			color: #fff;
			font-weight: 700;
			background: #003966;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 20px;
			padding-right: 20px;
			border-radius: 20px;
		}
	</style>
</head>

<body>
	<?=template_header()?>

	<section class="wisdom-about-section">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-12">

					<div class="wisdom-about-card-wrap" data-aos="fade-right">

						<!-- Top Heading -->
						<div class="wisdom-about-card-top">
							<span class="wisdom-about-line"></span>

							<h2 class="wisdom-about-title">
								About Us
							</h2>
						</div>

						<!-- Image Card -->
						<div class="wisdom-about-image-card">
							<img src="images/about-1.jpg" alt="Wisdom School">
						</div>

						<!-- Bottom Text -->
						<div class="wisdom-about-bottom">
							<h4>
								Learn | Play | Explore | Lead
							</h4>
						</div>

					</div>

				</div>
				<div class="col-md-6 col-sm-12">
					<div class="wisdom-para" data-aos="fade-left">
						<h1>Building Bright Futures Together</h1>
						<p class="wisdom-p">Wisdom Park International School is a progressive educational institution
							committed to nurturing young minds through a balanced blend of academic excellence and
							value-based learning.</p>
						<p class="wisdom-p">The school provides a dynamic and inclusive environment where students
							are encouraged to explore their potential, develop critical thinking skills, and grow into
							confident individuals.</p>
						<p class="wisdom-p">With a strong focus on overall development, the institution integrates
							modern teaching methodologies to create meaningful learning experiences. The school aims to
							shape responsible, compassionate, and future-ready citizens who are prepared to succeed in
							an ever-evolving world.</p>
						<a href="contact.php" class="btn">Contact Us</a>
					</div>


				</div>

			</div>
		</div>
	</section>
	<section class="wisdom-about-section-2">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-12">
					<div class="wisdom-para" data-aos="fade-up">
						<h1>CBSE Academic Information Hub</h1>
						<p class="wisdom-p">Wisdom Park International School is affiliated with the Central Board of
							Secondary Education (CBSE), Affiliation No. 1930757, ensuring a nationally recognized and
							standardized curriculum.</p>
						<p class="wisdom-p">This affiliation reflects the school’s commitment to maintaining
							high academic standards and effective continuous assessment practices.</p>
						<p class="wisdom-p">The CBSE framework helps students develop strong conceptual understanding
							and analytical skills through a well-structured learning approach. It also prepares them for
							higher education opportunities and competitive environments at both national and global
							levels.</p>
						<a href="academics.php" class="btn">Explore Academics Overview</a>
					</div>


				</div>

				<div class="col-md-6 col-sm-12">

					<div class="wisdom-about-card-wrap" data-aos="fade-down">

						<!-- Top Heading -->
						<div class="wisdom-about-card-top">
							<span class="wisdom-about-line"></span>

							<h2 class="wisdom-about-title">
								CBSE Details
							</h2>
						</div>

						<!-- Image Card -->
						<div class="wisdom-about-image-card">
							<img src="images/about-2.webp" alt="Wisdom School">
						</div>

						<!-- Bottom Text -->
						<div class="wisdom-about-bottom">
							<h4>
								Study | Grow | Achieve | Inspire
							</h4>
						</div>

					</div>

				</div>

			</div>
		</div>
	</section>
	<section class="wisdom-video-section" data-aos="fade-down"
		style="background-image: url('images/bg.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;">



	</section>

	<section class="vision-mission" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-md-6 c1">
					<h2>Our Vision</h2>
					<p>Fostering progressive thinkers who create positive social change through knowledge,
						understanding, leadership, and innovation.</p>
				</div>
				<div class="col-md-6 c2">
					<h2>Core Values</h2>
					<p>Discipline, courage, and excellence shape confident, responsible learners and build the strong
						foundation of Wisdom Park School.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 c3">
					<h2>Our Mission</h2>
					<p> Nurturing talents to become independent, responsible, and resourceful individuals who contribute
						to the nation and the world.</p>
				</div>
				<div class="col-md-6 c4">
					<h2>Motto</h2>
					<p>“Discipline, courage, and excellence shape confident, responsible learners and build the strong
						foundation of Wisdom Park School.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="history">
		<div class="container">
			<div class="row">
				<div class="col-md-6" data-aos="fade-right">
					<img src="images/history.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-6" data-aos="fade-left">
					<h6 class="sub-title">History & Establishment</h6>
					<h1>The History of Our Establishment</h1>
					<p class="para">Wisdom Park International School was established with a vision to provide quality
						education enriched with a global perspective. Since its inception, the school has steadily
						evolved into a vibrant center of learning supported by modern infrastructure and a committed
						team of educators.</p>
					<p class="para">
						The institution has built a strong reputation for nurturing discipline, innovation, and
						character development among students. Its student-focused approach and academic excellence have
						made the school a trusted choice for parents seeking holistic education.
					</p>
				</div>
			</div>
		</div>

	</section>
	<section class="school">
		<div class="container">
			<div class="row">

				<div class="col-md-6" data-aos="fade-right">
					<h6 class="sub-title">School Philosophy / Approach</h6>
					<h1>Our Philosophy & Learning Approach</h1>
					<p class="para">The school follows a holistic and learner-focused approach where every child is
						given equal opportunity to grow academically, socially, and emotionally. Through activity-based
						learning, multiple intelligences strategies, and experiential methods, students actively engage
						in the learning process.</p>
					<p class="para">
						The approach emphasizes conceptual clarity, creativity, and real-world application in everyday
						learning. At the same time, the school nurtures strong moral values, confidence, and a deep
						sense of responsibility among students.
					</p>
				</div>
				<div class="col-md-6" data-aos="fade-left">
					<img src="images/school.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>

	</section>

	<?=template_footer()?>
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>

</html>