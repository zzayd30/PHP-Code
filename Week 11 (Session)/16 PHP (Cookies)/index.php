<?php
$cookie_name = "user";
$cookie_value = "Zeeshan";
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <br /><a href="delete.php">Delete this cookie</a>
</body>

</html>