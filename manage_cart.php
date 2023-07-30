<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['ADD_TO_CART']))
    {
        if(isset($_SESSION['cart']))
        {
        $myitems=array_column($_SESSION['cart'],'Item_Name');
        if(in_array($_POST['Item_Name'],$myitems))
        {
            echo"<script>alert('Item Already Added');
            window.location.href='index1.php';
            </script>";
        }
        else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>alert('Item Added');
                window.location.href='index1.php';
                </script>";
    
        }
     
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>alert('Item Added');
            window.location.href='index1.php';
            </script>";



        }
    }
    if(isset($_POST['REMOVE_ITEM']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            print_r($key) ;
            if($value['Item_Name']==$_POST['Item_Name'])
            {

                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>alert('Item Removed ');
            window.location.href='mycart.php';
            </script>";
            }
        }
    }
}
?>