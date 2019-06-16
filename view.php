<?php 

$db=mysqli_connect("localhost","root","","imdb");

$sql="SELECT * FROM movie_db1";
$results=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($results))
{
	echo "<div id='sec'>";
	echo "<h3>".$row['movie_id']."</h3>";
	//echo "<img src='".base64_decode($row['movie_pos'])."'>";
	//echo "<img src="'data:image/jpeg;base64,'.base64_encode($row['movie_pos']).''"/>";



	 echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['movie_pos'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  








	//echo "<img src="'data:image/jpeg;base64,/9j/4AAQSkZJRgABA...'.$row['movie_pos']." />";
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



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		movie database
	</title>
</head>
<body>
    
</body>
</html>