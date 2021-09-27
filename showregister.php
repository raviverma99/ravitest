<?php
$con=mysqli_connect('localhost','root','','new');
$query="select * from register";
$res=mysqli_query($con,$query);

?>
<html>
    <head>

    </head>
    <body>
       <table BORDER="1px" CELLPADING="7px">
           <tr>
               <th>ID</th>
               <th>FULLNAME</th>
               <th>FATHERNAME</th>
               <th>EMAIL</th>
               <th>GENDER</th>
               <th>ADDRESS</th>
               <th>DELETE</th>
               <th>EDIT</th>
           </tr>
           <?php
           while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
           {
               ?>
           <tr>
               <td><?php echo $row['id']?></td>
               <td><?php echo $row['fullname']?></td>
               <td><?php echo $row['fathername']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['a']?></td>
               <td><?php echo $row['address']?></td>
               <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
               <td><a href="edit.php?id=<?php echo $row['id']?>">edit</a></td>
           </tr>
           <?php
           }
           ?>
           </table>
        </body>
</html>