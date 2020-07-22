<html>
	<head>
		<title>Home Page | Foodiengineers</title>
		<link rel="stylesheet" href="FoodBlogHomePageStylesheet.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<!----Navigation Bar---->
		<section id="NavigationBar">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="#"><img src="Images/imageedit_1_2981665004.png"><font color="white">FOODIENGINEERS</font></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogHomePage.php">HOME</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogSortedBlogsPage.php">EAT</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogSortedBlogsPage.php">DRINK</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogCategoriesPage.php">CATEGORIES</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogContactPage.php">CONTACT</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="FoodBlogAboutUsPage.php">ABOUT US</a>
				  </li>
				</ul>
			  </div>
			</nav>
		</section>
		
		<!----Slider---->
		<div id="slider">
			<div id="headerSlider" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
				<li data-target="#headerSlider" data-slide-to="1"></li>
				<li data-target="#headerSlider" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="Images/burger2.jpg" class="d-block img-fluid">
				  <div class="carousel-caption">
				  	<h5>Best places for food from Pune</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="Images/burger.jpg" class="d-block img-fluid">
				  <div class="carousel-caption">
				  	<h5>All events in the city</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="Images/fries.jpg" class="d-block img-fluid">
				  <div class="carousel-caption">
				  	<h5>Amazing Blogs</h5>
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	
	
<!----Top Blogs---->
<section id ="Food">
	<div class="container">
		<h1>TOP BLOGS</h1>
		<div class="row">
			
			<div class="coloumn">
				<div class="imgage-box" >
					<img src="Images/pic1.jpg"  onclick=" Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php?id=1&name=$(this).attr('src')';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>
						
				</ul>
			</div>
		</div>
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic2.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
		
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic4.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic1.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic2.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
		
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic4.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic1.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>
						
				</ul>
			</div>
		</div>
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic2.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
		
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic4.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic1.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>
						
				</ul>
			</div>
		</div>
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic2.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
		
		<div class="coloumn">
				<div class="imgage-box">
					<img src="Images/pic4.jpg" onclick="Javascript:window.location.href = 'http://localhost/FoodBlogBlogPage.php';" alt="food" class="image">
					<ul>
						<div class="overlay">foodname</div>

				</ul>
			</div>
		</div>
	</div>
</div>
	
</section>

<!----top reviews---->
<section id="price">
<div class="container">
	
	<div class="row">
	<div class="col-md-3">
	
		<div class="single-price">
			<div class="price-head">
				<h4>Crispy Stuffed Packets</h4>
			</div>
			<div class="image-box">
			<div class="thumbnail">
				<a href="C:\Users\Rutuja\Desktop\samosa.jpg">
				<img class="img-responsive" src="Images/samosa.jpg" alt="Samosa">
				<div class="caption">
				 <p>Delicious</p>
				</div>
				</a>
			</div>
			</div>
			
			<div class="star-rating">
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</div>
			<div class="perosn-name">
			<h5>-by</h5>
			<h5>Nidhee Patil</h5>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
	
		<div class="single-price">
			<div class="price-head">
				<h4>Pani Puri</h4>
			</div>
			<div class="image-box">
			<div class="thumbnail">
				<a href="C:\Users\Rutuja\Desktop\panipuri.jpg">
				<img class="img-responsive" src="Images/panipuri.jpg" alt="Samosa">
				<div class="caption">
				 <p>Mouth Watering</p>
				</div>
				</a>
			</div>
			</div>
			
			<div class="star-rating">
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</div>
			<div class="perosn-name">
			<h5>-by</h5>
			<h5>Rutuja Kulkarni</h5>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
	
		<div class="single-price">
			<div class="price-head">
				<h4>Grilled Corn Toast</h4>
			</div>
			<div class="image-box">
			<div class="thumbnail">
				<a href="C:\Users\Rutuja\Desktop\sandwich.jpg">
				<img class="img-responsive" src="Images/sandwich.jpg" alt="Samosa">
				<div class="caption">
				 <p>Must Try</p>
				</div>
				</a>
			</div>
			</div>
			
			<div class="star-rating">
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</div>
			<div class="perosn-name">
			<h5>-by</h5>
			<h5>Purva Mundlye</h5>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
	
		<div class="single-price">
			<div class="price-head">
				<h4>Half Fried Eggs</h4>
			</div>
			<div class="image-box">
			<div class="thumbnail">
				<a href="C:\Users\Rutuja\Desktop\egg.jpg">
				<img class="img-responsive" src="Images/egg.jpg" alt="Samosa">
				<div class="caption">
				 <p>Really Good</p>
				</div>
				</a>
			</div>
			</div>
			
			<div class="star-rating">
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</div>
			<div class="perosn-name">
			<h5>-by</h5>
			<h5>Himanshu Palve</h5>
			</div>
		</div>
	</div>
	
	</div>
</div>
</section>

<!----team members---->
<section id="team">
	<div class="container">
		<h1>OUR TEAM</h1>
		<div class="row">
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
					<img src="Images/nidheeteam.jpg">
					<ul>
						<a href="#"><i class="fa fa-facebook"></i><li></li></a>
					<a href="#"><i class="fa fa-twitter"></i><li></li></a>
				</ul>
			</div>
			<h2>Nidhee Patil</h2>
			<h3>Web Developer</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
					<img src="Images/rututeam.jpg">
					<ul>
						<a href="#"><i class="fa fa-facebook"></i><li></li></a>
					<a href="#"><i class="fa fa-twitter"></i><li></li></a>
				</ul>
			</div>
			<h2>Rutuja Kulkarni</h2>
			<h3>Web Developer</h3>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

		</div>

		<div class="col-md-3 profile-pic text-center">

				<div class="img-box">
					<img src="Images/purva.jpg">
					<ul>
						<a href="#"><i class="fa fa-facebook"></i><li></li></a>
					<a href="#"><i class="fa fa-twitter"></i><li></li></a>
				</ul>
			</div>
			<h2>Purva Mundlye</h2>
			<h3>Web Developer</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
</div>
</section>
	</body>
</html>
