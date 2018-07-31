<?php 
include("head.php");
include("nav.php");
$somearrays = ["HBQ-i8","Touch","Button"];
$cart= count[$somearrays];
$productList = [$cart];
$message = "No item added to the cart";

//Check whether a shopping cart is empty or not
if (!$cart){
    echo "<h4>$message</h4>";
 }else
    {
    echo "<p>List of product&#40;s&#41;:$somearrays[2] </p><br>";
    echo "<button>Checkout</button>";
    }

?>
<form id="checkout">
    <label>Product name</label>
</form>
<?php
//load footer
include("footer.php");

?>