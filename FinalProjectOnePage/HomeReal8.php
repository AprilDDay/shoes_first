<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php   
 session_start();  
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "aprilshoeworldproducts";
	
 $connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["PID"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["PID"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="HomeReal8.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["PID"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["PID"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="HomeReal8.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  

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
					#navBar {background-color: #4ABDAC;}
					
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

  <body onload = "randomSlides(myElement, randomImages);">
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

<!-- ACCESS AND CHANGE HTML ON THE WEB PAGE THROUGH THE DOM -->
		<button class="btn btn-info" onclick="myName()">And your name is?</button>
		<input id="in1">
		<h5 id="result"> </h5>

<!-- FOR IMAGES SLIDESHOW WHICH DISPLAYS A DIFFERENT IMAGE EACH TIEM THE PAGE IS LOADED (AND THIS ONE HAS NO SET ARRAY ROTATION) -->
	<div class="jumbotron jumbotron-fluid" id = "jumbotron">
		<div class="container" id="insideJumbotron">
			<div class="container">
				<div class="row">
					<div class="col">
						<img src = "" id="randomSlideHere" width="400" height="200" border = "5" style = "border-color:white;" />
					</div>
					<div class="col">
						<h1 align="right" class="display-4">Choose Your New <b>SHOES</b></h1>				
						<p id="talk" align="right" class="lead">Choose one or choose them all!</p>
<!-- ACCESS AND CHANGE STYLING THROUGH THE DOM -->
						<button onclick="changeStyling()" type="button" class="btn btn-info" align="right">I like pink.</button><br>
						<button onclick="changeStylingBack()" class="btn btn-info" align="left">...take me back...</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- FOR PRODUCTS DISPLAY ON CARDS== -->
<!-- ALLOW THE USER TO 'PURCHASE' ITEMS FROM THE SITE -->
                
			<div class="card-group">  
                <?php  
                $query = "SELECT * FROM shoes ORDER BY PID ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<form method="post" action="HomeReal8.php?action=add&PID=<?php echo $row["PID"]; ?>">						
						<div class="card border-primary mb-3" style="width: 18rem;">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" /><br />  
                               <div class="card-body">
									<h5 class="card-title"><?php echo $row["Shoe Name"]; ?></h5>
									<h4 class="text-info"><?php echo $row["Description"]; ?></h4>							   
									<p class="card-text" id="card text">$ <?php echo $row["Price"]; ?></p>  
									<input type="text" name="quantity" class="form-control" value="1" />  
									<input type="hidden" name="hidden_name" value="<?php echo $row["Shoe Name"]; ?>" />  
									<input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />  
									<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
								</div>								
					</form>		
					</div>  
                </div>  
			</div>
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
				
<!-- SUMMARY OF THE ORDER, CUSTOMER LOGIN IS ALLOWED BUT NOT REQUIRED BEFORE GETTING THE SUMMARY OF THE ORDER -->
                <h2>Order Summary</h2>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="30%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="HomeReal8.php?action=delete&PID=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total Cost</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br /> 

	<h3><a href="FinalPaymentPage15.html">Buy now</a></h3>

<script>
var randomImages = ["brownShoe.jpg", "redShoe.jpg", "silverShoe.jpg", "snakeShoe.jpg", "greenShoe.jpg", "silverSandal.jpg", "yellowShoe.jpg", "pinkShoe.jpg", "glitterShoe.jpg"];
	
	var myElement = document.getElementById("randomSlideHere");
		
	function randomSlides(myElement, randomImages){
		
		setInterval(function(){
	
		var rand = Math.floor(Math.random() * randomImages.length);
		myElement.src = randomImages[rand];
		
		}, 2000);	
	}
	
	function changeStyling(){
		document.getElementById("jumbotron").style.background = "#FA7C92"; //DEEP PINK	
	}

	function changeStylingBack(){
		document.getElementById("jumbotron").style.background = "#FFF7C0";
	}

	function myName(){
		var name = document.getElementById("in1").value;
		document.getElementById("result").innerHTML="Hello "+ name;
				
	}
	
</script>

</body>  
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
