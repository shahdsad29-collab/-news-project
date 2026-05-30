<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($con,"SELECT * FROM news WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title = $_POST['title'];

$details = $_POST['details'];

$image = $_FILES['image']['name'];

$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$query = "UPDATE news SET
title='$title',
details='$details',
image='$image',
status='active'
WHERE id='$id'";

mysqli_query($con,$query);

header("location:show_news.php");

}

?>

<form method="POST" enctype="multipart/form-data">

<input type="text"
name="title"
value="<?php echo $row['title']; ?>">

<br><br>

<textarea name="details"><?php echo $row['details']; ?></textarea>

<br><br>

<input type="file" name="image">

<br><br>

<button name="update">

تعديل الخبر

</button>

</form>