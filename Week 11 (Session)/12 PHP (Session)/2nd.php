<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "My Name is " . $_SESSION["Name"] . ".<br>";
echo "My Father Name is " . $_SESSION["Father_Name"] . ".";
?>

</body>
</html>
