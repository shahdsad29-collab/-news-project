<?php

include 'db.php';

$id = $_GET['id'];

$query = "UPDATE news
SET status='deleted'
WHERE id='$id'";

mysqli_query($con,$query);

header("location:show_news.php");

?>