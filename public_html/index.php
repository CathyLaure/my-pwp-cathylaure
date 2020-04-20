<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<title>Cathy Tasama</title>
	</head>

	<body>

<!--		Navigation bar code -->
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">
				<img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Welcome <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Me</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown link
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<div>
			<div>
				<h1>Welcome</h1>
			</div>
			<div class="bg-image">
				<img src="images/cathycodes01.JPG" alt="Cathy codes">
			</div>

			<div class="bg-text">
				<h1>I am Cathy Laure Tasama</h1>
				<p>And I'm a Full Stack Web Developer</p>
			</div>
		</div>


		<div class="container mt-3 p-5">
			<div>
				<h1>About Me</h1>
			</div>

			<div class="container-fluid mt-3">
				<div class="container" style="background-color: aliceblue">
					<div class="row pt-5 pb-5">
						<div class="col-md-3 center">
							<img src="images/cathysmiles.jpg" alt="image" width="250" height="300">
						</div>
						<div class="col-md-9">
							<h2>Fun Facts about me</h2>
							<ul>
								<li>I love singing and dancing (mostly while I am alone) :)</li>
								<li>I speak 4 languages and 1 dialect</li>
								<li>I don't know how to swim; I'm willing to learn</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="container mt-5" style="background-color: aliceblue">
					<div class="row pt-5 pb-5">
						<div class="col-md-9">
							<h2>My Stengths and Weaknesses</h2>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
						<div class="col-md-3 center">
						<img src="images/cathycodes02.JPG" alt="image" width="250" height="300">
					</div>
					</div>
				</div>


				<div class="container mt-5" style="background-color: aliceblue">
					<div class="row pt-5 pb-5">
						<div class="col-md-3 center">
							<img src="images/coding$goofing.JPG" alt="image" width="250" height="300">
						</div>
						<div class="col-md-9">
							<h2>Skills</h2>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


		<div>
			<div>
				<h1>Portfolio</h1>
			</div>
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active mt-3">
						<img src="images/cathysmiles.jpg" class="d-block w-100" alt="Smile" width="1200" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="carousel-item mt-3">
						<img src="images/cathycodes02.JPG" class="d-block w-100" alt="CathyCodes" width="1200" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item mt-3">
						<img src="images/coding$goofing.JPG" class="d-block w-100" alt="coding$goofing" width="1200" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h5>Third slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="container">
			<h1>Contact Me</h1>
			<div class="form-wrapper">
				<form>
					<div>
						<label for="name">Name</label>
						<input type="text" name="name" id="name" />
					</div>

					<div>
						<label for="emailEmail">Email</label>
						<input type="email" name="email" id="email" />
					</div>

					<div>
						<label for="subject">Subject</label>
						<input type="text" name="subject" id="subject" />
					</div>

					<div>
						<label for="message">Message</label>
						<textarea name="message" id="message" cols="30" rows="10" maxlength="1000" placeholder="1000 characters max"></textarea>
					</div>

					<button type="reset">Reset</button>
					<button type="submit">Send!</button>
				</form>
			</div>
		</div>

		<footer>
			<div class="container-fluid p-4">
				My contact links will be found here
			</div>
		</footer>

	</body>

</html>