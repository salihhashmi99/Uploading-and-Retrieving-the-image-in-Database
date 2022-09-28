<?php
include("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        h1,h2{
            text-align:center;
        }
        form{
            text-align:center;
        }
        #r{
            background-color:green;
        }
        #e{
            background-color:Red;
        }
        form{
            border:2px solid black;
            margin-right:400px;
            margin-left:400px;
        }
    </style>
</head>
<body>
  
</hr>
<form action="" method="post" enctype="multipart/form-data"  >
   
    <label for="">Select Your Image</label>
    <br>
    <br>
    <input type="file" style="padding-left:100px;" name="image">
    <br>
    <br>
    <br>
    <input type="submit" value="Upload Image" name="upload">
    <br>
    <br>



<?php

if(isset($_POST['upload'])){

$file=$_FILES['image'];

$FileNameTemp=$file['tmp_name'];
$Name= mysqli_real_escape_string($con,$file['name']);

if(move_uploaded_file($FileNameTemp,"images/".$Name)){
    $query=$con->prepare("INSERT INTO imag(imgname) values(?)");

    
    $query->bind_param("s",$Name);
    $query->execute();
    $query->close();

   echo " Data Inserted Susscesfuly into data base ";
}
else{
    
   echo " Data is not inserted into database ";
}
}
?>
    </form>
</body>
</html>