<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee shop website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">$4.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.jpg" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">$8.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.jpg" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">$5.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.jpg" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">$10.99/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Ceylon Coffee</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Eaque neque optio autem ratione totam, id tempora rem molestias sint dolores
                  cupiditate enim, temporibus suscipit possimus reprehenderit ut eius. Accusamus, aut.
            </p>
            <a href="#" class="btn">Check Out</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>what makes our coffee special?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora
                    ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil
                    voluptas culpa! Neque consectetur obcaecati sapiente?</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> our <span>menu</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/menu-1.png" alt="">
                <h3>Fresh and Tasty</h3>
                <div class="price">$8.99 <span>14.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-2.png" alt="">
                <h3>Fresh and Tasty</h3>
                <div class="price">$10.99 <span>15.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-3.png" alt="">
                <h3>Fresh and Tasty</h3>
                <div class="price">$13.99 <span>19.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-4.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-5.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-6.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">$15.99 <span>20.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$6.99 <span>$14.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$15.99 <span>$20.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-3.png" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$15.99 <span>$20.99</span></div>
                </div>
            </div>

        </div>

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>John</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Ben</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Stokes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.
                711380157818!2d79.85593346877066!3d6.839199390540673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                .1!3m3!1m2!1s0x3ae25adf35adafe5%3A0xaaa8ab5886bb68ac!2sMount%20Lavini
                a!5e0!3m2!1sen!2slk!4v1699529050136!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 10th November, 2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 10th November, 2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 10th November, 2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-youtube"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">blogs</a>
        </div>

        <div class="credit">Copyright © 2023 <span>Thisal_Salpura</span> Channel. | All Rights Reserved.</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>