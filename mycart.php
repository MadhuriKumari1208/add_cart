<?php include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12 text-center border rounded bg-light my-5"> >
               <h1>MY CART</h1>
            </div>
 
            <div class="col-lg-9">
            <table class="table">
 <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
   <?php 
   $total=0;
   if(isset($_SESSION['cart']))
   {
    foreach($_SESSION['cart']as $key => $value)
    {
        $total=$total+$value['Price'];
            echo"
           <tr>
           <td>$value[Item_Name]</td>
           <td><input class='text-center' type='number' value='$value[Quantity]' min='0' max='1'</td>
           <td>$value[Price]</td>
          
           
         

           </tr>
           ";
        
    }
   }

   ?> 
  </tbody>
</table>
            </div>
       <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
            <h4>Total:</h4>
            <h5 class="text-right"><?php echo $total ?></h5>
        </div>
       </div>
      </div>
    </div>
</body>
</html>