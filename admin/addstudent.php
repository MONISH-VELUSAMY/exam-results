<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .h1 {
        text-align: center;
        height: 70px;
        padding: 4px;
    }

    #rollno {}

    label {}

    #sub_btn {
        margin-left: 149px;
        margin-top: 30px;
        border-radius: 10px;

    }

    #footer {
        background-color: blue;
        height: 50px;

    }
    </style>

</head>

<body>

    <div class="container-fluid">
        <header>

            <h1 class="h1 bg-primary text-white">Exam Results</h1>
        </header>

        <div class="border " style="height:350px; ">
            <div class=" mx-auto " style="height:350px;">
                <div class="">
                    <form action="#" method="GET">
                        <div class="d-flex flex-column"> 

                            <div class="mt-2 ">
                                <label for="rollno">RollNo:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter roll no" name="rollno" id="rollno" required />
                            </div>
                            <div class="mt-2">
                                <label for="year">Year:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter the year" name="year" id="year" required />
                            </div>
                            <div class="mt-2">
                                <label for="name">Name:</label>
                                <input class="form-control w-75 rounded d-inline-flex " type="text"
                                    placeholder="enter the student's name" name="name" id="name" required />
                            </div>
                            <div class="mt-2">
                                <label for="tamil">Mark in Tamil:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter tamil mark" name="tamil" id="tamil" required />
                            </div>
                            <div class="mt-2">
                                <label for="english">Mark in English:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter english mark" name="english" id="english" required />
                            </div>
                            <div class="mt-2">
                                <label for="maths">Mark in maths:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter maths mark" name="maths" id="maths" required />
                            </div>
                            <div class="mt-2">
                                <label for="science">Mark in Science:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter science mark" name="science" id="science" required />
                            </div>
                            <div class="mt-2">
                                <label for="social">Mark in social:</label>
                                <input class="form-control w-75 rounded d-inline-flex  " type="number"
                                    placeholder="enter social mark" name="social" id="social" required />
                            </div>


                            <input type="submit" class="btn btn-primary" id="sub_btn" value="submit" />

                        </div>
                    </form>
                </div>
            </div>


        </div>

        <footer id="footer" class="text-white fixed-bottom">
            <p class="p-3">2023 Company,inc.,</p>
        </footer>


    </div>


</body>

</html>