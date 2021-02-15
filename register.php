<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxeL Empire</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body class="login-bg">
    <nav class="navbar flex transparent navbar-expand">
        <div class="container transparent">
            <ul class="nav navbar-nav pull-sm-left">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
            </ul>
            <ul class="nav navbar-nav flex navbar-logo mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chapter</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register </h5>
                        <form class="form-signin" action="config/register.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="username" class="form-control" name="username" required autofocus
                                    placeholder="Enter Username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                    required autofocus name="email">
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                    required name="password">
                                <label for="inputPassword">Password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" onclick="login()"
                                type="Submit" name="submit">REGISTER </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>