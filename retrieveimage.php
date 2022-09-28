<?php
include("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Image</title>
    <style>
        table,td,th,tr{
            border: 1px solid black;
        }
        table{
            border-colla
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <td>image</td>
            
        </tr>
    <?php
        $query=$con->prepare("SELECT * FROM imag");
        $query->execute();
        $result=$query->get_result();
        while($row=$result->fetch_assoc()){

            ?>
           <tr>
           <td>
               
           <?php echo $row['id'];
           ?>
        </td>
           <td>
              <img src="./images/<?php echo $row['imgname'];?>" alt="" height="50">
        </td>
           </tr>

        <?php
        }

        ?>
    
    </table>
    
</body>
</html>