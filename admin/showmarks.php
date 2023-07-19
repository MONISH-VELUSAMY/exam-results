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
       $count="";$result="";
    
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="monishschool";
       
       
        $conn=mysqli_connect($servername,$username,$password,$dbname);
     
        #echo $count;
     
     if(isset($_GET['rollno'])){
        $roll=$_GET['rollno'];
        #echo $roll;
        $sql1="DELETE FROM marks WHERE rollno=$roll";
        $result=mysqli_query($conn,$sql1);
             
     }

     $sql="SELECT * FROM marks";
     $result=mysqli_query($conn,$sql);
     //var_dump($result);
     $count=mysqli_num_rows($result);

    
    
     ?>















    <div class="container-fluid">
        <header>

            <h1 class="h1 bg-primary text-white">Exam Results</h1>
        </header>


        <div class="border" style="height:539px; ">
            <a class="btn btn-primary">ADD</a>
            <div class="mx-auto  rounded " style="height:300px;width:580px; margin-top:110px;">



                <table border="1" class="table table-brodered mx-auto table-hover ">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white">RollNo</th>
                            <th class="bg-primary text-white">Year</th>
                            <th class="bg-primary text-white ">Student_Name</th>
                            <th class="bg-primary text-white">Tamil</th>
                            <th class="bg-primary text-white">English</th>
                            <th class="bg-primary text-white">Maths</th>
                            <th class="bg-primary text-white">Science</th>
                            <th class="bg-primary text-white">Social</th>
                        </tr>
                    </thead>
                    <?php 
                   
                    if($count>0){
                        while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['rollno'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['student_name'] ?></td>
                            <td><?php echo $row['tamil'] ?></td>
                            <td><?php echo $row['english'] ?></td>
                            <td><?php echo $row['maths'] ?></td>
                            <td><?php echo $row['science'] ?></td>
                            <td><?php echo $row['social']  ?></td>
                            <td><a href="showmarks.php?rollno=<?php echo $row['rollno'] ?>" name="delete" class="text-decoration-none">DELETE</a></td>


                        </tr>

                   <?php } } ?>
                   




                </table>

            </div>


        </div>





       

    </div>
    <div class="container-fluid">
        <footer id="footer" class="d-flex flex-wrap justify-content-between align-items-center  border-top mx-3 fixed-bottom bg-primary ">
            <p class="p-3 text-white">2023 Company,inc.,</p>
        </footer>

    </div>


</body>

</html>