<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

// remove all session variables
session_unset();
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
echo "My name is" . $_SESSION["Nome"] . ".";
// destroy the session
session_destroy();
?>

</body>
</html>