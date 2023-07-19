<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .h1 {
        text-align: center;
        height: 70px;
        padding: 4px;
    }

    #rollno {
        width: 70px;
        margin-left: 40px;
        margin-top: 60px;

    }

    label {
        margin-left: 40px;
    }

    #sub_btn {
        margin-left: 149px;
        margin-top: 30px;
        border-radius: 10px;

    }
    #footer{
        height:50px;
    }
    </style>

</head>

<body>

    <div class="container-fluid">
        <header>

            <h1 class="h1 bg-primary text-white">Exam Results</h1>
        </header>

        <div class="border" style="height:539px; ">
            <div class=" mx-auto  rounded " style="height:300px;width:400px; margin-top:110px;">
                <div>
                    <form action="mark.php" method="GET">
                        <div class="form-floating was-validated">
                            <input class="form-control w-75 rounded " type="number" placeholder="enter" name="rollno"
                                id="rollno" required />
                            <label for="rollno" class=""> roll no:</label>
                            <input type="submit" class="btn btn-primary" id="sub_btn" value="submit" />
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