<!-- coonect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Interface</title>

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
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="./image/logonew.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="font-size: 22px;">Home</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 22px;">Product</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 22px;">Register</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 22px;">Contact</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 22px;"><i class="fas fa-shopping-cart"><sup>1</sup></i></a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link my-custom-margin" href="#" style="font-size: 18px;">TotalPrice </a>
                        </li>
                    </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- Search Bar -->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="search" class="btn btn-outline-dark" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- Content Section -->
    <h1 style="font-size: 36px;"></h1>
    <!-- last child -->
    <div class="bg-light  text-center">
        <p class="fw-darker">
        <h2>MORISH CLOTHING</h2>
        </p>
        <p class="fw-darker">All right resered @-Designed by MalshikaPeiris-2023</p>
    </div>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- thirt child -->
    <!-- <div class="bg-light">
    <h3 class="text-center">Clothing Store</h3>
    <p class="text-center">WE APOLOGIZE IN ADVANCE FOR DELIVERY DELAYS YOU MAY FACE * MORE INFO HERE </p>
</div> -->

    <!-- fourth child -->
    <div class="row px-3">
        <div class="col-md-10">

            <!-- products -->
            <div class="row">

                <!-- fetching products -->
                <?php
                // calling function
                getproducts();
                ?>

                <!-- row end -->
            </div>
            <!-- col end -->
        </div>


        <!-- side bar -->
        <div class="col-md-2 bg-light pd-0">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-light">
                    <a href="#" class="nav-link text-dark">
                        <h5>Delivery Brands</h5>
                    </a>
                </li>

                <!-- fetch the brands -->
                <?php
                // calling function
                getbrands();
                ?>

                <!-- <li class="nav-item bg-light">
          <a href="#" class="nav-link text-dark ">Brand 1</a>
        </li>
        <li class="nav-item bg-light">
          <a href="#" class="nav-link text-dark ">Brand 2</a>
        </li>
        <li class="nav-item bg-light">
          <a href="#" class="nav-link text-dark ">Brand 3</a>
        </li> -->



                <a href="#" class="nav-link text-dark">
                    <h5>Categories</h5>
                </a>
                </li>


                <!-- fetch the categories -->
                <?php
                // calling function
                getcategories()
                ?>



        </div>
    </div>
    <!-- sidebar -->

    </div>
    </div>


    <!-- Bootstrap JS link (required for dropdowns and other components) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>






<!-- footer.php -->
<div class="bg-light p-3 text-center">
    <p>All right reserved Designed by Malshika-2023</p>

</div>




</div>

</html>