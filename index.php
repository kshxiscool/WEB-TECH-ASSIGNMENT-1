<?php
session_start();

$_SESSION['username'] = "Kshitij";

setcookie("user","Kshitij",time()+3600);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Sessions and Cookies</h2>

<?php

echo "Session User: ".$_SESSION['username'];

if(isset($_COOKIE['user'])){
    echo "<br>Cookie User: ".$_COOKIE['user'];
}

?>

</body>
</html>
