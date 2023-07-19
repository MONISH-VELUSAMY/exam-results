<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .h1 {
        
        height: 70px;
        padding: 4px;
    }

    #username {
        width: 70px;
        margin-left: 40px;
        margin-top: 60px;

    }

    #password {
        width: 70px;
        margin-left: 40px;
        margin-top: 20px;

    }

    #lbl_user {
        margin-left: 40px;
    }

    #lbl_pwd {
        margin-top: 102px;
        margin-left: 40px;
    }

    #sub_btn {
        margin-left: 149px;
        margin-top: 30px;
        border-radius: 10px;

    }

    #footer {
      
        height: 50px;

    }
    </style>

</head>

<body>

    <?php 
      $error="";$conn="";
     if(isset($_GET['sub_btn'])){
         $servername="localhost";
         $username="root";
         $password="";
         $dbname="monishschool";
         $user=$_GET['username'];
         $pass=$_GET['password'];
         global $row;
          
        
       
        $conn=mysqli_connect($servername,$username,$password,$dbname);

        $sql="SELECT * FROM admin WHERE username='$user'";

        $result=mysqli_query($conn,$sql);
        //var_dump($result);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
           # var_dump($row);
             
        

    }
    if($user==$row['username'] && $pass==$row['password']){
        header("location:showmarks.php");
    }else{
        $error="Invalid credentials! try again";
    }

    mysqli_close($conn);
}


     ?>












    <div class="container-fluid">
        <header>

            <h1 class="h1 bg-primary text-white text-center">Admin Section</h1>
        </header>

        <div class="border" style="height:539px; ">
        <?php if($error){ ?>
             <div class="alert alert-info mx-auto w-75 mt-3 text-center">
            <strong> <?php echo $error; ?></strong>
            </div>
        <?php }?>



            <div class="border mx-auto shadow-sm rounded " style="height:300px;width:400px; margin-top:100px;">
               
                <div>
                    
                    <form action="index.php" method="GET">
                        <div class="form-floating was-validated">
                            <input class="form-control w-75 rounded " type="text" placeholder="enter" name="username"
                                id="username" required />
                            <label for="username" id="lbl_user" class="">Username:</label><br />
                            <input class="form-control w-75 rounded " type="password" placeholder="enter"
                                name="password" id="password" required />
                            <label for="password" id="lbl_pwd">Password:</label>
                            <input type="submit" class="btn btn-primary" name="sub_btn" id="sub_btn" value="submit" />
                        </div>

                    </form>
                </div>
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