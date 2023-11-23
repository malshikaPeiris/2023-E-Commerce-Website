<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin dashboard</title>

    <title>Index</title>

    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for margin -->
    <style>
        .my-custom-margin {
            margin-right: 20px;
            /* Adjust the value to increase or decrease the distance */
        }
    </style>

    <!-- Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">



    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>

<!-- Navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <img src="../image/logonew.png" alt="" class="logo">
            <h2 class="text-center p-2 bg-secondary p-1">MORISH CLOTHING</h2>
            <nav class="navbar navbar-expand-lg">
                <ul class=" navbar-nav">
                    <li class="nav-item">
                        <p class="fw-darker">
                            <a href="" class="nav-link text-light">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
</div>
</nav>





<!-- second child -->
<div class="bg-light">
    <h4 class="text-center p-2 bg-light p-1">Admin Details</h4>
</div>
<!-- third child -->
<div class="row">
    <div class="col-md-12 bg-light p-1 d-flex align-items-center">
        <div class="px-5">
            <a href="#"><img src="../image/image1-removebg-preview.png" alt="" class="admin_image"></a>
            <!-- <p class="text-light text-center">Admin Name</p> -->
        </div>
        <!-- button*10>a.nav-link.text-light.bg-light.my-1 -->
        <div class="button text-center">
            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-dark my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-dark my-1">View Products</a></button>
            <button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-dark my-1">View Categories</a></button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-dark my-1">Insert Brands</a></button>
            <button><a href="" class="nav-link text-light bg-dark my-1">View Brands</a></button>
            <button><a href="" class="nav-link text-light bg-secondary my-1">All Orders</a></button>
            <button><a href="" class="nav-link text-light bg-secondary my-1">All Payments</a></button>
            <button><a href="" class="nav-link text-light bg-secondary my-1">List Users</a></button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <button><a href="" class="nav-link text-light bg-danger my-1">LogOut</a></button>
        </div>
    </div>
</div>

<!-- fourth child -->
<div class="container my-3">
    <?php
    if (isset($_GET['insert_category'])) {
        include('insert_categories.php');
    }
    if (isset($_GET['insert_brand'])) {
        include('insert_brands.php');
    }
    ?>
</div>


<!-- footer.php -->
<div class="bg-light p-3 text-center footer">
    <p>All right reserved Designed by Malshika-2023</p>
</div>
</div>

</body>

</html>