<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Hotel | Depok</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="style/app.css">
</head>

<body>

    <!-- header section starts -->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#packages">Room</a>
            <a href="#services">Service</a>
            <a href="#gallery">Facility</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
            <a href="#book">Reserve</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    <!-- header section ends -->

    <!-- login form container -->
    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="">
            <h3>Login</h3>
            <input type="email" class="box" placeholder="Enter Your Email">
            <input type="password" class="box" placeholder="Enter Your Email">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>Forgot Password? <a href="#">Click Here</a></p>
            <p>Don't have and account? <a href="#">Register now</a></p>
        </form>
    </div>
    <!-- home section starts -->

    <section class="home" id="home">
        <div class="content">
            <h3>The Dojo Hotel</h3>
            <p>Discover new places with us, luxury awaits</p>
            <a href="#" class="btn">See More</a>
        </div>
        <div class="video-container">
            <video src="img/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>
    <!-- home section ends -->

    <!-- packages section starts -->

    <section class="packages" id="packages">
        <h1 class="heading">Rooms</h1>

        <div class="box-container">
            <div class="box">
                <img src="img/deluxe.jpg" alt="">
                <div class="content">
                    <h3>Deluxe Room</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">RP.200.000<span>RP.500.000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/superior.jpg" alt="">
                <div class="content">
                    <h3>Superior Room</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">RP.300.000<span>RP.600.000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="img/suite.jpg" alt="">
                <div class="content">
                    <h3>Suite Room</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">RP.150.000<span>RP.300.000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>
        </div>
    </section>


    <!-- packages section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">Services</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Five Star Hotels</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Interesting Facility</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
            </div>
        </div>
    </section>


    <!-- services section ends -->

    <!-- facility section  -->
    <section class="facility" id="facility">
        <h1 class="heading">Facility</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/pool.jpg" alt="">
                <div class="content">
                    <h3>Swimming Pool</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="img/meeting.jpg" alt="">
                <div class="content">
                    <h3>Meeting Rooms</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="img/restaurant.jpg" alt="">
                <div class="content">
                    <h3>Restaurant</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- falicity section ends -->

    <!-- review section -->
    <section class="review" id="review">
        <h1 class="heading">
            What They Say?
        </h1>
        <div class="swiper mySwiper review-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/women2.jpg" alt="">
                        <h3>Rahma</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/man.jpg" alt="">
                        <h3>Samsudin</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/women1.jpg" alt="">
                        <h3>Siti</h3>
                        <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                            farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->

    <!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading">Contact</h1>
        <div class="row">
            <div class="img">
                <img src="img/contact-img.svg" alt="">
            </div>
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Number">
                    <input type="text" placeholder="Subject">
                </div>
                <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>
    <!-- contact section -->

    <!-- book section  -->
    <section class="book" id="book">
        <h1 class="heading">Reservation</h1>
        <div class="row">
            <form action="">
                <div class="inputBox">
                    <h3>Type Room</h3>
                    <input type="text" placeholder="Deluxe Room">
                </div>
                <div class="inputBox">
                    <h3>Check-In Date</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>Check-Out Date</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
        </div>
    </section>
    <!-- book section ends -->

    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>About us</h3>
                <p>Enter Dojo Hotel, your preferred place for a very pleasant stay in Depok. Enjoy and relax with our 128 exclusively designed modern guest rooms</p>
            </div>
            <div class="box">
                <h3>Locations</h3>
                <p>Jln Bhakti Abri Gg Bp Saut Depok, Jawa Barat Indonesia</p>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">Home</a>
                <a href="#">Room</a>
                <a href="#">Service</a>
                <a href="#">Facility</a>
                <a href="#">Review</a>
                <a href="#">Contact</a>
                <a href="#">Reserve</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">Likedin</a>
            </div>
        </div>
        <h1 class="credit">Created by<span> Team Tubruk</span> | all rights reserved!! </h1>
    </section>
     <!-- footer ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link -->
    <script src="js/main.js"></script>
</body>
</html>
