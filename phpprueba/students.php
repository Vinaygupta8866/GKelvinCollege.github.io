<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font awesome Script-->
    <script src="https://kit.fontawesome.com/912da39ca5.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/Collegelogo.jpg">
    <title> Glasgow Kelvin College</title>
</head>

<body class="card">
    <!-- Logo Banner-->

    <div class="bg-light img-fluid max-width: 100%">
        <img src="img/NNGKClogowithtext.jpg" alt="College logo with text">

    </div>
    <header>
        <!-- Barra de navegador-->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="timetables.html">Timetables</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-secondary" href="students.html">Student Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="apply.html">Apply/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary" href="contact.html">Contact</a>
                    </li>
                </ul>

            </div>

    

            <!-- Logo y Cabecera-->
            <div class="card-body bg-white">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="divider-text">
                        <span class="bg-light"> <strong>Application Form</strong> </span>
                    </h4>
                    <br>
                    <form method="post" action="login.php">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Full name" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Email address" type="email">
                        </div> <!-- form-group// -->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password">
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bg-dark btn-block"> Login Account </button>
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->
    </header>

    <?php
            include 'conection.php';
            $sql= "select * from kelvinc";
            $result=mysql_query($sql);
        ?>

    <table>
      <thead>
        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Course</th>
            <th>Marks</th>    
        </tr>
      </thead>
      <tbody>
        <?php while ($filas=mysql_fetch_assoc($resultado)) {

            ?>
            <tr>
                <td><?php echo $filas['name'] ?><td>
                <td><?php echo $filas['phone'] ?><td>
                <td><?php echo $filas['email'] ?><td>
                <td><?php echo $filas['course'] ?><td>
                <td><?php echo $filas['marks'] ?><td>

            </tr>
        }

      </tbody>


    </table>


    <footer>
        <div class="container mt-1">
            <div class="row">
                <div class="col">
                    <nav class="pt-2 float-left bg-white">
                        <br> <br>
                        <a href="#"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="#"><i class="fab fa-twitter text-dark" v></i></a>
                        <a href="#"><i class="fab fa-pinterest text-dark"></i></a>
                        <a href="#"><i class="fab fa-youtube text-dark"></i></a>
                        <a href="#"><i class="fab fa-instagram text-dark"></i></a>
                    </nav>
                </div>
                <div class="col pt-5">
                    <h6>All rights under Copyleft license 16-09-2019</h6>
                </div class=>
                <div class="col mt-1">
                    <br>
                    <img class="float-right" src="img/GKClogowithtextsmall.jpg" alt="Glasgow City Council Logo">
                </div>
            </div>


    </footer>

</body>
</html>