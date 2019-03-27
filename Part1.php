<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$list = "";

foreach ($people as $value) {
    
    $id = $value['id'];
    $first = $value['first_name'];
    $last = $value['last_name'];
    $email = $value['email'];

    $list .= "​<tr>
			  <td>$id</td>
			  <td>$first $last</td>
			  <td><button type='' id='email' value='$first - $email'/>$email</td>
				<td>
       <button onclick='myFunction()'>Click me</button>
			  </tr>";
}

 echo "<table><tr>
       <th>ID</th>
       <th>Name</th> 
       <th>Email</th>
       <tr>".$list."</th></table>";
?>

<script>
function myFunction() {
//  alert("hello");
  var val = document.getElementById("email");
  alert("Hello," + " " +  val.value + "");
}
</script>



<script src="https//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
