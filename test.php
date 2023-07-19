<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
       if(isset($_GET['submit'])){
        $rollno=$_GET['rollno'];
       // echo $rollno;
        $conn=mysqli_connect("localhost","root","","monishschool");
        $sql="SELECT * FROM marks WHERE rollno=$rollno";
        $result=mysqli_query($conn,$sql);
        var_dump($result);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
           # var_dump($row);
             
        }

    }
        

                


 
       ?>
</body>
        <form action="test.php" method="GET">
         <label for="rollno">RollNO:</label>
          <input  type="number"  name="rollno" id="rollno"/>
         
          <input type="submit"  name="submit" />





        </form>

          
          <table border="1" style="border-collapse:collapse;text-align:center;height:400px;width:400px;">
             <tr>
                <td colspan="2" style="text-align:center;"><?php  echo $row['student_name'];  ?></td>
            </tr>
            <tr>
                <th>Subject</th>
                <th>marks</th>
            </tr>
            <tr>
                <td>Tamil</td>
                <td><?php echo $row['tamil'];   ?></td>

            </tr>
            <tr>
                <td>English</td>
                <td><?php echo $row['english'];   ?></td>
                
            </tr>
            <tr>
                <td>Maths</td>
                <td><?php echo $row['maths'];   ?></td>
                
            </tr>
            <tr>
                <td>Science</td>
                <td><?php echo $row['science'];   ?></td>
                
            </tr>
            <tr>
                <td>Social</td>
                <td><?php echo $row['social'];   ?></td>
                
            </tr>

          </table>
         

</html>