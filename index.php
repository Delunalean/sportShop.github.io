<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shop Website</title>

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
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="products.html">Products</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- Product Search Section Starts Here -->
    <section class="product-search text-center">
        <div class="container">
            <form action="product-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Products.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
    <!-- Product Search Section Ends Here -->
<!-- Categories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Categories</h2>

        <a href="category-products.php?category=football">
            <div class="box-3 float-container">
                <img src="images/spikes.jpg" alt="Football" class="img-responsive img-curve">
                <h3 class="float-text text-white">Football</h3>
            </div>
        </a>

        <a href="category-products.php?category=tennis">
            <div class="box-3 float-container">
                <img src="images/rackets.jpg" alt="Tennis" class="img-responsive img-curve">
                <h3 class="float-text text-white">Tennis</h3>
            </div>
        </a>

        <a href="category-products.php?category=basketball">
            <div class="box-3 float-container">
                <img src="images/jersey.jpg" alt="Basketball" class="img-responsive img-curve">
                <h3 class="float-text text-white">Basketball</h3>
            </div>
        </a>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->


    <!-- Product Menu Section Starts Here -->
    <section class="product-menu">
        <div class="container">
            <h2 class="text-center">Product Menu</h2>

            <?php
            // Sample array of products (replace with your actual data)
            $products = array(
                array("name" => "Football", "price" => "$29.99", "image" => "images/product-football.jpg"),
                array("name" => "Tennis Racket", "price" => "$59.99", "image" => "images/product-tennis.jpg"),
                array("name" => "Basketball", "price" => "$19.99", "image" => "images/product-basketball.jpg")
            );

            // Display products
            foreach ($products as $product) {
                echo '<div class="product-menu-box">';
                echo '<div class="product-menu-img">';
                echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '" class="img-responsive img-curve">';
                echo '</div>';
                echo '<div class="product-menu-desc">';
                echo '<h4>' . $product["name"] . '</h4>';
                echo '<p class="product-price">' . $product["price"] . '</p>';
                echo '<br>';
                echo '<a href="order.php?product=' . urlencode($product["name"]) . '" class="btn btn-primary">Order Now</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Product Menu Section Ends Here -->

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
