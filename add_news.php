<?php

include "db.php";

if(isset($_POST['save'])){

    $title = $_POST['title'];
    $details = $_POST['details'];
    $category = $_POST['category'];

    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name , "uploads/".$image_name);

    $query = "INSERT INTO news
    (title, details, image, category_id)
    
    VALUES
    
    ('$title','$details','$image_name','$category')";

    mysqli_query($conn,$query);

    echo "تم إضافة الخبر بنجاح";

}

?>

<form method="POST" enctype="multipart/form-data">

<input type="text"
name="title"
placeholder="عنوان الخبر">

<br><br>

<textarea name="details"
placeholder="تفاصيل الخبر"></textarea>

<br><br>

<select name="category">

<?php

$result = mysqli_query($conn,"SELECT * FROM categories");

while($row = mysqli_fetch_assoc($result)){

?>

<option value="<?php echo $row['id']; ?>">

<?php echo $row['category_name']; ?>

</option>

<?php
}
?>

</select>

<br><br>

<input type="file" name="image">

<br><br>

<button name="save">

حفظ الخبر

</button>

</form>