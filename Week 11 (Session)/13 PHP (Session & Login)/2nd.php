<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION['name']))
{
    echo($_SESSION['name']);
   
}
else{
	 header('Location: index.php');
    exit();
}
?>

</body>
</html>
