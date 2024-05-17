<?php

require '../../include/connection.php';

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
                        <a class="navbar-brand" href="index.php"><img class="brand-logo" alt="art adn craft" src="../assets/img/logo/brush.png" height="35px" width="35px" />

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





                <!-- Product -->




                <br><br>
                <h1 class="text-center">Product</h1>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-5">

                                    <div class="col-xl">
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0">Add Product</h5>
                                                <!-- <small class="text-muted float-end">Merged input group</small> -->
                                            </div>
                                            <div class="card-body">
                                                <form action="#" method="POST" id="addproduct_form" enctype="multipart/form-data">
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3"></div>
                                                        <label for="validationTooltip01">Category:</label>
                                                        <br>
                                                        <select class="custom-select custom-select-lg mb-3" id="cat" name="cat">
                                                            <?php
                                                            $sql = "SELECT * FROM tblcategory";
                                                            $result = mysqli_query($conn, $sql);
                                                            echo "<option value=''>-- Select a Category --</option>";
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<option class='' value='" . $row['categoryid'] . "'>" . $row['cname'] . "</option>";
                                                            }
                                                            $catid = $_POST['categoryid'];

                                                            ?>
                                                        </select>

                                                        <br>

                                                        <label for="validationTooltip01">Sub Category:</label>
                                                        <br>
                                                        <select class="custom-select custom-select-lg mb-3" id="subcat" name="subcat">
                                                            <option>Select Sub-Category</option>
                                                        </select>
                                                        <div>


                                                            <label for="validationTooltip01">Brand :</label>
                                                            <br>
                                                            <select class="custom-select custom-select-lg mb-3" id="brand" name="brand">
                                                                <?php
                                                                $sql = "SELECT * FROM tblbrand";
                                                                $result = mysqli_query($conn, $sql);
                                                                echo "<option value=''>-- Select a Brand --</option>";
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo "<option class='' value='" . $row['brandid'] . "'>" . $row['bname'] . "</option>";
                                                                }
                                                                // $catid = $_POST['id'];
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label for="pname" class="col-form-label">product Name:</label>
                                                        <input type="text" class="form-control" id="pname" name="pname" required>
                                                    </div>

                                                    <div class="col-md-8 mb-3">
                                                        <label for="productdescription">product description:</label>
                                                        <textarea class="form-control rounded-0" id="productdescription" rows="3" name="productdescription" required></textarea>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label for="price" class="col-form-label">product price:</label>
                                                        <input type="text" class="form-control" id="price" name="price" required>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label for="size" class="col-form-label">product size:</label>
                                                        <input type="text" class="form-control" id="size" name="size" required>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label for="stock" class="col-form-label">product Stock:</label>
                                                        <input type="text" class="form-control" id="stock" name="stock" required>
                                                    </div>
                                                    <div class="col-md-8 mb-5">
                                                        <label for="image" class="col-form-label">Image-1 Upload Here :</label>
                                                        <input type="file" class="form-control" id="file1" name="file1">
                                                        <img>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <!-- <input type="submit" name="register" value="Send OTP" class="btn btn-primary" data-toggle="modal" data-whatever="@fat"> -->
                                                        <input type="submit" name="addproduct" value="Add Product" class="btn btn-primary">
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card">
                                        <h5 class="card-header "> <strong> Product List</strong></h5>
                                        <div class="table-responsive text-nowrap p-2">

                                            <table class="table table-bordered mg-b-0">
                                                <br>
                                                <thead class=" bg-dark text-light">
                                                    <tr>
                                                        <th class="text-light">S.NO</th>
                                                        <th class="text-light">Image</th>
                                                        <th class="text-light">product Name</th>
                                                        <th class="text-light">Brand Name</th>
                                                        <th class="text-light">Category</th>
                                                        <th class="text-light">Price</th>
                                                        <th class="text-light">Quantity</th>
                                                        <th class="text-light">Added date</th>
                                                        <th class="text-light">Toggle </th>
                                                        <th class="text-light">Action</th>
                                                    </tr>

                                                </thead>
                                                <?php
                                                if (isset($_GET['id'])) {
                                                    $id = $_GET['id'];
                                                    $delete = $conn->query("DELETE  FROM `tbl_products` where product_id=$id");
                                                }

                                                $query = $conn->query("SELECT * FROM tbl_products");
                                                $cnt = 1;


                                                ?>

                                                <tbody>

                                                    <!-- / Fetch category -->

                                                    <?php
                                                    while ($fetch = $query->fetch_array()) {
                                                        // if ($result->num_rows > 0) {
                                                        //     $row = $result->fetch_assoc();
                                                        //     $Cname = $row['name'];
                                                        // }
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $cnt; ?></td>

                                                            <td><img class="img-polaroid" src="<?php echo $fetch['img1'] ?>" height="70px" width="80px"></td>
                                                            <td>
                                                                <p><?php echo $fetch['name']; ?></p>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $bid = $fetch['brandid'];
                                                                $brand_name = "SELECT * FROM tblbrand WHERE brandid = $bid";
                                                                $bname_result = $conn->query($brand_name);
                                                                if (mysqli_num_rows($bname_result) > 0) {
                                                                    $bname_row = mysqli_fetch_array($bname_result);
                                                                    $bname = $bname_row["bname"];
                                                                }
                                                                ?>

                                                                <p><?php echo $bname; ?></p>

                                                            <td>
                                                                <div>
                                                                    <?php
                                                                    $cid = $fetch['categoryid'];
                                                                    $category_name = "SELECT * FROM tblcategory WHERE categoryid = $cid";
                                                                    $cname_result = $conn->query($category_name);
                                                                    if (mysqli_num_rows($cname_result) > 0) {
                                                                        $cname_row = mysqli_fetch_array($cname_result);
                                                                        $cname = $cname_row["cname"];
                                                                    }
                                                                    ?>
                                                                    <p><?php echo $cname ?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <p><?php echo $fetch['price']; ?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <p><?php echo $fetch['quantity']; ?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <p><?php echo $fetch['added_on']; ?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($fetch['status'] == "1")

                                                                    // if a course is active i.e. status is 1 
                                                                    // the toggle button must be able to deactivate 
                                                                    // we echo the hyperlink to the page "deactivate.php" 
                                                                    // in order to make it look like a button 
                                                                    // we use the appropriate css 
                                                                    // red-deactivate 
                                                                    // green- activate 
                                                                    echo
                                                                    "<a href=deactivate.php?id=" . $fetch['product_id'] . " <span class='btn btn-danger rounded-pill d-inline'>Deactivate</span></a>"
                                                                    // ."<script>alert('Product deactive')</script>"
                                                                    ;
                                                                else
                                                                    echo
                                                                    "<a href=activate.php?id=" . $fetch['product_id'] . " <span class='btn btn-success rounded-pill d-inline'>Activate</span></a>"
                                                                    // ."<script>alert('Product active')</script>"
                                                                    ;
                                                                ?>
                                                            </td>


                                                            <td>
                                                            <a href="editproduct.php?editid=<?php echo $fetch['product_id']; ?>" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="bi bi-pencil-square m-2"></i>
                                                                        </span>
                                                                    </a>
                                                                <a  href="addproduct.php?id=<?php echo $fetch['product_id'] ?>" onclick="return confirm('Do you really want to delete the food item?');"
                                                                 class="table-link danger">
                                                                    <span class="fa-stack">
                                                                        <i class="bi bi-trash3-fill text-danger "></i>
                                                                    </span>
                                                                </a>

                                                        </tr>
                                                    <?php
                                                        $cnt = $cnt + 1;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

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



    <script>
        $(document).ready(function() {
            $('.editbutton').on('click', function() {
                $('#editmodal').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#cat').val(data[0]);
                $('#subcat').val(data[1]);
                $('#brand').val(data[2]);
                $('#pname').val(data[3]);
                $('#productdescription').val(data[4]);
                $('#size').val(data[5]);
                $('#price').val(data[6]);
                $('#stock').val(data[7]);
                $('#file1').val(data[8]);
            });
        });
    </script>






    <!-- sub category -->

    <script>
        // category Selection
        $("#cat").change(function() {
            var catid = $(this).val();
            if (catid === "") {
                $("#subcat").html("<option value=''>-- Select Category First --</option>");
                $("#subcat").prop("disabled", true);
            } else {
                $.ajax({
                    type: "POST",
                    url: "addproduct.php",
                    data: {
                        categoryid: catid
                    },
                    success: function(response) {
                        $("#subcat").prop("disabled", false);
                        $("#subcat").html(response);
                    },
                });
            }
        });
    </script>


    <script>
        $(document).ready(function() {
            // Initialize DataTable on your table
            var dataTable = $('#tableID').DataTable({
                "paging": true,
                "pageLength": 10,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>



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

</body>

</html>




<?php
#sub category Selection
if (isset($catid)) {
    $sql = "SELECT * FROM tblsubcategory WHERE categoryid = $catid";
    $result_subcat = $conn->query($sql);

    if ($result_subcat->num_rows > 0) {
        echo "<option value=''>-- Select a Subcategory --</option>";
        while ($row = $result_subcat->fetch_assoc()) {
            echo "<option value='" . $row['subcategoryid'] . "'>" . $row['sname'] . "</option>";
        }
    } else {
        echo "<option value=''>-- No Categories Found --</option>";
    }
}
?>

<?php
#Add-Product Code
if (isset($_POST['addproduct'])) {
    $category = $_POST['cat'];
    // echo $category;
    $subcategory = $_POST['subcat'];
    $brand = $_POST['brand'];
    // echo $subcategory;
    $pname = $_POST['pname'];
    // $modelno = $_POST['modelno'];
    $description = $_POST['productdescription'];
    $price = $_POST['price'];
    $size = $_POST['size'];

    $stock = $_POST['stock'];
    $imageName = $_FILES['file1']['name'];
    $imageTmpName = $_FILES['file1']['tmp_name'];

    $targetedDir = 'images/';
    $image = $targetedDir . $imageName;

    // echo "<script>alert('$imageName ,$image') </script>";

    if (move_uploaded_file($imageTmpName, $image)) {

        $_SESSION['cat'] = $category;
        $_SESSION['subcat'] = $subcategory;
        $_SESSION['pname'] = $pname;
        $_SESSION['brand'] = $brand;
        // $_SESSION['modelno'] = $modelno;
        $_SESSION['productdescription'] = $description;
        $_SESSION['price'] = $price;
        $_SESSION['size'] = $size;

        $_SESSION['stock'] = $stock;

        $add_productt = "INSERT INTO tbl_products(name, description, price,size, quantity, img1,brandid, categoryid, subcategoryid, added_on) VALUES ('$pname', '$description', $price, '$size', $stock, '$image',$brand, $category, $subcategory, now() )";
        $add_product = mysqli_query($conn, $add_productt);
        if ($add_product) {
            // $fetch_pid = $conn->query("SELECT * FROM tbl_products where name=$pname");
            // if (mysqli_num_rows($fetch_pid) > 0) {
            //     $pid_row = mysqli_fetch_array($fetch_pid);
            //     $productid = $pid_row['product_id'];
            //     $inesert_stock = $conn->query("INSERT INTO tbl_stock (productid, stock) values ($productid, $stock)");
            // }else{

            // }
            echo "<script>alert('Product Added successfully!')</script>";
            echo "<script>location.href='addproduct.php'</script>";
        } else {
            echo "Product added Failed";
        }
    } else {
        echo "<script>alert('error')</script>";
    }
}
?>