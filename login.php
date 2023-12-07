<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../asset/boostrap/bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        .card{
            padding-left: 30%;
            padding-right: 30%;
        }
    </style>
</head>

<body>
    <?php
    require_once ("header.php");
    ?>
    
        <div class="card pl-5 pr-5">
            <div class="card-body mt-5 mb-5">
                <form action="" method="post">
                    <h2 class="text-center">Login</h2>
                    <!-- <a href="./register.php">Register</a> -->
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">User name</label>
                        <input type="text" class="mt-2 form-control " name="user_name" aria-describedby="emailHelp"
                            placeholder="Enter name">
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="mt-2 form-control " name="pass" placeholder="Password">
                    </div>

                    <div class="text-center">
                    <button type="submit" class="me-2 btn btn-primary mt-3">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    
    <?php
    include "footer.php";
    ?>
</body>

</html>