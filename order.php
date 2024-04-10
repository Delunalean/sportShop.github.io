<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shop Order</title>

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
                        <a href="index.html">Home</a>
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

    <!-- Order Form Section Starts Here -->
    <section class="order-form">
        <div class="container">
            <h2 class="text-center">Fill this form to confirm your order.</h2>

            <form action="#" class="order" onsubmit="return confirmOrder()">
                <fieldset>
                    <legend>Selected Product</legend>

                    <div class="product-img">
                        <img src="images/product-image.jpg" alt="Product Image" class="img-responsive img-curve">
                    </div>

                    <div class="product-desc">
                        <h3>Product Name</h3>
                        <p class="product-price">$29.99</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Your Full Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Your Phone Number" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Your Email Address" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="5" placeholder="Your Address" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Order Form Section Ends Here -->

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

    <!-- JavaScript for Confirming Order -->
    <script>
        function confirmOrder() {
            // Get form values
            let productName = document.querySelector('.product-desc h3').innerText;
            let productPrice = document.querySelector('.product-price').innerText;
            let quantity = document.querySelector('[name="qty"]').value;
            let fullName = document.querySelector('[name="full-name"]').value;
            let phoneNumber = document.querySelector('[name="contact"]').value;
            let email = document.querySelector('[name="email"]').value;
            let address = document.querySelector('[name="address"]').value;

            // Construct confirmation message
            let confirmationMessage = `
                Confirm Order:
                Product: ${productName}
                Price: ${productPrice}
                Quantity: ${quantity}
                Total: ${parseFloat(productPrice.replace('$', '')) * parseInt(quantity)}
                Delivery Details:
                Full Name: ${fullName}
                Phone Number: ${phoneNumber}
                Email: ${email}
                Address: ${address}
            `;

            // Display confirmation message
            alert(confirmationMessage);

            // Prevent form submission
            return false;
        }
    </script>
    <!-- JavaScript Ends Here -->

</body>
</html>
