<?php

include 'db.php';

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

mysqli_query($con,$sql);

echo "تم إنشاء الحساب";

}

?>

<!DOCTYPE html>

<html>

<head>
<title>Register</title>
</head>

<body>

<form method="POST">

<input type="text" name="name" placeholder="الاسم">

<br><br>

<input type="email" name="email" placeholder="الايميل">

<br><br>

<input type="password" name="password" placeholder="كلمة المرور">

<br><br>

<button type="submit" name="register">
إنشاء حساب
</button>

</form>

</body>

</html>