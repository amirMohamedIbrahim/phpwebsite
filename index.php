<! doctype php>
<html lang="en">

<?php
    
    include("head.php");
    include("nav.php");
    
?>

<!--Featured products and services------------------------------------------->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
    <!--Bottom Indicators--->
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-item active">
                <img width="100%" src="image/Touch.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">HBQ-i18 Touch White/black</h1>
                    <h3>Best selling bluetooth Earbuds of 2018</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Click me for the special price</button>
                    <button type="button" class="btn btn-primary btn-lg">Learn more</button>
                </div>
                </div>
            
            <div class="carousel-item">
                <img width="100%" src="image/Earbud_mini.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Earbud_mini</h1>
                    <h3>Fire sale!!!</h3>
                    <button type="button" class="btn btn-primary btn-lg">Add me to the cart</button>
                </div>
            </div>
            <div class="carousel-item">
                <img width="100%" src="image/demo.jpg">
                <div class="carousel-caption">
                    <h3>We support bulk order</h3>
                    <button type="button" class="btn btn-primary btn-lg">Click here for special pricing</button>
                </div>
            </div>
        </div>
                <!--Side indicators-->
                 <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
    </div>
    
    <?php
        //product price
        include("price.php");
    ?>
        <?php if($member): ?>
        <!--Member only messages section-->
        <section class="member">
            <div class="col-xl-6">
                <p><?php echo "$member_message" ?><br>
                    <span>Members always save 10&#37; off of the original price. For a limited time&#44; all order over &#36;35 get a free two-day shipping.</span>
            </p>
           </div>     
        </section>
        <?php endif;  ?>
        

        <?php if(!$member): ?>
<!--Non-member only messages------------------------------------->
        <section class="member">
            <div class="col-xl-6">
                <p><?php echo "$member_message" ?><br>
                    <span>Become a 
                        member today to save 10&#37; of your order automatically. No coupon to clip and no minimum order. For a limited time&#44; join today to get a free two-day shipping and &#36;100 Visa gift while supply last.</span>
            </p>
           </div>     
        </section>
        <?php endif;  ?>
             
<!---Product column section------------------------------------>
        <section id="product_list">
        <div class="container-fluid">
            <div class="row padding">  
                <div class="col-md-4">
                    <div class="card">
                        <a href="productInfo/HBQ-i8.php" target="_blank"><img width="100%" class="image" src="image/Touch.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">HBQ-i18 Touch white by TWS</h4>
                            <?php echo "<h5>$price_ht</h5>"; ?>
                            Select Quantity: <input size="1.5" type="number" value="1">
                            <button type="button" style="animation:3 ">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card">
                        <img class="image" src="image/i8-mini.jpg" width="75%">
                        <div class="card-body">
                            <h4 class="card-title">i8-mini by TWS</h4>
                            <?php echo "<h5>$price_i8</h5>"; ?>
                            Select Quantity: <input size="1.5" type="number" value="1">
                            <button type="button" style="animation:3 ">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card">
                        <img class="image" src="image/Earbud_mini.jpg" width="80%">
                        <div class="card-body">
                            <h4 class="card-title">Earbud mini by TWS</h4>
                            <?php echo "<h5>$price_i8</h5>"; ?>
                            Select Qauntity: <input size="1.5" type="number" value="1">
                            <button type="button" style="animation:3 ">Add to cart
                            </button>
                        </div>
                    </div>
                </div>                 <div class="col-md-4">
                    <div class="card">
                        <img class="image" src="image/IMG_1536.jpg" width="100%">
                        <div class="card-body">
                            <h4 class="card-title">HBQ-i18 Touch Black by TWS</h4>
                            <?php echo "<h5>$price_ht</h5>"; ?>
                            Select Quantity: <input size="1.5" type="number" value="1">
                            <button type="button" style="animation:3 ">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card">
                        <img class="image" src="image/i8-mini-white.jpg" width="80%">
                        <div class="card-body">
                            <h4 class="card-title">i8-mini white by TWS</h4>
                            <?php echo "<h5>$price_i8</h5>"; ?>
                            Select Qauntity: <input size="1.5" type="number" value="1">
                            <button type="button" style="animation:3 ">Add to cart
                            </button>
                        </div>
                    </div>
                </div>             
            </div>
        </div>         
    </section>
<?php
  //load footer
    include("footer.php")
?>
    </body>
</html>