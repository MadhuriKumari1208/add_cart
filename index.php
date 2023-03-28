<?php include("header.php");


 ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>


 <div class="container">
    <div class="row">
        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
           <div class="card">
                <img src="images/1.jpg" class="card-img-top">
                <div class="card-body" text=left >
                  <h5 class="card-title">Bag 1</h5>
                  <p class="card-text">Price: Rs.450</p>
                   <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button> 
                   <input type="hidden" name="Item_Name" value="Bag 1"> 
                   <input type="hidden" name="Price" value="450"> 
                    
                </div>
            </div>
            </form>
            
        </div>
        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
           <div class="card">
                <img src="images/2.jpg" class="card-img-top">
                <div class="card-body" text=left >
                  <h5 class="card-title">Bag 2</h5>
                  <p class="card-text">Price: Rs.650</p>
                   <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button> 
                   <input type="hidden" name="Item_Name" value="Bag 2"> 
                   <input type="hidden" name="Price" value="650"> 
                    
                </div>
            </div>
            </form>
            
        </div>
        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
           <div class="card">
                <img src="images/3.jpg" class="card-img-top">
                <div class="card-body" text=left >
                  <h5 class="card-title">Bag 3</h5>
                  <p class="card-text">Price: Rs.980</p>
                   <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button> 
                   <input type="hidden" name="Item_Name" value="Bag 3"> 
                   <input type="hidden" name="Price" value="980"> 
                    
                </div>
            </div>
            </form>
            
        </div>
        <div class="col-lg-3">

        <form action="manage_cart.php" method="POST">
           <div class="card">
                <img src="images/4.jpg" class="card-img-top">
                <div class="card-body" text=left >
                  <h5 class="card-title">Bag 4</h5>
                  <p class="card-text">Price: Rs.950</p>
                   <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button> 
                   <input type="hidden" name="Item_Name" value="Bag 4"> 
                   <input type="hidden" name="Price" value="950"> 
                    
                </div>
            </div>
        </form>
            
         </div>   
    </div>
    
</div>   
</body>
</html>