<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('item Already Added');
                window.location.href='index.php';
                </script>";
               

            }
            else
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('item  Added');
            window.location.href='index.php';
            </script>";
           
            }
        }
        else
        {
        $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
        echo"<script>
        alert('item  Added');
        window.location.href='index.php';
        </script>";

        }
        

    }
   
     
}
?>