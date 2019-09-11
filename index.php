<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        img{
            width:230px;
            height:150px;
        }
        td{
            text-align:center;
        }
        table{
            margin-top:50px;
        }
    </style>
</head>
<body>
    

<?php
include_once "connection.php";


?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Profile</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
    $query = mysqli_query($connection, "SELECT * FROM tbl_contact");
    while($result = mysqli_fetch_array($query)) {
?>

    <tr>
        <td>
            <?php
               echo $result['ID']; 
            ?>
        </td>
        <td>
            <img src="<?php
               echo $result['Profile']; 
            ?>">
        </td>
        <td>
            <?php
               echo $result['Firstname']; 
            ?>
        </td>
        <td>
            <?php
               echo $result['Lastname']; 
            ?>
        </td>
        
        <td>
            <?php
               echo $result['Gender']; 
            ?>
        </td>
        <td>
            <?php
               echo $result['Email']; 
            ?>
        </td>
        <td>
            <?php
               echo $result['Phone']; 
            ?>
        </td>


    </tr>
    <?php
    }
    ?>
</table>


</body>
</html>