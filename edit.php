<?php

include_once("config.php");
include_once('common.php');
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];    
    
  
    if(empty($name) || empty($age) || empty($email)){
            echo "<font color='red'> No field should be left empty....</font><br>";
    } 
    else {    
       
        $sql="UPDATE `users` SET `name`='$name',`age`='$age',`email`='$email' WHERE `id`='$id'";
        $result=mysqli_query($mysqli,$sql);
       
        header("Location: index.php");
    }
}
?>

<?php

$id =$_GET['id'];


$sql = "SELECT * FROM `users` WHERE `id`='$id' ";
$result=mysqli_query($mysqli,$sql);
$name="";
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
   
    $name =$row['name'];
    $age = $row['age'];
    $email =$row['email'];

   
}
?>
<html>
<head>    
    <title>Edit Record</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <section id="contact">
        <div class="contact-section">
        <div class="container">
            <form action="edit.php" method='post' name='form1'>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" class="form-control" name="name" value=<?php echo "$name";?> required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" min=0 max=150 class="form-control" name="age" value=<?php echo "$age";?> required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" value=<?php echo "$email";?> required>
                    </div>  
                    <div>
                        <input type="hidden" name="id" value=<?php echo "$id";?>>
                        <input type="submit" class="btn btn-default submit fa fa-paper-plane" name='update' value="update">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>
