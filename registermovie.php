
<?php 
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "imdb");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
      
    $movieid=$_POST['mid'];
    $moviepos=$_POST['lolest'];
	$moviename=$_POST['mname'];
	$movieiddes=$_POST['movied'];
	$movieactors=$_POST['moviea'];
	$movieproducers=$_POST['moviep'];
	$movielanguage=$_POST['mlanguage'];
	$movielength=$_POST['mlength'];
	$movieratings=$_POST['mratings'];

	
      //$sql="INSERT INTO mobie_db (image,text) VALUES ('$movieid','$moviepos','$moviename','$movieiddes','$movieactors','$movieproducers','$movielanguage','$movielength','movieratings')";




   


   










  	// Get image name
//  	$image = $_FILES['image']['name'];
  	// Get text
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory

  	$sql = "INSERT INTO movie_db1  VALUES ('$movieid','$moviepos','$moviename','$movieiddes','$movieactors','$movieproducers','$movielanguage','$movielength','$movieratings')";
  	// execute query
  	$query_run=mysqli_query($db, $sql);
    if($query_run)
    {
        echo "<script>alert('registered successfuly')</script>";
    }
    else
    {
        echo "<script>alert('error')</script>";
    }
  
  }
//  $result = mysqli_query($db, "SELECT * FROM images");
?>

<!DOCTYPE html>

<html>
<head>
	<title>movie review app</title>
</head>
<body>
<form  action="registermovie.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="lolest" style="display:none" required></input>
    <h1>MOVIE APP DELTA-X</h1>
	Enter movie id:<input type="text" name="mid"><br>
	Upload poster:<input type="file" onchange="getimagesource(event)" name="lolest"><br>
	Enter movie movie name:<input type="text" name="mname"><br>

	Description:<textarea name="movied" cols="50" rows="5" required></textarea><br>

	Actors:<textarea name="moviea" cols="30" rows="3"></textarea><br>


	Producers:<textarea name="moviep" cols="30" rows="3"></textarea><br>

	Language:<input type="text" name="mlanguage"><br>
	Movie Length:<input type="text" name="mlength"><br>
	Ratings:<input type="text" name="mratings"><br>
	<input type="submit" name="submit" value="upload">

</form>
<script>
function getimagesource(event) {
            
                var input=event.target;
                // Use FileReader to get file
              
                 var reader = new FileReader();
                
               // alert(event.target.result);
                 reader.onload= function(event)
                 {
                     
                  document.getElementsByName("lolest")[0].value=reader.result;
                     alert(document.getElementsByName("lolest")[0].value);
                 };
    reader.readAsDataURL(input.files[0]);
                    
        }
</script>
</body>  
</html>












