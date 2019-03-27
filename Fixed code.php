<?php
class Interview
{
	public static $title = 'Interview test'; //class was not static
}
$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt, quasi aliquid, quod officia commodi magni eum? Provident, sed necessitatibus perferendis nisi illum quos, incidunt sit tempora quasi, pariatur natus.';
$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
$person = $_POST['person'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interview test</title>
	<style>
		body {font: normal 14px/1.5 sans-serif;}
	</style>
</head>
<body>

	<h1><?php echo Interview::$title; ?></h1>

	<?php
	 //Print 10 times
	 for ($i = 1; $i<=10; $i++) {
	  echo "<p>".$lipsum."</p>"; //shoudl have use period instead of plus sign
	}
	?>

	<hr>

	<form method="post" action="<?=$_SERVER['REQUEST_URI'];?>"> <!-- getting values from get before -->
		<p><label for="firstName">First name</label>
		<input type="text" name="person[first_name]" id="firstName"></p>
		<p>
		<label for="lastName">Last name</label> 
		<input type="text" name="person[last_name]" id="lastName"></p>
		<p><label for="email">Email</label>
		 <input type="text" name="person[email]" id="email"></p>
		<p><input type="submit" value="Submit" /></p>
	</form>

	<?php if ($person): ?>
		<p><strong>Person</strong>
		<?php echo $first = $person['first_name'];?>  <!-- the way of fecthing array was wrong --> 
	    <?php echo $first = $person['last_name'];?>
		<?php echo $first = $person['email'];?>
	<?php endif; ?>


	<hr>

	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person): ?>
				<tr>
					<td><?php echo $first = $person['first_name'];?></td>
					<td><?php echo $first = $person['last_name'];?></td>
					<td><?php echo $first = $person['email'];?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</body>
</html>