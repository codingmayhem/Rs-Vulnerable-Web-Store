<?php
                                    session_start();

                                    $userinfo = array(
                                                    'john.doe@tbhmail.tld'=>'watermelon5',
                                                    'admin'=>'admin'
                                                    );

                                    if(isset($_GET['logout'])) {
                                        $_SESSION['username'] = '';
                                        header('Location:  ' . $_SERVER['PHP_SELF']);
                                    }

                                    if(isset($_POST['username'])) {
                                        if($userinfo[$_POST['username']] == $_POST['password']) {
                                            $_SESSION['username'] = $_POST['username'];
                                        }else {
                                            //Invalid Login
                                        }
                                    }
                                    ?>
                                    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - TBH Store</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v1/toolkit.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">TBH Store</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <div data-reflow-type="product-search"></div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Store</a></li>
                    <li class="nav-item"><a class="nav-link active" href="shopping-cart.php?logout=1">My Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                </div>
                <div class="content">
                    <div class="row g-0">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <br>         
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Black T-Shirt</a>
                                            <div class="product-specs">
                                                <div><span>Size:&nbsp;</span><span class="value">14 XL</span></div>
                                                <div><span>Fit:&nbsp;</span><span class="value">NOT slim fit</span></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 price"><span>$50</span></div>
                                    </div>
                                </div>
                                <div class="product">
				<?php if($_SESSION['username']): ?>
				<h3>Your Delivery Details</h3>
				<p>76 Fake Street,<br>Fake Town,<br>56356,<br>TBH Land</p>
				<?php endif; ?>
				</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                            
                                <h4><span class="text">Subtotal</span><span class="price">$50</span></h4>
                                <h4><span class="text">Shipping</span><span class="price">$6.90</span></h4>
                                <h4><span class="text">Total</span><span class="price">$56.90</span></h4>

                
                            <h3>Please login to continue</h3>
                            <?php if($_SESSION['username']): ?>
                                    <style>
                                        form.my-account {
                                        visibility: hidden;
                                        }

                                        button.checkout-continue {
                                            visibility: visible;
                                            }
                                    </style>
                                    <p>Welcome back <?=$_SESSION['username']?>! You can now place your order using the details we have saved for you</p>
                                    
                                    <button class="checkout-continue btn btn-primary btn-lg d-block w-100" onclick="placeOrder()" type="button">Place order</button>
                                    <br><p><a href="?logout=1">or Logout</a></p>
                                    <script>
                                        function placeOrder() {
                                        alert("Thank you for your order! Your order has been placed using the account details we have on file for you. Please expect your order in 5-7 business days");
                                        location.href = 'shopping-cart.php?logout=1';
                                    }
                                        </script>
                                <?php endif; ?>
                                <form class="my-account" name="login" action="" method="post">
                                    <input class="form-control type="text" placeholder="Username / Email" name="username" value="" /><br />
                                    <input class="form-control type="password" placeholder="Password" name="password" value="" /><br />
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login" />
                                </form>

                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2022 TBH Store</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.reflowhq.com/v1/toolkit.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

