<?php include("header.php"); ?>
<body id="myDIV">
<div class="container-fluid">

	<h1>Yarn <b>Creations</b></h1>

	<nav class="navbar navbar-dark bg-primary navbar-expand-sm">

		<ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home </a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="knit.php">Knit</a>
	      </li>

	      <li class="nav-item active">
	        <a class="nav-link" href="crochet.php">crochet<span class="sr-only">(current)</span></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="sew.php">sew</a>
	      </li>


	    </ul>
	</nav>

</div>

	<div class="row">
		<div class="col-md-12">

			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/images/crochet1/grannySquare1.jpg" class="img-responsive img-fluid" alt="bears">
								</div>
								<div class="thumb-content">
									<h4>Granny Square</h4>

								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/images/crochet1/grannySquares.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Rainbow Granny Square</h4>

								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/images/crochet1/rudolphHead.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Rudoph Head</h4>

								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/images/crochet1/santaHead.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Santa Head</h4>

								</div>
							</div>
						</div>
					</div>
				</div>
						<div class="item carousel-item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="/images/crochet1/cactus.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Cactus</h4>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="/images/crochet1/duck.jpeg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Duck</h4>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="/images/crochet1/octopus.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Octopus</h4>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="/images/crochet1/spidey.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>Spidey</h4>

										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</body>
</html>
<?php include("footer.php"); ?>
