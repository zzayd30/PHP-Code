<?php
include_once('connect.php');
if (isset($_POST['myname']) && isset($_POST['mypassword'])) {
	$name = $_POST['myname'];
	$password = $_POST['mypassword'];
	if ($name !== "" && $password !== "") {
		$q = "insert into student (name,password) values ('$name', '$password')";
		$rs = mysqli_query($link, $q);

		if ($rs) {
			echo "New user has been registered";
		}
	} else {
		echo ("form is empty");
	}
}
?>
<html>
<head>
</head>

<body>
	<form method="post" action="">
		Name
		<input type="text" name="myname" id="myname" />
		<br />
		Password:
		<input type="password" name="mypassword" id="mypassword" />
		<br />
		<button>Add New</button>
	</form>
</body>

</html>