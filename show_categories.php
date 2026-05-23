<?php

include 'db.php';

$result = mysqli_query($conn,
"SELECT * FROM categories");

?>

<table border="1" cellpadding="10">

<tr>

<th>رقم الفئة</th>

<th>اسم الفئة</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td>

<?php echo $row['id']; ?>

</td>

<td>

<?php echo $row['category_name']; ?>

</td>

</tr>

<?php } ?>

</table>