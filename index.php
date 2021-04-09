<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobile";
// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Lasses mobile shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  
<div
    class="p-5 text-center bg-image"
    style="background-image: url('https://images.unsplash.com/photo-1480694313141-fce5e697ee25?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80');
      background-position:bottom;
      background-repeat: no-repeat;
      ¨"
      
  >
<div class="container">
  
    <body class="d-flex  text-center text-white bg-dark">
        <div class="d-flex p-3 mx-auto flex-column">
        <header class="mb-auto">
    <div>
      <div>
      <h3 class="float-lg-start mb-5">
      Lasses Mobile Shop
 <!----Phone icon--->     
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
      </h3>
      <nav class="nav nav-masthead justify-content-center float-lg-end">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link " href="category.php">Category</a>
        <a class="nav-link " href="products.php">Products</a>
      </nav>
    </div>
  </header>
</div>
    <main>
      <div class="bg-dark" style="color: white;
                        font-weight: bold;
                        mix-blend-mode: screen;" >
                <h1 class="display-1 m-6 pt-3 pb-3" style="font-weight:bold;";
                        >
                        Lasses mobile shop</h1>
                        <!--List-->    
                <ul class="list-inline d-flex mt-3 justify-content-center">
                <li class="list-inline-item h5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                </svg>Free shipping on all orders</li>
                <li class="list-inline-item h5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>Surf in Sweden's best mobile network</li>
                </ul>
            </div>
<hr><br>
<!--Product infomation-->
    <div class="container text-secondary">
        <div class="row ">
<!--Number of total products in each category -->
            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card shadow h-100">
                    <img class="img-fluid card-img-top"
                        src="https://images.unsplash.com/photo-1528254609158-ae7dfaa48ab3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODR8fHNtYXJ0cGhvbmV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                        alt="">
                    <div class="card-body">
                        <h3 class="card-title">All products</h3>
                             <?php   
                        //Fetch products category data from db and show data on table
                                $sql5 = "SELECT p_name,p_model,c_name,p_price,p_quantity FROM products JOIN categories ON products.p_category = categories.c_id ORDER BY categories.c_id";
                                $result = $conn->query($sql5);
                                if($result->num_rows > 0){   
                                    echo "<table class='table table-white table-hover text-secondary'><th><tr><td class='h5'>Category</td><td class='h5'>Product</td><td class='h5'>Model</td><td class='h5'>Price</td></tr></th>";
                                    while($row=$result->fetch_assoc()){
                                        echo "<ul><td>".$row["c_name"]."</td><td>".$row["p_name"]."</td><td>".$row["p_model"]."</td><td>".$row["p_price"]." SEK"."</td></tr>";
                                    } 
                                    echo "</table>";
                                }else {
                                    echo "No Record Found".$conn->error;
                                }
                            ?> 
                    </div>

                </div>
            </div>

<!--Number of total products in each category-->
            <div class="col-md-4 col-sm-12 mb-3 mt-3">
                <div class="card shadow h-100">
                    <img class="img-fluid card-img-top "
                        src="https://images.unsplash.com/photo-1549194388-2469d59ec75c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8d2FyZWhvdXNlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                        alt="">
                    <div class="card-body ">
                        <h3 class="card-title">Number of total products</h3>
                        <?php   
                        //Fetch products category data from db and show data on table
                               $sql5 = "SELECT c_name, SUM(p_quantity) as count FROM products JOIN categories ON products.p_category = categories.c_id group by c_name ORDER BY SUM(p_quantity)";
                                $result = $conn->query($sql5);
                                if($result->num_rows > 0){   
                                    echo "<table class='table table-white table-hover text-secondary'><th><tr><td class='h5'>Category</td><td class='h5'>Total</td></tr></th>";
                                    while($row=$result->fetch_assoc()){
                                        echo "<ul><td>".$row["c_name"]."</td><td>".$row["count"]."</td></tr>";
                                    }
                                    echo "</table>";
                                }else {
                                    echo "No Record Found".$conn->error;
                                }
                            ?> 
                    </div>


                </div>
            </div>
            <!--Number of sold products -->
            <div class="col-md-4 col-sm-12 mb-3 mt-3">
                <div class="card shadow h-100">
                    <img class="img-fluid card-img-top"
                        src="https://images.unsplash.com/photo-1595246135406-803418233494?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8Ym94fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                        alt="">
                    <div class="card-body">
                        <h3 class="card-title">Sold products</h3>
                         <?php   
                        //Fetch products category data from db and show data on table
                                $sql5 = "SELECT p_name,p_model,SUM(sold)as sold FROM products JOIN sold ON products.p_id = sold.p_id GROUP BY sold.p_id";
                                $result = $conn->query($sql5);
                                if($result->num_rows > 0){   
                                    echo "<table class='table table-white table-hover text-secondary'><th><tr><td class='h5'>Product</td><td class='h5'>Model</td><td class='h5'>Quantity</td></tr></th>";
                                    while($row=$result->fetch_assoc()){
                                        echo "<ul><td>".$row["p_name"]."</td><td>".$row["p_model"]."</td><td>".$row["sold"]."</td>"."</tr>";
                                    } 
                                    echo "</table>";
                                }else {
                                    echo "No Record Found".$conn->error;
                                }
                            ?> 
                    </div>

                </div>
            </div>
          <div>   
</main>
<hr>
        <footer class="text-white-50 mt-5">
            <p ><a href="https://www.chihiroy.com/" class="text-white ">chihiroy.com @ </a><?php echo date("Y");?></p>
        </footer>
</div>
</body>
</html>