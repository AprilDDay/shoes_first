<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!doctype html>
<html lang="en">
  <head>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
	<!--FOR IMPORTING GOOGLE FONTS -->
		
	<link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet"> <!--raleway -->
		
	<link href="https://fonts.googleapis.com/css?family=Montaga&display=swap" rel="stylesheet"> <!-- Montaga SERIF -->
	
    <title>April's Shoe Universe</title>
				
				<!-- FOR THE STYLING -->
				<style type = "text/CSS">
				
					body {
						font-family: 'Raleway', sans-serif; 
						font-color: #A8D0E6;
						font-size: 20px;
						background-color: #CAEBF2; <!-- "EGGSHELL" = Light blue--> 
					}
	
					h1{
								
						font-family: 'Tangerine', cursive; 
					}

					h2{
						font-family: 'Montaga', serif;
					}
					
					<!-- FOR STYLING BY CLASS -->
					.jumbotron {background-color: #FFF7C0;}
					
					.paragraphCaring{
						font-size: 20px;
						background-color: #F9A7B0;
						align: right;
					}

					.caring {
						background-color: #E7717D;
					}
				
					.youMatter{
						font-size: 100px;
					}
					
				
				<!-- FOR STYLING BY ELEMENT ID-->
									
					#myTable {
					
						background-color: #FFF7C0;
					}
						
				</style>
  </head>

  <body>
  
  <h1 class id="headOne">Welcome to April's Shoe Universe</h1>

	<!-- NAVBAR> -->
	<nav class="navbar navbar-expand-lg navbar-medium bg-medium">
		<a class="navbar-brand" href="HomeReal8.php">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<!-- NAVBAR -->

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="FinalLoginPage4.html">Login<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="CorporateCaring6.html">Corporate Caring</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="shoeTable3.php">Show Me ALL SHOES!</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="FinalAboutUs2.html">About Us</a>
				</li>
			</ul>
		</div>
	</nav>
  
	<div class="container">
	<div class="row">
		<div class="col">
		
<!-- CONNECT TO A DATABASE THAT CONTAINS RELEVANT SITE INFORMATION (EG. PRODUCT INFO) -->

		<?php 


	
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = ""; 
		$dbname = "aprilshoeworldproducts";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//test if connection occurred
		if(mysqli_connect_errno()){
			die("DB connection failed: ".
			mysqli_connect_error().
			"(" . mysqli_connect_errno() .")");
		}
		
		if (!$connection)
		{die('Could not connect: '	.mysqli_error());
		}
		
		//Step 2: Perform Database Query
		
		$result = mysqli_query($connection,"SELECT * FROM SHOES");
		
		//User returned data

		echo "<table border='2' id='myTable'>
		<tr>
		<th>Shoe Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Image</th>
		</tr>";
		
		while($row = mysqli_fetch_array($result))
		{
			

			echo "<tr>";
			echo "<td>" . $row['Shoe Name'] . "</td>";
			echo "<td>" . $row['Description'] ."</td>";
			echo "<td>" . $row['Price'] . "</td>";
			echo "<td>";?> <img src="<?php echo $row['Image']?> height="100" width="100"> <?php echo "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
					



		//4. Release returned data
		
		mysqli_free_result ($result);
		
		//5. Close database connection
		
		mysqli_close($connection);
		
		?>
	</table>
		
		</div>
			<div class="col">				
				<h1 align="center" id="headOne">Here are all our shoes. Enjoy!</h1>
					<p class = "paragraphCaring">Would you like to know our most popular shoe?<br>
					<button type="button" class="btn btn-info" onclick= "ourFaveShoe()">Yes</button>
					<h2 id="faveShoe"></h2>
					</p>
			</div>
	</div>
	
	
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script>

	//USE AN OBJECT
	var faveShoe = {shoeName: "Green Shoe", shoeDescription: "snake print, flat loafer"};
	
	function ourFaveShoe(){
		
		document.getElementById("faveShoe").innerHTML = "Our most popular shoe is " + faveShoe.shoeName +", which is a " + faveShoe.shoeDescription + ".";
	}
	
	
	
  
  </script>
  </body>
</html>