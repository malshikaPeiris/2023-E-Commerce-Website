<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // access images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //accessing image tmp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    //checking empty condition
    if (
        $product_title == '' or $product_description == '' or  $product_keywords == '' or $product_category == '' or
        $product_brands == '' or $product_price == '' or  $product_image1 == '' or  $product_image2 == '' or  $product_image3 == ''
    ) {
        echo "<script>alert('please fill the available field')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        //insert query
        $insert_products = "insert into `products` (product_title,product_description,product_keywords,
        category_id,brand_id ,product_image1 ,	product_image2,product_image3 , product_price,date,status)
        values('$product_title','$product_description','$product_keywords','$product_category',
        '$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert('successfully inserted the products')</script>";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Products-Admin dashboard</title>



    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>

<body class="bg-light">
    <div class="container mt-3 w-50 m-auto">
        <h1 class="text-center">Insert Products</h1>

        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- title -->
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 ">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4">
                <select name="product_category" id="" class="form-select">
                    <option value="">select category</option>
                    <?php
                    $select_query = "Select * from `categories`";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value=' $category_id'>$category_title</option>";
                    }

                    ?>


                </select>
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 mb-4 w-100 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">select brand</option>
                    <?php
                    $select_query = "Select * from `brands`";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value=' $brand_id'>$brand_title</option>";
                    }

                    ?>
                </select>
            </div><br>

            <!-- image 1 -->
            <div class="form-outline mb-4 w-100 m-auto">
                <label for="product_image1" class="form-label">product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div><br>
            <!-- image 2 -->
            <div class="form-outline mb-4 w-100 m-auto">
                <label for="product_image2" class="form-label">product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div><br>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-100 m-auto">
                <label for="product_image3" class="form-label">product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div><br>
            <!-- price -->
            <div class="form-outline mb-4 ">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- price -->
            <div class="form-outline mb-4 ">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products">
            </div>

        </form>
    </div>

</body>

</html>