<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shop Categories</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Sport Shop Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="categories.html">Categories</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- Categories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Categories</h2>

            <a href="order.html">
                <div class="box-3 float-container">
                    <img src="images/football.jpg" alt="Football" class="img-responsive img-curve">
                    <h3 class="float-text text-white">Football</h3>
                    <?php echo '<p>Order Now</p>'; ?>
                </div>
            </a>

            <a href="order.html">
                <div class="box-3 float-container">
                    <img src="images/tennis.jpg" alt="Tennis" class="img-responsive img-curve">
                    <h3 class="float-text text-white">Tennis</h3>
                    <?php echo '<p>Order Now</p>'; ?>
                </div>
            </a>

            <a href="order.html">
                <div class="box-3 float-container">
                    <img src="images/basketball.jpg" alt="Basketball" class="img-responsive img-curve">
                    <h3 class="float-text text-white">Basketball</h3>
                    <?php echo '<p>Order Now</p>'; ?>
                </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- Social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Social Section Ends Here -->

    <!-- Footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Your Name</a></p>
        </div>
    </section>
    <!-- Footer Section Ends Here -->

</body>
</html>
