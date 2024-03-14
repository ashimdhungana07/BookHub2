<?php
// Check if the URL path contains "/admin"
if ($_SERVER['REQUEST_URI'] === "/admin") {
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHub</title>

    <link rel="stylesheet" href="./web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./swiper-bundle.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> -->

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.angularjswiki.com/fontawesome/fa-blog/">

</head>

<body>
    <!-- header sections starts -->

    <header class="header">

        <div class="header-1">
            <a href="#" class="logo" style="cursor:pointer;"><i class="fa fa-book"></i>BookHub</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fa fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fa fa-search"></div>
                <a href="#" class="fa fa-heart"></a>
                <a href="cart.html" class="fa fa-shopping-cart"></a>
                <div id="login-btn" class="fa fa-user"></div>

            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#featured">Featured</a>
                <a href="#arrivals">Arrivals</a>
                <a href="#reviews">Reviews</a>
                <a href="#blogs">Blogs</a>
            </nav>
        </div>
    </header>

    <!-- header sections ends -->


    <!-- bottom navbar starts -->

    <nav class="bottom-navbar">
        <a href="#home" class="fa fa-home"></a>
        <a href="#featured" class="fa fa-list"></a>
        <a href="#arrivals" class="fa fa-tags"></a>
        <a href="#reviews" class="fa fa-comments"></a>
        <a href="#blogs" class="fa fa-flag"></a>
    </nav>

    <!-- bottom navbar ends -->


    <!-- Login form starts -->
    <div class="form-container login-form-container">
        <div id="close-login-btn">&#10060;</div>
        <form action="Login.php" method="post">
            <h3>sign in</h3>
            <span>username</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="email">
            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember-me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="#signin-btn">create one</a></p>
        </form>
    </div>
    <!-- Login form ends -->


    <!-- Sign-up form starts -->
    <div class="form-container signin-form-container">
        <div id="close-login-btn">&#10060;</div>
        <form action="signup.php" method="post">
            <h3>Sign Up</h3>
            <span>Username</span>
            <input type="email" name="email" class="box" placeholder="Enter your email" id="email">
            <span>Password</span>
            <input type="password" name="password" class="box" placeholder="Enter your password" id="password">
            <input type="password" name="cpassword" class="box" placeholder="Confirm your password" id="cpassword">
            <input type="submit" value="sign Up" class="btn">
        </form>
    </div>
    <!-- Sign-up form ends -->


    <!-- Home part starts -->

    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>upto 75% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem esse adipisci debitis sit officia, quibusdam eius aliquid doloribus repellendus? Mollitia repellat perferendis alias esse!</p>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="Assets/1.jpeg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="Assets/2.jpeg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="Assets/3.jpeg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="Assets/4.jpeg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="Assets/5.jpeg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="Assets/6.jpeg" alt=""></a>
                </div>
                <img src="Assets/stand1.png" class="stand" alt="">
            </div>
        </div>
    </section>
    <!-- Home part ends -->

    <!-- icons sections starts -->

    <section class="icons-container">
        <div class="icons">
            <i class="fa fa-paper-plane"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>Order over $111</p>
            </div>
        </div>
        <div class="icons">
            <i class="fa fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100% secure payment</p>
            </div>
        </div>
        <div class="icons">
            <i class="fa fa-download"></i>
            <div class="content">
                <h3>Easy download</h3>
                <p>PDF and EPUB</p>
            </div>
        </div>
        <div class="icons">
            <i class="fa fa-headphones"></i>
            <div class="content">
                <h3>24/7 hr</h3>
                <p>Call us anytime</p>
            </div>
        </div>
        <div class="icons">
            <i class="fa fa-book"></i>
            <div class="content">
                <h3>Customized Reading</h3>
                <p>Featured fonts and designs</p>
            </div>
        </div>

    </section>
    <!-- icons sections ends -->

    <!-- featured sections starts -->

    <section class="featured" id="featured">
        <h1 class="heading">
            <span>featured books</span>
        </h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/12.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/14.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/15.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/16.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/17.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/24.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/23.jfif" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/22.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="Assets/11.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">Rs.1500 <span>Rs.2000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- featured sections ends -->

    <!-- newsletter sections starts -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest updates</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </section>

    <!-- newsletter section ends -->

    <!-- arrivals sections starts -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading" style="margin-top: 5.5rem; margin-bottom: 5rem;">
            <span>new arrivals</span>
        </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/1.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/4.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/5.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/6.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="swiper arrivals-slider" style="margin-bottom: 7rem;">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/7.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/8.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/9.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/10.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/11.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="Assets/12.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99<span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </section>


    <!-- arrivals sections ends -->

    <!-- Deal sections starts -->
    <section class="deal">
        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, eius quas sequi laudantium necessitatibus fugit incidunt error eaque, quisquam, perferendis corrupti amet ratione debitis aut id. Mollitia beatae eius quaerat.
            </p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
            <img src="Assets/Deal.jpeg" alt="">
        </div>
    </section>
    <!-- Deal section ends -->

    <section class="reviews" id="reviews">
        <h1 class="heading"><span>client's reviews</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="Images/People1.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People2.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People3.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People4.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People5.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People5.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="Images/People4.jpeg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda minus consequatur, eveniet quidem ullam velit voluptatem consequuntur? Fugiat natus voluptatibus autem beatae itaque maxime rerum consequatur vitae rem? Praesentium, eum.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Our locations</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Nepal</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>India</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>USA</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Russia</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>France</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>Africa</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Featured</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Arrivals</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Reviews</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-arrow-right"></i>Account Info</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Ordered Items</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Payment Method</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Our services</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+9779824446666</a>
                <a href="#"><i class="fas fa-phone"></i>+9779823334444</a>
                <a href="#"><i class="fas fa-envelope"></i>bookhub@gmail.com</a>
                <img src="Assets/Map.jpeg" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit">
            created by <span>KCC</span> | all rights reserved ! </div>

    </section>

    <!-- Footer section ends -->

    <!-- Loader -->

    <div class="loader-container">
        <img src="Assets/loader-img.gif" alt="">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>