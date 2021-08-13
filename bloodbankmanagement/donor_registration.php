<style type="text/css">
.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select 
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #2EBC99;
}
</style>
<div class="form-style-6">
<h1>Personal information:</h1>
<form method="post" action="">
  <fieldset>
    
    Name:<br>
    <input type="text" name="firstname" value=""><br>
	Age:<br>
    <input type="text" name="age" value=""><br>
	Blood Group:<br>
    <input type="text" name="bloodgroup" value=""><br>
	Phone number:<br>
    <input type="text" name="phone_number" value=""><br><br><br>
	<input type="submit" value="Submit">
  </fieldset>
 
</form>
</div>
<?php
include_once('db.php');
	if(isset($_POST['age'])){
		
		$firstname = $_POST['firstname'];
		$bloodgroup = $_POST['bloodgroup'];
		$age = $_POST['age'];
		$phone_number = $_POST['phone_number'];
		
		$sql = "INSERT INTO donor(Name,age,blood_group,donation,phone_no) values('$firstname','$age', '$bloodgroup',  0,'$phone_number')";
		$result = mysqli_query($bd, $sql);
		if($result)
		{
			echo 'Donor Registration Successful! ';
			$sql = "select donor_id from donor order by donor_id desc limit 1";
		$r = mysqli_query($bd, $sql);
		
		if($r=mysqli_fetch_array($r))
			$r = $r['donor_id'];
		echo 'Donor id is ';
		echo "{$r}";
		}
			
		else
			echo 'Try agin..';
	}
	
?>
<br/><a href="index.php"><img src="home.png" height="65" width="65"/></a>