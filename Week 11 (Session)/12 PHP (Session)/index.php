<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Name"] = "Zeeshan";
$_SESSION["Father_Name"] = "Ramzan";
echo "Session variables are set.";
?>

</body>
</html>
