<?php
//including connect file
include('./includes/connect.php');


//getting products
function getproducts(){
        global $con;
       
        $select_query = "Select * from `products`order by rand()";
        $result_query = mysqli_query($con, $select_query);
       
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_id = $row['product_id'];
          $product_title = $row['product_title'];
          $product_description = $row['product_description'];
          $product_image1 = $row['product_image1'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];
          echo "  <div class='col-md-4 mb-2'>
  <div class='card'>
    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_price</p>
      <a href='#' class='btn btn-dark'>Add to cart</a>
      <a href='#' class='btn btn-light'>View more</a>
    </div>
  </div>
</div>";
        }
      }


//display brands in sidenav
function getbrands(){
  global $con;
  $select_brands = "Select * from `brands`";
  $result_brands = mysqli_query($con, $select_brands);
  $row_data = mysqli_fetch_assoc($result_brands);
  
  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo "<li class='nav-item bg-light'>
   <a href='index.php?brand=  $brand_id' class='nav-link text-dark'>$brand_title</a>
 </li>";
  }
}

//displaying categories in the sidenav
function getcategories(){
  global $con;
  $select_categories = "Select * from `categories`";
  $result_categories = mysqli_query($con, $select_categories);
  $row_data = mysqli_fetch_assoc($result_categories);
  // echo $row_data['brand_title'];
  while ($row_data = mysqli_fetch_assoc($result_categories)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    echo "<li class='nav-item'>
   <a href='index.php?category= $category_id' class='nav-link text-dark'> $category_title</a>
 </li>";
  }
}
//searching products functions
function search_product(){
    global $con;
    $select_query = "Select * from `products`order by rand()";
    $result_query = mysqli_query($con, $select_query);
   
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "  <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_price</p>
  <a href='#' class='btn btn-dark'>Add to cart</a>
  <a href='#' class='btn btn-light'>View more</a>
</div>
</div>
</div>";
    } 
}


//getting all products
function get_all_products(){
  global $con;
  $select_query = "Select * from `products`order by rand()";
  $result_query = mysqli_query($con, $select_query);
 
  while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    echo "  <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_price</p>
<a href='#' class='btn btn-dark'>Add to cart</a>
<a href='#' class='btn btn-light'>View more</a>
</div>
</div>
</div>";
  }
}













//view details function
function view_details(){
  global $con;
  // condition to check isset or not
  if(isset($_GET['product_id'])){
    if(isset($_GET['category'])){
      if(isset($_GET['brand'])){
        $product_id=$_GET['product_id'];
  $select_query = "Select * from `products` where product_id=$product_id";
  $result_query = mysqli_query($con, $select_query);
 
  while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    echo "  <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_price</p>
<a href='#' class='btn btn-dark'>Add to cart</a>
<a href='#' class='btn btn-light'>View more</a>
</div>
</div>
</div>

<dic class='col-md-8'>
        <div class='row'>
            <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>Related Products</h4>
            </div>
            <div class='col-md-6'>
            <img src='./image/image1.jpg' class='card-img-top' alt='$product_title'>
            </div>
            <div class='col-md-6'>
            <img src='./image/image1.jpg' class='card-img-top' alt='$product_title'>
            </div>
        </div>
      </dic>

";
  }
}
}
  }
}





?>