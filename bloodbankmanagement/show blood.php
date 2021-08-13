 
 <button method = "post" action = "" type="button">Availale Blood Quantity</button>
 <?php
include_once('db.php');
	
	echo '<hr/><br/><br/>';
	echo '<h3>Blood Count in Bags by group:</h3>';
	$sql = "SELECT * FROM blood";
	$result = mysqli_query($bd, $sql);
	echo '<table>';
	while($row = mysqli_fetch_array($result)){
		echo '<tr>';
		echo '<td>'.$row['blood_group'].'</td>';
		echo '<td>'.$row['quantity'].'</td>';
		
	}
	echo '</table>';
?>
<br/><a href="index.php"><img src="home.png" height="65" width="65"/></a>