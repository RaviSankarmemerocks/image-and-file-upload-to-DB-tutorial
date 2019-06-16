
<?php
$db=mysqli_connect("localhost","root","","imdb") or die(mysqli_error());


$output="";
if(isset($_POST['search_s'])){

$searchq=$_POST['search_s'];

$search_q=preg_replace("#[^0-9a-z]#i", "", $searchq);

$query=mysqli_query("SELECT * FROM movie_db WHERE movie_name LIKE '%$searchq%'") or die("cant find");
$count=mysqli_num_rows($query);

if($count==0){
	$output="no result";

}else{
while($row=mysqli_fetch_assoc($results))
{
    $image=$row['movie_pos'];
	echo "<div id='sec'>";
	echo "<h3>".$row['movie_id']."</h3>";
	echo "<img src='$image'>";
	//echo "<p>".$row['movie_pos']."</p>";
	echo "<h2>".$row['movie_name']."</h2>";
	echo "<p>".$row['movie_des']."</p>";
	echo "<p>".$row['actors']."</p>";
	echo "<p>".$row['producers']."</p>";
	echo "<p>".$row['language']."</p>";
	echo "<p>".$row['length']."</p>";
	echo "<p>".$row['ratings']."</p>";
	echo "</div>";
}

}



}






  ?>


<!DOCTYPE html>
<html>
<head>
	<title>movie db</title>
</head>
<body>
	<form action ="search.php">
		<input type="text" name="search_text" placeholder="search movie name">
		<input type="submit" name="search_s" value="search">

	</form>
</body>
</html>