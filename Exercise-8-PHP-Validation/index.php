<?php
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];

    if(empty($name) || empty($email)){
        $message = "All fields required";
    }
    else{
        $message = "Form submitted successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP Form Validation</h2>

<form method="post">

    <input type="text" name="name" placeholder="Name"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <button type="submit">Submit</button>

</form>

<h3><?php echo $message; ?></h3>

</body>
</html>
