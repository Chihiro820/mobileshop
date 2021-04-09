<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobile";
// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
//Adding categoty
    $category="";
    $added="";
    $error="";
    if(isset($_POST['add'])){
        $category=$_POST['category'];
        $sql = "INSERT INTO `categories` (`c_name`) VALUES ('$category')";
        if($conn->query($sql)=== TRUE){
            $added="New categry added";
        }else{
            $error="Something wrong. Try again";
        }
    }
 //updating category
$new_category=$category="";
if(isset($_POST['update'])){
    $new_category=$_POST['new_category'];
    $category=$_POST['category'];
    $sql4="UPDATE `categories` SET `c_name`='$new_category' WHERE c_id=$category";
    if($conn->query($sql4)===TRUE){
        $update ="Update Success!!";
    }else{
        echo $conn->error;
    }
}
//Deleting category
$delete_category="";
if(isset($_POST['delete'])){
    $delete_category=$_POST['delete_category'];
    $sql5="DELETE FROM `categories` WHERE c_id=$delete_category";
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
    <title>category.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  
  
<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
<!--Header---> 
    <header class="mb-auto">
        <div>
        <h3 class="float-lg-start mb-5">
      Lasses Mobile Shop
 <!----Phone icon--->     
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
      </h3>
        <nav class="nav nav-masthead float-lg-end">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="category.php">Category</a>
            <a class="nav-link " href="products.php">Products</a>
        </nav>
        </div>
  </header>
<main>
            <h1>Category</h1>
    <hr><br>     
    <div class="container cover-container">
            <!--Adding category form-->
            <h3 class="mb-3">Add category</h3>
            <p>You can add brand name of your favorite phone here!!</p>
            <form method="post">
                <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Category Name" name="category" required>
                        <button class="btn btn-outline-secondary text-white" type="submit" name="add">Add</button>
                </div>
            </form>
                <p class="mt-3" style="color:#f08"><?php echo $added ?></p>
                <p><?php echo $error ?></p>
                    
            <div class="row mt-5">  
            <!--Updating categoty form-->
                <div class="col-md-6">
                    
                        <h3>Update</h3>
                        <p>You can Updete categoryhere</p>
                        <div class="row">
                <form method="post">
                    <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Update" name="new_category" required>
            <!--fetch date from data to select which date shold be updated--->                
                    <select name = "category" class="form-select form-select-sm">
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
                            <button class="btn btn-outline-secondary text-white" type="submit" name="update">Update</button>
                    </div>
                </form>
                            <p class="mt-2" style="color:#f08"><?php echo $update?></p>
                </div>
                </div>
                                
            <!--Deleting category form--> 
                <div class="col-md-6">
                    <h3>Delete</h3>
                    <p>You can delete category here</p>
                    <form method="post">
                        <div class="input-group ">
            <!--fetch date from data to select which date shold be deleted--->    
                                <select name = "delete_category" class="form-select form-select-sm">
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
        $sql2 = "SELECT * FROM categories";
        $result = $conn->query($sql2);
        if($result->num_rows > 0){
            echo "<h3 class='mt-5'>Product categoty list</h3>";
            echo "<table class='table table-dark table-hover'><th><tr><td>Category Name</td><td>Last Updated Date & Time</td></tr></th>";
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["c_name"]."</td><td>".$row["created_date"]."</td></tr>";
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