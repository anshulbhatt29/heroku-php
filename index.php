<html>
    <head>
        <title>
            Home
        </title>
        <style>
            table{
                border-collapse: collapse; 
            }
            th{
                border: dashed 1px;
                text-align: left;
            }
            td{
                border: dashed 1px;
                width: 200px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
        <?php
        require_once('config.php');
        $sql = "SELECT * FROM `users` order by `id`";//Select users and order by id in ascending order
        $result =mysqli_query($mysqli,$sql);

        if($result->num_rows > 0){
            //Output Data of Each Row
            while($row =mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['email'] . "</td>"; 
                ?>
               <td><button style='width:70px;'><a href='edit.php?id=<?php echo "$row[id]"?> '>Edit</a></button> 
               <button style='width:70px' onclick="return confirm('are you sure')"><a href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a></button></td> 
                 
                 <?php echo "</tr>";
            }
        }
        ?>
        </tbody>
        </table>
    </body>
</html>