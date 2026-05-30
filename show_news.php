<?php

include 'db.php';

$result = mysqli_query($con,
"SELECT * FROM news");

?>

<table border="1">

<tr>

<th>العنوان</th>

<th>التفاصيل</th>

<th>الصورة</th>
<th>تعديل</th>
<th>حذف</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td>
<?php echo $row['title']; ?>
</td>

<td>
<?php echo $row['details']; ?>
</td>

<td>
<img src="uploads/<?php echo $row['image']; ?>" width="100">
<td>

<a href="edit_news.php?id=<?php echo $row['id']; ?>">

تعديل

</a>

</td>
<td>

<a href="delete_news.php?id=<?php echo $row['id']; ?>">

حذف

</a>

</td>
</tr>

<?php } ?>

</table>