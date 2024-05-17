<?php
session_start();
error_reporting(0);
include('../../include/connection.php');



if (isset($_POST['update'])) {
    $eid = $_GET['editid'];
    $sname = $_POST['sname'];
    // echo "<script> alert('$cname') </script>";
    $query = mysqli_query($conn, "update tblsubcategory set sname ='$sname' where categoryid=$eid");
    if ($query) {
        $msg = "Category has been updated.";
    } else {
        $msg = "Something Went Wrong. Please try again";
    }
}






?>




<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin panel</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="..assests/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />



    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- jQiery Validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>



    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Footwear Shop" src="../assets/img/logo/brush.png" height="35px" width="35px" />

                            <span class="app-brand-text demo menu-text fw-bold ms-1"> Art and Craft </span>

                        </a>


                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="index.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
                        </a>

                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="customer.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Customer">Customer</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="category.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div data-i18n="Category">Category</div>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="addproduct.php" class="menu-link ">
                            <i class="menu-icon tf-icons  bx bx-store-alt"></i>
                            <div data-i18n="Product">Product</div>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-dock-bottom"></i>
                            <div data-i18n="order">order</div>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layer"></i>
                            <div data-i18n="Stock">Stock</div>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Report">Report</div>
                        </a>

                    </li>


            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar ">
                                        <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                </ul>
                            </li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>



                <!-- / category -->
                <br>
                <h1 class="text-center">Sub Category</h1>


                <div class="content-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">

                                        <h5 class="mb-0">Add sub Category</h5>
                                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                                    </div>

                                    <div class="card-body">
                                        <form action="#" method="POST" id="addcategory_form">

                                            <div class="form-group">

                                                <label for="category" class="col-form-label">Category Name:</label>
                                                <select class="custom-select custom-select-lg mb-3" id="subcat" name="state">

                                                    <?php
                                                    $subcatid = $_GET['editid'];
                                                    $sql = "SELECT * FROM tblsubcategory WHERE subcategoryid = $subcatid";
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        $catid = mysqli_fetch_assoc($result)['categoryid'];
                                                        $category = "SELECT * FROM tblcategory";
                                                        $res = mysqli_query($conn, $category);
                                                        if (mysqli_num_rows($res) > 0) {
                                                            echo "<option value=''>-- Select a Category --</option>";
                                                            while ($row = mysqli_fetch_assoc($res)) {
                                                                if ($catid == $row['categoryid']) {
                                                                    echo "<option class='' value='" . $row['categoryid'] . "' selected>" . $row['cname'] . "</option>";
                                                                } else {
                                                                    echo "<option class='' value='" . $row['categoryid'] . "'>" . $row['cname'] . "</option>";
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <input type="text" name="catid" id="catid" class="btn btn-primary" hidden>
                                                <?php if (isset($_POST["catid"])) {
                                                    $cateId = $_POST['catid'];
                                                } ?>
                                                <script>
                                                    $("#subcat").change(function() {
                                                        var stateId = $(this).val();

                                                        if (stateId === "") {} else {
                                                            document.querySelector("#addsubcategory_form input[id='catid']").value = stateId;
                                                        }
                                                    });
                                                </script>
                                            </div>
                                            <?php
                                            // $cid = $_GET['editid'];
                                            // $ret = mysqli_query($conn, "select * from tblsubcategory where categoryid='$eid'");

                                            // while ($fetch = mysqli_fetch_array($ret)) {

                                            ?>

                                            <div class="form-group">

                                                <label for="subcategory" class="col-form-label">Sub Category Name:</label>
                                                <?php
                                                $sql = "SELECT * FROM tblsubcategory WHERE subcategoryid = $subcatid";
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    $scname = mysqli_fetch_assoc($result)['sname'];
                                                }
                                                //echo "<script>alert('$scname');</script>";  ?>
                                                <input type="text" class="form-control" id="subcategory" name="sname" value="<?php echo $scname  ?>">

                                            </div>
                                            <?php
                                            //  }
                                            ?>
                                            <div class="modal-footer">
                                                <!-- <input type="submit" name="register" value="Send OTP" class="btn btn-primary" data-toggle="modal" data-whatever="@fat"> -->
                                                <input type="submit" name="update" value="update" class="btn btn-primary m-2">

                                                <button name="back" class="btn btn-primary text-light"><a href="category.php">Back</a></button>

                                            </div>

                                        </form>
                                        <p style="font-size:16px; color:red;"> <?php if ($msg) {
                                                                                    echo $msg;
                                                                                }  ?> </p>

                                    </div>
                                </div>
                            </div>
                            <!-- </div>  -->
                        </div>

                    </div>





                    < <!--subcategory-->




                        <!-- / add sub category -->
                        <!-- <div class="row">
                    <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter Category Name</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>










            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->

            <script src="../assets/vendor/libs/jquery/jquery.js"></script>
            <script src="../assets/vendor/libs/popper/popper.js"></script>
            <script src="../assets/vendor/js/bootstrap.js"></script>
            <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="../assets/vendor/js/menu.js"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>

            <!-- Page JS -->
            <script src="../assets/js/dashboards-analytics.js"></script>

            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- <script>
            $('#myModal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
        </script> -->

            <script>
                // aarange side bar menu
                // $(document).ready(function() {

                //     //check for active menu for init
                //     var url = window.location.href;
                //     var activePage = url;
                //     var found = false;
                //     $('.sidebar-menu li a').each(function() {
                //         var linkPage = this.href;
                //         if (activePage == linkPage) {
                //             found = true;
                //             $(this).closest("li").addClass("active");
                //             if ($(this).closest("li").parent().hasClass('menu-sub')) {
                //                 $(this).closest("li").parent().parent().addClass("open");
                //                 $(this).closest("li").parent().parent().addClass("active");
                //             }
                //         }
                //     });

                //     if (!found) {
                //         $('.sidebar-menu li').eq(0).addClass("active");
                //     }

                //     //on click for ajax page
                //     $('.sidebar-menu li a').click(function() {
                //         if (!$(this).hasClass('menu-toggle')) {

                //             $('.sidebar-menu li').removeClass("active");
                //             $(this).closest("li").addClass("active");

                //             if ($(this).closest("li").parent().hasClass('menu-sub')) {
                //                 $(this).closest("li").parent().parent().addClass("open");
                //                 $(this).closest("li").parent().parent().addClass("active");
                //             }
                //         }
                //     });

                // });
            </script>
</body>


</html>


<?php

if (isset($_POST['addsubcategory'])) {
    $subcategory = $_POST['subcategory'];
    $subcate = "INSERT INTO tblsubcategory (sname,categoryid,added_date) VALUES ('$subcategory','$cateId',now())";
    // echo $subcate;
    $subcat1 =  mysqli_query($conn, $subcate);
    if ($subcat1) {
        echo "<script>toastr.success('Sub Category added Successfully ')</script>";
        echo "<script>location.href='category.php'</script>";
    } else {
        echo "error:" . $conn->error;
        echo "<script>toastr.error('Sub Category not Adding Failed!  Try Again! ')</script>";
        echo "<script>location.href='category.php'</script>";
    }
}

?>

<?php
#sub category Selection
if (isset($catid)) {
    $sql = "SELECT * FROM tblsubcategory WHERE categoryid = $catid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<option value=''>-- Select a Subcategory --</option>";
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['subcategoryid'] . "'>" . $row['sname'] . "</option>";
        }
    } else {
        echo "<option value=''>-- No Categories Found --</option>";
    }
}
?>