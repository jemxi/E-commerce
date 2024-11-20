<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>WasteWise - Transforming Waste into Value</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">WasteWise</a>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </nav>
                <form action="loginProcess.php" method="post">
                    <div class="auth-buttons">
                        <input type="submit" class="btn btn-outline" name="signin" value="Sign In">
                        <input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1>Transforming Waste into Value</h1>
                <p>Explore sustainable solutions with our curated collection of recycled materials.</p>
                <button class="btn btn-primary">Shop Now</button>
            </div>
            <button class="hero-arrow hero-arrow-left" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button class="hero-arrow hero-arrow-right" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
            <div class="hero-slide active">
                <img src="wat.jpg" alt="Slide 1">
            </div>
            <div class="hero-slide">
                <img src="biogas.jfif" alt="Slide 2">
            </div>
            <div class="hero-slide">
                <img src="light.jpg" alt="Slide 3">
            </div>
        </section>

        <section class="featured-products">
            <div class="container">
                <h2 class="section-title">Featured Products</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="bote.png" alt="Bottle" class="image">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Bottle</h3>
                            <p class="product-price">₱100.00</p>
                            <a href="login.html"><button class="btn btn-primary">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="bakal.png" alt="Bakal">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Bakal</h3>
                            <p class="product-price">₱200.00</p>
                            <a href="login.html"><button class="btn btn-primary">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="jar.jpg" alt="Jar">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Jar</h3>
                            <p class="product-price">₱300.00</p>
                            <a href="login.html"><button class="btn btn-primary">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="cans.jpg" alt="Cans">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Cans</h3>
                            <p class="product-price">₱400.00</p>
                            <a href="login.html"><button class="btn btn-primary">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="special-offer">
            <div class="container">
                <h2>Special Offer</h2>
                <p>Get 30% Off on New Arrivals</p>
                <button class="btn btn-primary">Shop Sale</button>
            </div>
        </section>

        <section class="customer-reviews">
            <div class="container">
                <h2 class="section-title">Customer Reviews</h2>
                <div class="reviews-grid">
                    <div class="review-card">
                        <div class="stars">★★★★★</div>
                        <p class="review-text">"Great quality and fast shipping!"</p>
                        <p class="reviewer-name">Emm</p>
                    </div>
                    <div class="review-card">
                        <div class="stars">★★★★☆</div>
                        <p class="review-text">"Love the designs, will buy again."</p>
                        <p class="reviewer-name">Lumang</p>
                    </div>
                    <div class="review-card">
                        <div class="stars">★★★★★</div>
                        <p class="review-text">"Excellent customer service!"</p>
                        <p class="reviewer-name">Selrahc</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter">
            <div class="container">
                <h2>Subscribe to Our Newsletter</h2>
                <p>Sign up and get 10% off your first order</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Explore sustainable solutions with our curated collection of recycled materials.</p>
                </div>
                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>
