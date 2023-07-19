<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .h1 {
        text-align: center;
        height: 70px;
        padding: 4px;
    }



    #footer {

        height: 50px;

    }

    table {
        height: 30px;
        width: 40px;
        border-collapse: collapse;
    }

    .name {
        text-align: center;
        font-size: 20px;
        font-weight: bold;

    }
    </style>

</head>

<body>
    <?php
       
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="monishschool";
       $rollno=$_GET['rollno'];
       
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * FROM marks WHERE rollno=$rollno";
        $result=mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
           # var_dump($row);
             
        

    } 

     mysqli_close($conn);
    

                


 
       ?>








    <div class="container-fluid">
        <header>

            <h1 class="h1 bg-primary text-white">Exam Results</h1>
        </header>
        <?php if(mysqli_num_rows($result)!=0){ ?>

        <div class="border" style="height:539px; ">
            <div class=" mx-auto rounded " style="height:300px;width:400px; margin-top:110px;">

                <p class="name mt-1"><?php  echo $row['student_name'];  ?></p>

                <table border="1" class="table table-brodered mx-auto mt-3 ">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white">subject</th>
                            <th class="bg-primary text-white">marks</th>
                        </tr>
                    </thead>
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
                <div>
                <a href="checkresult.php" class="btn btn-primary"> Back</a>
                </div>
            

            </div>


        </div>
        <?php   } 
        else{  ?>
            <div class="alert alert-info">
            <strong> Entered roll number does not exist!</strong> <a href="checkresult.php" class="alert-link">Go Back</a>
            </div>
        
        <?php }
        
        
        ?>



    </div>
    <div class="container-fluid">
        <footer id="footer" class="d-flex flex-wrap justify-content-between align-items-center  border-top mx-3 fixed-bottom bg-primary ">
            <p class="p-3 text-white">2023 Company,inc.,</p>
        </footer>

    </div>
    


</body>

</html>