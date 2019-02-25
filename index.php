<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <title>Svoboda Diaries Word Search</title>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-12 col-lg-4"></div>
    <div class="col-12 col-lg-4">
    	<center>
    		<h1>Svoboda Diaries</h1>
    		<h2>Word Search</h2>
    	</center>
    	<br>
    	<br>
    	<form class="form-inline" action="index.php" method="post">
    	<div class="row">
    		<div class="col-8">				
				<div class="form-group">
				<input type="text" class="form-control" placeholder="word..." name="word">
				</div>
		</div>
		<div class="col-4">
			<button type="submit" class="btn btn-primary">Search</button>
		</div>
		</div>
		</form>
		<br>
		<div style="border: 5px solid black;">
			<p class="my-2 mx-2">
<?php
$word = $_POST["word"];
$sql = "SELECT columnName FROM tableName WHERE columnName LIKE '$word' ORDER BY columnName ASC";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
         echo $row["columnName"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
			</p>
		</div>
		<br>
    </div>
    <div class="col-12 col-lg-4">
    	<div style="border: 5px solid black;" class="my-2 py-2 px-2">
		<p><center><strong>Example Searches</strong></center></p>
		<table class="table table-borderless">
		  <tbody>
		    <tr>
		      <td>svo%</th>
		      <td>Finds any values that start with "svo"</td>
		    </tr>
		    <tr>
		      <td>%oda</th>
		      <td>Finds any values that end with "oda"</td>
		    </tr>
		    <tr>
		      <td>%obo%</th>
		      <td>Finds any values that have "obo" in any position</td>
		    </tr>
		    <tr>
		      <td>s%a</th>
		      <td>Finds any values that starts with "s" and ends with "a"</td>
		    </tr>
		    <tr>
		      <td>s_o%</td>
		      <td>Finds any values that has "s" at the first position and and "o" at the third position
		    <tr>
		  </tbody>
		</table>
		<strong>Please Note:</strong>
		<p><strong>%</strong> : The percent sign represents zero, one, or multiple characters</p>
    	<p><strong>_</strong> : The underscore represents a single character</p>
		</div>
		<br>
		<p style="text-align: center;"><a href="http://depts.washington.edu/svobodad/">Svoboda Diaries Project Website</a></p>
    </div>
  </div>
</div>
  </body>
</html>
