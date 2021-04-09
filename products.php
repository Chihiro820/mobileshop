<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobile";
// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
//Adding products
    $p_name=$p_model=$p_quantity=$add_product=$p_price="";
    $added="";
    $error="";
    if(isset($_POST['add'])){
        $p_name=$_POST['p_name'];
        $p_model=$_POST['p_model'];
        $p_quantity=$_POST['p_quantity'];
        $add_product=$_POST['add_product'];
        $p_price=$_POST['p_price'];
        $sql = "INSERT INTO `products` (`p_name`, `p_model`, `p_quantity`, `p_price`,`p_category`) VALUES ('$p_name','$p_model','$p_quantity','$p_price','$add_product')";
        if($conn->query($sql)=== TRUE){
            $added="New product added";
        }else{
            $error="Something wrong. Try again";
            echo $conn->error;
        }
    }
 //updating products
$new_p_name=$new_p_model=$p_quantity=$new_p_price=$update_product=$update_category="";
if(isset($_POST['update'])){
    $new_p_name=$_POST['new_p_name'];
    $new_p_model=$_POST['new_p_model'];
    $p_quantity=$_POST['p_quantity'];
    $new_p_price=$_POST['new_p_price'];
    $update_product=$_POST['update_product'];
    $update_category=$_POST['update_category'];
    $sql4="UPDATE `products` SET p_name='$new_p_name',p_model='$new_p_model',p_quantity=$p_quantity,p_price='$new_p_price',p_category='$update_category' WHERE p_id=$update_product";
    if($conn->query($sql4)===TRUE){
        $update ="Update Success!!";
    }else{
        echo $conn->error;
    }
}
//Sell products
$sell_product="";
if(isset($_POST['sell'])){
        $sell_product=$_POST['sell_product'];
        $sql7 = "UPDATE `products` SET `p_quantity`=(`p_quantity`-1) WHERE p_id='$sell_product'";
        if($conn->query($sql7)===TRUE){
        $sql8= "INSERT INTO sold (p_id,sold) VALUES ('$sell_product',(sold + 1))";
        if($conn->query($sql8)===TRUE){
            $sold_success = "Sold Success!!";
    }else{
        echo $conn->error;
}}}
//Deleting category
$delete_product="";
if(isset($_POST['delete'])){
    $delete_product=$_POST['delete_product'];
    $sql5="DELETE FROM `products` WHERE p_id=$delete_product";
    if($conn->query($sql5)===TRUE){
        $delete = "Successfully Deleted!!";
    }else{
        echo $conn->error;
    }
}
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Products.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="container d-flex h-100 text-center text-white bg-dark">
    
<div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div class="container">
      <h3 class="float-lg-start mb-5">
      Lasses Mobile Shop
 <!----Phone icon--->     
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
      </h3>
      <nav class="nav nav-masthead justify-content-center float-lg-end">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link " href="category.php">Category</a>
        <a class="nav-link active " href="products.php">Products</a>
      </nav>
    </div>
  </header>

  <main>
            <h1>Products</h1>        
<hr><br>
          <div class="container cover-container">
            <!--Adding category form-->
            <h3 class="mb-3">Add product</h3>
            <p>You can add Phone products here!!</p>
            <form method="post">
                <div class="input-group ">
                        <input type="text" class="form-control m-1" placeholder="Product Name" name="p_name" required>
                        <input type="text" class="form-control m-1" placeholder="Product model" name="p_model" required>
                </div>
                 <div class="input-group">
                        <input type="text" class="form-control m-1" placeholder="Stock amount" name="p_quantity" required>
                        <input type="text" class="form-control m-1" placeholder="price" name="p_price" required>
                  </div>
              <!--fetch date from data to select which category--->                
                        <select name = "add_product" class="m-1 form-select form-select-md">
                          <?php
                            $sql3="SELECT * FROM categories";
                            $result = $conn->query($sql3);
                            $count= mysqli_num_rows($result);
                            if($count > 0){
                            while($row=$result->fetch_assoc()){
                            echo"<option value=".$row['c_id'].">".$row['c_name']."</option>";
                               }
                             }
                          ?> 
                        </select>
                        <button class="btn btn-outline-secondary text-white mt-2 btn-lg mb-5" type="submit" name="add">Add Product</button>
                
            </form>
                <p><?php echo $added ?></p>
                <p class="error"><?php echo $error ?></p>
                    
             <hr>
            <!--Updating product form-->
                <div class="mt-5">
                    
                        <h3>Update</h3><br>
                        <p>You can Updete product data here</p>
                        <div class="row">
                    <form method="post">
                <div class="input-group ">
                        <input type="text" class="form-control m-1" placeholder="Product Name" name="new_p_name" required>
                        <input type="text" class="form-control m-1" placeholder="Product model" name="new_p_model" required>
                </div>
                 <div class="input-group">
                        <input type="text" class="form-control m-1" placeholder="Stock amount" name="p_quantity" required>
                        <input type="text" class="form-control m-1" placeholder="price" name="new_p_price" required>
                  </div>
              <!--fetch date from data to select which category --->                
                        <select name = "update_category" class="m-1 form-select form-select-md">
                          <?php
                            $sql3="SELECT * FROM categories";
                            $result = $conn->query($sql3);
                            $count= mysqli_num_rows($result);
                            if($count > 0){
                            while($row=$result->fetch_assoc()){
                            echo"<option value=".$row['c_id'].">".$row['c_name']."</option>";
                               }
                             }
                          ?> 
                        </select>
                        <!---fetch data to select which product will be updated --->
                        <br>
                        <p>Select the product you want to upload</p>
                            <select name = "update_product" class="m-1 form-select form-select-lg">
                          <?php
                            $sql3="SELECT * FROM products";
                            $result = $conn->query($sql3);
                            $count= mysqli_num_rows($result);
                            if($count > 0){
                            while($row=$result->fetch_assoc()){
                            echo"<option value=".$row['p_id'].">".$row['p_name']." ".$row['p_model']." --- In stock: ".$row['p_quantity']."</option>";
                               }
                             }
                          ?> 
                        </select>
                        <button class="btn btn-outline-secondary text-white mt-2 btn-lg" type="submit" name="update">Update</button>
            </form>
                            <p class="mt-2" style="color:#f08"><?php echo $update?></p>
               
                </div>

                <hr>
            <!---Sell products-->
            <h3>Sell Products</h3>
                        <p>1 item will be sold and update stock </p>
                       <form method="post" class="input-group mb-5">
                            <select name = "sell_product" class="form-select form-select-lg">
                                <?php
                                    $sql6="SELECT * FROM products";
                                    $result = $conn->query($sql6);
                                    $count= mysqli_num_rows($result);
                                    if($count > 0){
                                    while($row=$result->fetch_assoc()){
                                      if($row['p_quantity']>0){
                                    echo"<option value=".$row['p_id'].">".$row['p_name']."  ".$row['p_model']."</option>";
                                    }}
                                    }
                                ?> 
                            </select>
                                    <button class="btn btn-outline-secondary text-white" type="submit" name="sell">Sell product</button>
                         </form>   
                         <p class="mt-2" style="color:#f08"><?php echo $nothing ?></p>
                         <p class="mt-2" style="color:#f08"><?php echo $sold_success ?></p>  

                        <hr>
            <!--Deleting products form--> 
                <div class="mt-5">
                    <h3>Delete</h3>
                    <p>You can delete product here</p>
                    <form method="post">
                        <div class="input-group ">
            <!--fetch date from data to select which date shold be deleted--->    
                                <select name = "delete_product" class="form-select form-select-lg">
                                    <?php
                                        $sql3="SELECT * FROM products";
                                        $result = $conn->query($sql3);
                                        $count= mysqli_num_rows($result);
                                        if($count > 0){
                                        while($row=$result->fetch_assoc()){
                                        echo"<option value=".$row['p_id'].">".$row['p_name']." ".$row['p_model']."</option>";
                    }
                }
                                    ?> 
                                </select>
                        <button class="btn btn-outline-danger text-white" type="submit" name="delete">Delete</button>
                        </div>
                    </form>
                    <p class="mt-2" style="color:#f08"><?php echo $delete?></p>
                    </div>
                </div> 
    </div>
    <br><hr><br>           
    <?php   
//Fetch products category data from db and show data on table
        $sql2 = "SELECT p_name,p_model,c_name,p_price,p_quantity FROM products JOIN categories ON products.p_category = categories.c_id ORDER BY categories.c_name";
        $result = $conn->query($sql2);
        if($result->num_rows > 0){   
            echo "<h3 class='mt-5'>Products list</h3>";
            echo "<table class='table table-dark table-hover'><th><tr><td>Products Name</td><td>Model</td><td>Category</td><td>Price</td><td>Quantity</td></tr></th>";
            while($row=$result->fetch_assoc()){
                if($row['p_quantity']==0){
                    $row['p_quantity']="<p class='text-danger h4'>OUT OF STOCK</p>";
                }
                echo "<tr><td>".$row["p_name"]."</td><td>".$row["p_model"]."</td><td>".$row["c_name"]."</td><td>".$row["p_price"]." SEK"."</td><td>".$row["p_quantity"]."</td></tr>";
            } 
            echo "</table>";
        }else {
            echo "No Record Found".$conn->error;
        }
    ?> 
</main>
    <footer class="text-white-50 mt-5">
    <p ><a href="https://www.chihiroy.com/" class="text-white ">chihiroy.com @ </a><?php echo date("Y");?></p>
    </footer>
</div>
</body>
</html>