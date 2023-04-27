
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>
<?php include "../navbar_admin.php";?>
<?php
include_once("../connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Contact</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border-radius: 2px;
        }
        table{
            margin:150px auto;
        }
        table, table td,table th{
            border: 1px solid #e6e6e6;
            max-width: 90vw;
            background: #f3f3f3;
            color: #333;
        }
        table th{
            font-weight:bold;
        }
        td,th{
            padding: 5px;
            color: black;
            font-weight: 500;
        }      
        
    </style>
  </head>
  <body>
      <table>
          <thead><tr><th>Serial Number</th><th>Full Name</th><th>Phone Number</th><th>Email</th><th>Message</th></tr></thead>
          <?php 
if(isset($_POST['delete']))
{
    $sn =$_POST['sn'];
    $query="DELETE FROM contact WHERE serial_number=$sn";
    mysqli_query($conn,$query);
}
?>
  <?php
  
  $sql = "SELECT * FROM contact";
  $result = mysqli_query($conn,$sql);
  // Associative array
  while($row = $result -> fetch_assoc())
  {?>
  <tr>
      <td><?php echo $row['serial_number'];?></td>
      <td><?php echo $row['full_name'];?></td>
      <td><?php echo $row['phone_number'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['message'];?></td>
      <td>
          <form action="contact.php" method="post">
              <input name="sn" type="hidden" value="<?php echo $row['serial_number'];?>">
              <input type="submit" name="delete" class="delete" type="button" value="Delete" style="padding:5px;">
            </form>
        </td>
    </tr>
  <?php } ?>
  </table>
  </body>
</html>
