
<?php
if($_FILES['file']['name'] != ''){
    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);    
    $name = $_FILES['file']['name'];

    $location = 'upload/'.$name;
    move_uploaded_file($_FILES['file']['tmp_name'], $location);

}
?>