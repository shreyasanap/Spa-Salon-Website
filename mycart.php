<?php include("header.php");



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <style>
        button a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Service Price</th>
                            <th scope="col">Number of persons</th>
                            <th scope="col">Remove</th>
                            <th scope="col">Total</th>

                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                    
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr=$key+1;
                                
                                echo "
                                        <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                        <td><input class='text-center iquantity' onchange='subTotal()' type='number' min='1' max='10' value='$value[Quantity]'></td>
                                        <td>
                                        <form action='manage_cart.php' method='POST'>
                                        <button name='REMOVE_ITEM' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'></form>
                                        </td>
                                        <td class='itotal'></td>

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
                    <h4>Grand Total:</h4>
                    <h5 class="text-right " id="gtotal">
                       
                    </h5>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash On delivery only available
                        </label>
                    </div>
                    </br>
                    <form action="checkout.php">
                        <button class="btn btn-info"> <a href="<?php echo isset($_SESSION['cart']) ? 'checkout.php' : 'login.php'; ?>"
                            <?php if (!isset($_SESSION['cart'])) { ?>
                                onclick="alert('Pls check the order')" <?php } ?>>
                                Checkout for booking slots</button>
                   
                    </form>


                </div>


            </div>
        </div>
 
   
    <script>
        var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;


    }
    subTotal();
</script>
</body>


</html>