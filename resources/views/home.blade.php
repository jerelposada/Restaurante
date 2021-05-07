<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   
    <header>

        <a href="#" class="logo"><img src="images/logo-img.png" alt="logo-del-restaurante"></a>

        <div class="fas fa-hamburger" id="menu-bar"></div>

        <nav class="narbar">
            <ul>
                <li><a class="active" href="#home" >Home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#menu">menu</a></li>
                <li><a href="#popular">popular</a></li>
                <li><a href="#gallery">gallery</a></li>
                <li><a href="#order">order</a></li>
            </ul>
        </nav>

    </header>


    <section class="home" id="home">
            <div class="content" data-aos="fade-right">
                <h3> We belive good food offer great smile</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id dolor
                    labore quam error, vitae provident, officiis inventore excepturi en</p>
                <a href="#"><button class="btn">get started</button></a>

            </div>
            <div class="image" data-aos="fade-up">
                <img src="images/home-img.png" alt="imagen-alternativa" srcset="images/home-img.png">
            </div>

         
    </section>

    <section class="about" id="about">
            <div class="imagen" data-aos="fade-right">

            </div>

            <div class="content" data-aos="fade-left">
                <h3>a word about co</h3>
                <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Porro quis hic, velit officia at a repellendus! Ipsam itaque voluptas quod, ipsa ratio
                </p>
                <a href="#"><button class="btn">learn more</button></a>
            </div>
    </section>

    <section class="menu" id="menu">

    
            <h1 class="heading">our delicious <span>menu</span></h1>

            <ul class="list" data-aos="fade-down">
                <li class="btn" data-src="images/img1.jpg">breakfast</li>             
                <li class="btn active" data-src="images/img2.jpg">lunch</li>
                <li class="btn" data-src="images/img3.jpg">dinner</li>
                <li class="btn" data-src="images/img4.jpg">dessert</li>
            </ul>
  
            <div class="rows" data-aos="fade-right">
           
                <div class="image" data-aos="fade-left">
                  <img src="images/img2.jpg" id="menu-img" alt="imagen-alternativa" >
                </div>
                
                <div class="content">
                    <div class="info">
                        <h3>
                            <span>01.</span>we serve best food in the country
                        </h3>
                        <p>Lorem ipsum cupiditate, suscipit, dolorem similique esse quisquam nostrum? </p>
                    </div>

                    <div class="info">
                        <h3>
                            <span>02.</span>we serve best food in the country
                        </h3>
                        <p> sed neque voluptate quos sit assumenda quo, cupiditate, suscipit, dolorem similique esse quisquam nostrum? </p>
                    </div>

                    <div class="info">
                        <h3>
                            <span>03.</span>we serve best food in the country
                        </h3>
                        <p> neque voluptate quos sit assumenda quo, cupiditate, suscipit, dolorem similique esse quisquam nostrum? </p>
                    </div>

                    <div class="info">
                        <h3>
                            <span>04.</span>we serve best food in the country
                        </h3>
                        <p> neque voluptate quos sit assumenda quo, cupiditate, suscipit, dolorem similique esse quisquam nostrum? </p>
                    </div>
                </div><!--cierre del content-->
            </div><!--cierre del rows-->

        </section>


        <section class="popular" id="popular">
                <h1 class="heading"> most <span>popular</span> foods</h1>

                <div class="box-container">
                    <div class="box" data-aos="fade-right">
                        <img src="images/populate.jpg" alt="este es un ejmplo">
                        <h3>delicious food</h3>
                        <div class="starts">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="prince">$30.00</div>
                        <a href="#"><button class="btn" >add to cart</button></a>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <img src="images/populate2.jpg" alt="este es un ejmplo">
                        <h3>delicious food</h3>
                        <div class="starts">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="prince">$30.00</div>
                        <a href="#"><button class="btn" >add to cart</button></a>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <img src="images/populate3.jpg" alt="este ">
                        <h3>delicious food</h3>
                        <div class="starts">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="prince">$30.00</div>
                        <a href="#"><button class="btn" >add to cart</button></a>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <img src="images/populate4.jpg" alt="este ">
                        <h3>delicious food</h3>
                        <div class="starts">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="prince">$30.00</div>
                        <a href="#"><button class="btn" >add to cart</button></a>
                    </div>
                </div>
        </section>

        <section class="gallery" id="gallery">
            <h1 class="heading"> most <span>gallery</span> foods</h1>
            <div class="box-container">
                <div class="box" data-aos="fade-up">
                    <img src="images/postre1.jpg" alt="texto de postre">    
                    <h3>delicious food</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <img src="images/postre2.jpg" alt="texto de postre">    
                    <h3>delicious food</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <img src="images/postre3.jpg" alt="texto de postre">    
                    <h3>delicious food</h3>
                </div>
                <div class="box" data-aos="fade-up">
                    <img src="images/postre4.jpg" alt="texto de postre">    
                    <h3>delicious food</h3>
                </div>
                <div class="box" data-aos="fade-up" >
                    <img src="images/postre5.jpg" alt="texto de postre">    
                    <h3>delicious food</h3>
                </div>
                
            </div>
        </section>

        

        <section class="order" id="order">
            <h1 class="heading"> most <span>order</span> foods</h1>
            <div class="rows">
                <form action="" data-aos="fade-right">
                    <input type="text" class="box" placeholder="your name">
                    <input type="email" class="box" placeholder="your email">
                    <input type="password" class="box" placeholder="your password">
                    <input type="number" class="box" placeholder="your number">
                    <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="box address"></textarea>
                    <input type="submit" value="order now" class="btn">
                </form>
                <div class="image" data-aos="fade-left">
                    <img src="images/postre5.jpg" alt="texto alternativo">
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>contact info</h3>
                    <p><i class="fas fa-map-marker-alt"></i>Manizales , Colombia 270001</p>
                    <p><i class="fas fa-envelope"></i>example@gmail.com</p>
                    <p><i class="fas fa-phone"></i>1234567890</p>
                    <p><i class="fas fa-phone"></i>1234567847</p>
                </div>

                <div class="box">
                    <h3>branch location</h3>
                    <a href="">Colombia</a>
                    <a href="">Mexico</a>
                    <a href="">Panama</a>
                    <a href="">Venezuela</a>
                </div>

                
                <div class="box">
                    <h3>quick links</h3>
                    <a href="">home</a>
                    <a href="">about</a>
                    <a href="">menu</a>
                    <a href="">gallery</a>
                    <a href="">order</a>
                </div>


                <div class="box">
                    <h3>follow</h3>
                    <a href="">instagram</a>
                    <a href="">facebook</a>
                    <a href="">twitter</a>
                    <a href="">linkedin</a>
                </div>
            </div>

            <h2 class="credit">create by <a href="#">ING. Jerel Posada</a> all rights reserved. </h2>
        </footer>
</body>
</html>
