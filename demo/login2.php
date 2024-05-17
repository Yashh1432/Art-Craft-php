<!DOCTYPE html>
<?php
// session_start();
// if (!isset($_SESSION['submit'])) {
//     if (isset($_REQUEST['name']) || isset($_REQUEST['email']) || isset($_REQUEST['password']) || isset($_REQUEST['rpassword'])) {
//         $name = $_REQUEST['name'];
//         $email = $_REQUEST['email'];
//         $password = $_REQUEST['password'];
//         $rpassword = $_REQUEST['rpassword'];
//         $_SESSION['name'] = $name;
//         $_SESSION['email'] = $email;
//         $_SESSION['password'] = $password;
//         $_SESSION['rpassword'] = $rpassword;
//         echo "<script>window.location.href = '../index.php'</script>";
//         // header('Location:welcome.php');
//     }
// } else {
//     echo "<script>window.location.href = '../index.php'</script>";
// }
?>
<?php
// $name = $email = $password = $rPassword = "";
// $nameErr = $emailErr = $passwordErr = $rPasswordErr = "";

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate name
//     if (empty($_POST["name"])) {
//         $nameErr = "Name is required";
//     } else {
//         $name = test_input($_POST["name"]);
//         // Check if name contains only letters and whitespace
//         if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
//             $nameErr = "Only letters and white space allowed";
//         }
//     }

//     // Validate email
//     if (empty($_POST["email"])) {
//         $emailErr = "Email is required";
//     } else {
//         $email = test_input($_POST["email"]);
//         // Check if email is valid
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $emailErr = "Invalid email format";
//         }
//     }

//     // Validate password
//     if (empty($_POST["password"])) {
//         $passwordErr = "Password is required";
//     } else {
//         $password = test_input($_POST["password"]);
//         // You can implement more complex password requirements here
//     }

//     // Validate confirm password
//     if (empty($_POST["rpassword"])) {
//         $confirmPasswordErr = "Please confirm password";
//     } else {
//         $confirmPassword = test_input($_POST["rpassword"]);
//         if ($rPassword !== $password) {
//             $rPasswordErr = "Passwords do not match";
//         }
//     }

//     // If all validations are successful, you can proceed with further actions
//     if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($rPasswordErr)) {
//         // Perform database insertion or other actions here
//         // Remember to hash the password before storing it in the database
//         // Redirect the user to a success page or perform other actions
//     }
// }

?>


 <script>
 


 // Form Validation
 $("#login").validate({
     rules: {
         'name': {
             required: true,
         },
         'email': {
             required: true,
             email: true,
         },
         'password': {
             required: true,
         },
         'confpassword': {
             required: true,
             equalTo: "#password",
         },
         'contact': {
             required: true,
             number: true,
             minlength: 10,
             maxlength: 10,
         },
         'gender': {
             required: true,
         },
         // 'gender': {
         //     require_from_group: [1,'.gender']
         // },
        //  'state': {
        //      required: true,
        //  },
        //  'city': {
        //      required: true,
        //  },
         'otp': {
             required: true,
             number: true,
             minlength: 6,
             maxlength: 6,
         },
     },
     messeges: {
         'name': {
             required: "Please Enter Name",
         },
         'email': {
             required: "Please Enter Email",
             email: "Please Enter Valid Email",
         },
         'password': {
             required: "Please Enter Password",
         },
         'confpassword': {
             required: "Please Enter Confirm Password",
             equalTo: "Password not match",
         },
         'contact': {
             required: "Please Enter Contact Number",
             number: "Please Enter Valid Contact Number",
             minlength: "Please Enter 10 Digit Contact Number",
             maxlength: "Please Enter 10 Digit Contact Number",
         },
         'gender': {
             required: "Please Select Geneder",
         },
       
        //  'state': {
        //      required: "Please Select State",
        //  },
        //  'city': {
        //      required: "Please Select City",
        //  },
         'otp': {
             required: "Please Enter OTP",
             number: "Please Enter Valid OTP",
             minlength: "Please Enter 6 Digit OTP",
             maxlength: "Please Enter 6 Digit OTP",
         },
     }
 })
</script>


<?php
// Customer Registration
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $check_email = "SELECT * FROM tbluser WHERE email = '$email'";
    $result_email = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($result_email) > 0) {
        echo "<script>toastr.error('Email already Exist..!')</script>";
        return false;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
       
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        // $encpass = password_hash($password, PASSWORD_DEFAULT);
        // $city = $_POST['city'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $role = "customer";

        // Setting Session Variables
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['confpassword'] = $confpassword;
        // $_SESSION['city'] = $city;
        $_SESSION['contact'] = $contact;
        $_SESSION['gender'] = $gender;

        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        // Send the OTP to the user's email
        $subject = "Your Login Code";
        $message = "<h2>Your OTP for Registration is: $otp</h2>";

        $mail->addAddress("$email");
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = " Hello  there, $message";
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        echo "<script>toastr.success('OTP Sent Successfully on $email.....!')</script>";
        echo "<script>location.href='registration_otp.php'</script>";
    }

    // $name = $_POST['name'];
    // // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $confpassword = $_POST['confpassword'];
    // $encpass = password_hash($password, PASSWORD_DEFAULT);
    // $city = $_POST['city'];
    // $contact = $_POST['contact'];
    // $gender = $_POST['gender'];
    // $role = "customer";
    // $token = bin2hex(random_bytes(15));

    // $_SESSION['name'] = $name;
    // // $_SESSION['email'] = $email;
    // $_SESSION['password'] = $password;
    // $_SESSION['confpassword'] = $confpassword;
    // $_SESSION['city'] = $city;
    // $_SESSION['contact'] = $contact;
    // $_SESSION['gender'] = $gender;

    // $check_email = "SELECT * FROM tbluser WHERE email = '$email'";
    // $result_email = mysqli_query($conn, $check_email);
    // if (mysqli_num_rows($result_email) > 0) {
    //     echo "<script>alert('Email already exists!')</script>";
    //     return false;
    // } else {
    //     $email = $_POST['email'];
    //     $_SESSION['email'] = $email;
    // }

    // // if ($password == $confpassword) {
    // //     $password = password_hash($password, PASSWORD_DEFAULT);
    // // } else {
    // //     echo "<script>alert('Both Passwords not match! Try Again!')</script>";
    // //     return false;
    // // }
    // $register = "INSERT INTO tbluser (name, email, password, contact, gender, cityid, role) VALUES ('$name', '$email', '$encpass', '$contact', '$gender', '$city', '$role')";
    // $result = mysqli_query($conn, $register);
    // if ($result) {
    //     echo "<script>alert('Registration Successful!')</script>";
    //     echo "<script>location.href='login.php'</script>";
    // } else {
    //     echo "<script>alert('Registration Failed!  Try Again!')</script>";
    //     echo "<script>location.href='registration.php'</script>";
    // }

}
?>












<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="login2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="" method="POST" autocomplete="off" class="sign-in-form">
                        <h1>Art and craft studio </h1>
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>


                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" 
                                    name="name1" />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" 
                                    name="password1" />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign In" name="login" class="sign-btn" />

                            <p class="text">
                                Forgotten your password or you login details?

                                <a href="forgotpass.php">forgot password</a>
                            </p>
                        </div>
                    </form>

                    <form action="" method="POST" autocomplete="off" class="sign-up-form">

                        <h3>Art and craft studio</h3>

                        <div class="heading">
                            <h4>Register Here!</h4>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        <div class="row bg-gr"></div>
                        <div class="actual-form">

                            <div class="input-wrap">

                                <input type="text"  class="input-field" autocomplete="off" name="name"
                                    required />
                                <span class="error">
                                    <?php
                                        // echo $nameErr; ?>
                                </span>
                                <label>Full Name</label>

                            </div>

                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" name="email"  />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" class="input-field" autocomplete="off" name="Contact"  />
                                <label>Contact</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off"
                                    name="password"  />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off"
                                    name="confpassword"  />
                                <label> confirm Password</label>
                            </div>
                            <div>
                                <label for="gender" class="input-wrap">
                                    Gender
                                </label>
                                <div class="mt-2 flex space-x-16 justify-center ">
                            <div class="radio">
                                    <input class="radio" type="radio" name="gender" value="male" id="male"  /> Male

                                    <input class="radio" type="radio" name="gender" value="female" id="female" /> Female

                                    <input class="radio" type="radio" name="gender" value="other" id="other"  /> Other
                            </div>
                                </div>
                                <label id="gender-error" class="error" for="gender"></label>
                            </div><br>

                            <input type="submit" value="Sign Up" name="register" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <!-- <img src="../images/girl_paint.png" class="image img-1 show" id="girl" alt="" width="100%" height="120%" /> -->
                        <!--<img src="./img/image2.png" class="image img-2" alt="" />-->
                        <!--<img src="./img/image3.png" class="image img-3" alt="" />-->
                        <img src="../images/Artist-amico.png" class="image img-1 show" id="girl" width="100%"
                            height="100%" />

                    </div>



                </div>
            </div>
        </div>
    </main>





    <?php
// $conn = mysqli_connect("localhost", "root", "", "art_craft");
// if (mysqli_connect_errno()) {
//     echo "<script>alert('failed to connect')</script>" . mysqli_connect_error();
// } else {
//     echo "connected successfully";
// }



// if (isset($_POST['submit'])) {
//     $role = $_POST['role'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $rpassword = $_POST['rpassword'];

//     if ($name == '' || $role == '' || $email == '' || $password == '' || $rpassword == '') {
//         echo "<script>alert('Please fill all the fields')</script>";
//     } elseif ($password == $rpassword) {
// //                echo "<script>alert(' all the fields')</script>";

//         $query = "INSERT INTO tbluser( role, name, password, email) VALUES ('$role','$name','$password','$email')";
//         $result = mysqli_query($conn, $query);
//         if ($result) {
//             echo "<script>alert('Signup Successful')</script>";
//         } else {
//             echo "<script>alert('Signup Failed')</script>";
//         }
//     } else {
//         echo "<script>alert('Password does not match')</script>";
//     }
// }
// ?>
    // <?php
//         if (isset($_POST['login'])) {
//             $name1 = $_POST['name1'];
//             $password1 = $_POST['password1'];
//             if ($name1 != '' || $password1 != '') {
//                 $role_fetch = "SELECT role FROM tblUser WHERE name='$name1' AND password='$password1'";
//                 $role_result = mysqli_query($conn, $role_fetch);
//                 // $role = mysqli_fetch_row($role_result);
//                 if (mysqli_num_rows($role_result) > 0) {
//                     while ($row = mysqli_fetch_assoc($role_result)) {
//                         $role = $row['role'];
//                     }

//                     $query = "SELECT * FROM tbluser WHERE name='$name1' AND password='$password1' AND role='$role'";
//                     $result = mysqli_query($conn, $query);
//                     $row = mysqli_fetch_array($result);
//                     if ($row['name'] == $name1 && $row['password'] == $password1 && $row['role'] == $role) {
//                         if ($role == 'admin') {
//                             echo "<script> location.href = 'admin_panel.php'</script>";
//                         } else if ($role == 'customer') {
//                             echo "<script>alert('login successfully')</script>";
//                             echo "<script>window.location.href = '../index.php'</script>";

// //                            header("location:index.php");
//                         }
//                     } else {
//                         echo "<script>alert('Password not Matched')</script>";
//                     }
//                 } else {
//                     echo "<script>alert('Please fill all the fields')</script>";
//                 }
//             }
//         }
        ?>

<?php
// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // password decryption
    $fetch = "SELECT * FROM tbluser WHERE email = '$email'";
    $result = mysqli_query($conn, $fetch);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $encpass = password_verify($password, $row['password']);

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        if ($password != "" && $password != "") {
            $fetch_role = "SELECT role FROM tbluser WHERE email = '$email' AND password = '$encpass'";
            $result_role = mysqli_query($conn, $fetch);
            $role = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result_role) > 0) {
                while ($row_role = mysqli_fetch_assoc($result_role)) {
                    $role = $row_role['role'];
                }
            }
        }

        // $login = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$encpass' AND role = '$role'";
        // $result_login = mysqli_query($conn, $login);
        // $row = mysqli_fetch_array($result_login);
        if ($row['email'] == $email && $row['password'] == $encpass && $row['role'] == $role) {
            if ($role == "admin") {
                echo "<script> location.href = 'admin_panel.php'</script>";
            }
            // elseif ($role == "employee") {
            //     echo "<script> location.href = 'admin_panel.php'</script>";
            // } 
            else {
                echo "<script> location.href = 'landing.php'</script>";
            }
        } else {
            echo "<script> toastr.error('Invalid email or password')</script>";
        }
    } else {
        echo "<script>toastr.error('Oops! Credantials does\'t Matched!')</script>";
        // echo "<script> alert('Email not Found!')</script>";
    }
}
?>


    <!-- Javascript file -->

    <script src="login.js"></script>
</body>

</html>

<?php
// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo $email;
    // echo $password;

    // password decryption
    $fetch = "SELECT * FROM tbluser WHERE email = '$email'";
    // $password = "SELECT * FROM tbluser WHERE password = '$password'";

    $result = mysqli_query($conn, $fetch);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        // echo $row["password"];
        $encpass = password_verify($password, $row["password"]);
        // $hashed_password = password_verify($password, $row['password']);
        // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        echo $email;
        echo $encpass;
        // echo $hashed_password;


    //     $_SESSION['email'] = $email;
    //     $_SESSION['password'] = $password;
    //     if ($password != "" && $password != "") {
    //         $fetch_role = "SELECT role FROM tbluser WHERE email = '$email' AND password = '$hashed_password'";
    //         $result_role = mysqli_query($conn, $fetch);
    //         $role = mysqli_fetch_assoc($result);
    //         if (mysqli_num_rows($result_role) > 0) {
    //             while ($row_role = mysqli_fetch_assoc($result_role)) {
    //                 $role = $row_role['role'];
    //             }
    //         }
    //     }
    //     // echo $hashed_password;
    //     // echo $fetch_role;
    //     // echo $row_role;
    //     // echo $role;



    //     // $login = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$encpass' AND role = '$role'";
    //     // $result_login = mysqli_query($conn, $login);
    //     // $row = mysqli_fetch_array($result_login);
    //     echo $email;
    //     echo $hashed_password;
    //     // echo $hashed_password;
    //     // 
    //     // if (password_verify($password, $hashed_password)){
    //     if ($row['email'] == $email && $row['password'] == $hashed_password && $row['role'] == $role) {
    //         if ($role == "admin") {
    //             echo "<script> location.href = 'admin_panel.php'</script>";
    //             // echo "<script> toastr.error('Invalid hai ')</script>";
    //         } else {
    //             // $status = "UPDATE tbluser SET status ='1' WHERE id = '$row[id]'";
    //             // $status_result = mysqli_query($conn, $status);
    //             // echo "<script> toastr.error('Invalid hai ')</script>";

    //             echo "<script> location.href = '../index.php'</script>";
    //         }
    //     } else {
    //         echo "<script> toastr.error('Invalid email or password')</script>";
    //     }
    // } else {
    //     echo "<script>toastr.error('Oops! Credantials does\'t Matched!')</script>";
        // echo "<script> alert('Email not Found!')</script>";
    }
}
?>