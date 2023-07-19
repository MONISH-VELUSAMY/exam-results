<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
    $roll=$_GET['rollno'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="monishschool";
    echo $roll;
    
     $conn=mysqli_connect($servername,$username,$password,$dbname);
     $sql="DELETE FROM marks WHERE rollno=$roll";
     $result=mysqli_query($conn,$sql);
      
     header("Location:showmarks.php");
    
    
    
    
    ?>
</body>
</html>