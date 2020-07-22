<?php
echo $_GET['name'];
$servername = "localhost";
$username = "root";
$password = "purvaisha27";
$dbname = "FoodBlog";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection Failed" . $conn->connect_error);
}

?>

<html>
	<head>
		<title>Blog Page | Foodiengineers</title>
		<link rel="stylesheet" type="text/css" href="FoodBlogBlogPageStylesheet.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
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
		<section id="team">
			<div class="container">
				<h1>Food name</h1>
			</div>
		</section>

		<script>image = localStorage.getItem("storage");</script>
		<div class="col-md-3 profile-pic text-center">
			<div class="img-box">
				<img src="image" class="center">
			</div>
		</div>

		<div class="text">
		
		Cacio e Pepe \cah-cho-eh-pehpeh\ is a pasta dish that originated in Rome and literally means “cheese and pepper”.

		The Romans are renowned for their powerful ancient empire, architectural wonders, gelato and pasta! Amongst the many pasta recipes in Rome, carbonara and amatriciana have found more popularity around the world, but a few know that cacio e pepe is where it all began. If this is the first time you’ve ever heard about cacio e pepe, you’re not alone, this breakthrough dish has recently gained prominence in Mumbai and we’re here to tell you why it needs to be on your plate right away.

		</div>
	</body>
</html>

<?php
echo $_GET['name'];
$sql="select Blog from Blogs";
$result= $conn->query($sql);


if($result-> num_rows > 0)
{

	while($row=$result->fetch_assoc())
	{		
	
		echo   $row["Blog"];
	}
}

else
{
	echo "0 results";
}

$conn->close();
?>



