<?php

include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    echo "تم تسجيل الدخول بنجاح";

}else{

    echo "بيانات خاطئة";

}

}

?>

<form method="POST">

<input type="email"
name="email"
placeholder="الايميل">

<br><br>

<input type="password"
name="password"
placeholder="كلمة المرور">

<br><br>

<button name="login">

تسجيل الدخول

</button>

</form>