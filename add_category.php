<?php

include 'db.php';

if(isset($_POST['save'])){

$category_name = $_POST['category_name'];

$sql = "INSERT INTO categories(category_name)
VALUES('$category_name')";

mysqli_query($conn,$sql);

echo "تم إضافة الفئة بنجاح";

}

?>

<form method="POST">

<input type="text"
name="category_name"
placeholder="اسم الفئة">

<br><br>

<button name="save">

حفظ الفئة

</button>

</form>