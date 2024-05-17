<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <title>Header</title>


    <!-- Add Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="style/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark .bg-indigo" arial-label="Furni navigation bar">
        <div class="container-fluid">

            <a class="navbar-brand mx-4" href="index.php">Art and Craft</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <ul class="navbar-nav"> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-1">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="shop.php">Gallery</a>
                    </li>
                    <!-- <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>


                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>

                    </li> -->
                    <!-- <li class="nav-item dropdown mx-2">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                                product
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Workshop</a>
                    </li>
                </ul>
                <!-- Right-aligned items -->
                <ul class="navbar-nav ml-auto me-6 mx-0">
                    <!-- Profile -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i> Profile
                        </a>
                    </li>


                    <!-- Logout -->
                    <li class="nav-item mx-2">

                        <a class="nav-link" href="login/logout.php">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>


                    <!-- Login -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="login/login1.php">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>



                    <?php
                    // if (isset($_SESSION['email'])) {
                    ?>


                    <?php
                    // } else {
                    ?>

                    <?php
                    //  if (strlen($_SESSION['email'] > 0)) { 
                    ?>
                    <!-- <a href="my-account.php" title="My Account" itemprop="url">My Account</a> -->
                    <?php
                    // }
                    ?>



                    <!-- Cart -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                    </li>
                </ul>
                <!-- Search Bar -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->





    <?php
    // Check if the user is logged in
    // $isLoggedIn = true; // Replace with your actual logic to check if the user is logged in

    // if ($isLoggedIn) {
    // If the user is logged in, display the "Logout" icon/logo
    //     echo '<a href="logout.php">Logout</a>';
    // } else {
    // If the user is not logged in, display the "Login" icon/logo
    //     echo '<a href="login.php">Login</a>';
    // }
    ?>

    <!-- Add Bootstrap JS and Font Awesome icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>