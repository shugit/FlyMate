



<?php
	if(isset($_POST['submit'])){
		
		//storage variables
		$qq = $_POST['QQ'];
		$flight1 = $_POST['flight1'];
		$date1 = $_POST['date1'];
		$flight2 = $_POST['flight2'];
		$date2 = $_POST['date2'];
		$destination = $_POST['destination'];
		$gender = $_POST['gender'];
		$name = $_POST['name'];
		
		if($date2 == ''){
			$dtae2 = NULL;
		}
		if($date1 == ''){
			$dtae1 = NULL;
		}
		//TODO check if no empty left
		$dbc = mysqli_connect('localhost','root','123','flymate') or die ('ERROR connecting to MySQL');
		//$query = "INSERT INTO `flymate`.`booked` (`QQ`, `flight_number_1`,`date1`, `flight_number_2`, `date2`, `gender`, `destination`, `name`) VALUES ('$qq', '$flight1', '$date1', '$flight2','$date2', '$gender', '$destination', '$name')";
		
		$query = "INSERT INTO  `flymate`.`booked` (
`id` ,
`QQ` ,
`flight_number_1` ,
`date1` ,
`flight_number_2` ,
`date2` ,
`gender` ,
`destination` ,
`name`
)
VALUES (
NULL ,  '$qq', '$flight1' , '$date1' , '$flight2' , NULL , '$gender' , '$destination' , '$name'
)";
		//INSERT INTO `flymate`.`booked` (`id`, `QQ`, `flight_number_1`, `flight_number_2`, `date`, `gender`, `destination`, `name`) VALUES (NULL, '121231', 'fef', 'segr', '2013-07-30', '1', '2', 'rdgsr');
		//echo "gender= $gender <p> destination = $destination</p>";
		//echo "name = $name <p> flightNumber1 = $flight1<p>";
		
		
		mysqli_query($dbc, $query) or die('ERROR querying database');
		mysqli_close($dbc);	
		echo 'successfully launched';
		$output_form = true;
	} else {
		$output_form = true;
	}


if($output_form==true){
	?>
<title>FlyMate beta v0.1</title>
    <table width="100%" border="1">
	  <tr>
	    <td colspan="3"><p>Please Fill in following form</p>
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>" >
  <table width="100%" border="1"  bgcolor="#CCFFFF">
    <tr>
      <td width="73">QQ: </td>
      <td width="334"><input type="number" name="QQ" id="QQ">
*must fill in #numbers only</td>
    </tr>
    <tr>
      <td><label for="flight1">Flight Number 1:</label></td>
      <td><input type="text" name="flight1" id="flight1">
* #flight ID eg.CA110</td>
    </tr>
    <tr>
      <td><label for="date1">Flight 1 Date:</label></td>
      <td><input type="date" name="date1" id="date1">
* #flight start date,formate year-month-day eg.2013-07-30</td>
    </tr>
    <tr>
      <td><label for="flight2">Flight Number 2:</label></td>
      <td><input type="text" name="flight2" id="flight2">
#if direct flight, then no need to fill </td>
    </tr>
    <tr>
      <td><label for="date2">Flight 2 Date</label></td>
      <td><input type="date" name="date2" id="date2"></td>
    </tr>
    <tr>
      <td><label for="destination">Destination</label></td>
      <td><select name="destination" id="destination">
        <option value="1" selected="SELECTED">MacquarieUni</option>
          <option value="2">UNSW</option>
          <option value="3">USydney</option>
          <option value="4">UTS</option>
          <option value="5">MelbourneUni</option>
          <option value="6">RMIT</option>
          <option value="7">MonashUni</option>
          <option value="8">LaTrobe</option>
          <option value="9">Deakin</option>
          <option value="0">Other</option>
      </select></td>
    </tr>
    <tr>
      <td><label for="gender3">Gender:</label></td>
      <td><select name="gender" id="gender">
        <option value="0">Female</option>
          <option value="1">Male</option>
      </select></td>
    </tr>
    <tr>
      <td><label for="name">Name:</label></td>
      <td><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
    </tr>
</table>
</form>
<p>
<p>
  <?php
}
?>
  
  <?php


$dbc2 = mysqli_connect('localhost','root','123','flymate') or die ('ERROR connecting to MySQL');
$query2 = "SELECT * FROM `flymate`.`booked`";
$result2 = mysqli_query($dbc2, $query2) or die ('ERROR querying database when fetching');
$count = 0;

echo '<tr bgcolor="#CCCCCC"><td colspan="3">DateBase:<p>';
while($row = mysqli_fetch_array($result2)){
	$qq = $row['QQ'];
	$flight1 = $row['flight_number_1'];
	$date1 = $row['date1'];
	//$flight2 = $row['flight_number_2'];
	//$dtae2 =
	$d = $row['destination'];
	//create a hash map for destination
	if($d == 1){
		$destination = 'MacquarieUni';
	} else if ($d == 2){
		$destination = 'UNSW';
	} else if ($d == 3){
		$destination = 'USydney';
	} else if ($d == 4){
		$destination = 'UTS';
	} else if ($d == 5){
		$destination = 'MelbourneUni';
	} else if ($d == 6){
		$destination = 'RMIT';
	} else if ($d == 7){
		$destination = 'MonashUni';
	} else if ($d == 8){
		$destination = 'LaTrobe';
	} else if ($d == 9	){
		$destination = 'Deakin';
	} else {
		$destination = 'Other';
	}


	echo "$destination's student is flying $flight1 on $date1<br>";
	$count++;
}

echo "total $count number flymate looking for";
echo '</td></tr></table>';
?>           
<p>
<p>
<p>