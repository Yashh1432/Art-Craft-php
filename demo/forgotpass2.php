<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="forgotpass2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="index.html" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <!-- <img src="images/art.png" alt="" width="10px" /> -->
                            <h1>Art and craft studio </h1>
                        </div>
                        <div class="heading">
                            <h6>Get back to login</h6>
                            <a href="login1.php" class="signtext"> <u>Sign in</u></a>
                        </div>

                        <div class="heading">
                            <h2>Forgot password</h2>

                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" name="email" />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">

                                <input type="password" minlength="4" class="input-field" autocomplete="off"
                                    name="password" />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off"
                                    name="confpassword" />
                                <label> confirm Password</label>
                            </div>


                            <input type="submit" value="Send Otp" class="sign-btn" />

                            <p class="text">
                                you will get Otp after clicking send otp

                                <a href="#">Get help</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="../images/Artist-amico.png" class="image img-1 show" id="girl" width="100%"
                            height="100%" />
                        <!--   <img src="./img/image2.png" class="image img-2" alt="" /> -->
                        <!--   <img src="./img/image3.png" class="image img-3" alt="" /> -->
                    </div>



                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="login.js"></script>
</body>

</html>