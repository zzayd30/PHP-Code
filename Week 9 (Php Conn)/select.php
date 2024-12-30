<?php
include_once('connect.php');
$q = "select * from student";
$rs = mysqli_query($link, $q);
?>
<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<table class="table table-hover">
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>Password</th>
		</tr>
		<?php
		while ($rows = mysqli_fetch_array($rs)) {
		?>
			<tr>
				<td><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['password']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>