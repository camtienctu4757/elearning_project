<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Blog</title>
    
    <style>
        .img-logo{
            border-radius: 50%;
            color: transparent;
            
        }
        .navbar{
            background-color: black !important;
        }
        .nav-link{
            font-size: 30px;
            color: white !important;
            margin-right: 8px;
        }

    </style>
</head>

<body>
    <?php
    require_once( "taglib.php" );
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="index.php"><img src="asset/img/logo.jpg" class="img-logo w-50" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="#">Road map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">Courses</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " href="#" >Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="btn btn-primary m-2" href="register.php">Register</a>
                <a class="btn btn-primary "  href="login.php">Login</a></button>
            </div>
        </div>
    </nav>
</body>

</html>