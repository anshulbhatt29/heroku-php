<html>
    <head>
        <title>
            Add Data
        </title>
    </head>
    <body>
        <?php
        require_once('config.php');
        
        function testInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if(isset($_POST['submit'])){
            $name = testInput($_POST['name']);
            $age = testInput($_POST['age']);
            $email = testInput($_POST['email']);
        }

       

        if(empty($name) || empty($age) || empty($email)){
            echo "<font color='red'> No field should be left empty....</font><br>";
        }
        else{
            
            $sql="INSERT INTO `users`( `name`, `age`, `email`) VALUES ('$name','$age','$email')";
            $data=mysqli_query($mysqli,$sql);
            if($data== TRUE){
                echo 'New Record Has Been Added Successfully...';
                echo "<br><a href='index.php'>View Records</a>";
            }
            else{
                echo 'Error: '. $sql . "<br>" . $mysqli->connect_error;
            }
        }

        ?>
    </body>
</html>