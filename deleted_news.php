<?php

include 'db.php';

$result = mysqli_query($con,
"SELECT * FROM news WHERE status='deleted'");

?>

<table border="1">

<tr>

<th>العنوان</th>

<th>التفاصيل</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td>

<?php echo $row['title']; ?>

</td>

<td>

<?php echo $row['details']; ?>

</td>

</tr>

<?php } ?>

</table>