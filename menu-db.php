<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/main.min.css"> -->
    <title>Sun Thai: Homepage</title>
</head>
<body>

    <!-- * Contact Info for Tablet and Desktop Viewports -->
    <section class="contact__header">
        <h3 class="tab-desk__contact">321 North Main, Chatham, IL 62629</h3>
        <h3 class="tab-desk__contact">217-483-8424</h3>
    </section>
    
    <!-- * Nav and Hamburger for Mobile Viewport -->
    <nav class="mbl__nav">
        <input class="toggler" type="checkbox">
        <div class="hamburger">
            <div></div> <!-- * Hamburger lines using CSS -->  
        </div>
        <div class="nav">
            <div>
                <div>
                    <ul class="mobile__menu-list">
                        <li class="menu__item"><a href="index.html">Home</a></li>
                        <li class="menu__item"><a href="menu.html">Menu</a></li>
                        <li class="menu__item"><a href="about.html">About Us</a></li>
                        <li class="menu__item"><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>      
    </nav>
    <!-- * End of Hamburger and Mobile Menu Area -->

    <!-- * About Us Hero Image and Main Logo -->
    <header class="menu-hero__area main__header" aria-label="Wide shot of chef facing away in kitchen">
        <div class="logo-menu-group">
            <div class="logo-text__wrapper logo-mod">
                <a href="index.html"><img src="images/logo_images/sunthai_logo-text.png" alt="Sun Thai logo"></a>
            </div>

            <!-- * Nav for Tablet and Desktop View -->
            <nav class="tab-desk__nav">
                <ul class="menu__list">
                    <li class="menu__item"><a href="index.html">Home</a></li>
                    <li class="menu__item"><a href="menu.html">Menu</a></li>
                    <li class="menu__item"><a href="about.html">About Us</a></li>
                    <li class="menu__item"><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <!-- * Menu Category Button Area -->
        <div class="subtle-bg mbl-paddings">
            <h2 class="hdr-title">Menu</h2>            
            <p class="hdr-title__sub">Thai food is what we love making.  Now come and eat!</p>
            <div class="menu-category__area">
                <div class="cta__btn">
                    <a class="btn__alt" href="#appetizers">Appetizers</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#soups">Soups</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#chi-lunch"><span class="chinese-short">Chi </span><span class="chinese-full">Chinese</span>Lunch</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#thai-lunch">Thai Lunch</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#dinner">Dinner</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#rice">Rice Dishes</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#salads">Thai Salads</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#noodles">Noodles</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#beverages">Beverages</a>
                </div>
                <div class="cta__btn">
                    <a class="btn__alt" href="#deserts">Deserts</a>
                </div>
            </div>
        </div>

        <!-- * Appetizer Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="appetizers">
                <div class="sub__hdr appetizer__hero" role="img" aria-label="Thai appetizer plate">
                    <img class="category__logo" src="images/logo_images/appetizers_logo.png" alt="Appetizers logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Appetizers Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>

        <!-- * Soups Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="soups">
                <div class="sub__hdr soups__hero" role="img" aria-label="Top view of Thai soup">
                    <img class="category__logo" src="images/logo_images/soups_logo.png" alt="Soups logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Soups Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>

        <!-- * Chinese Lunch Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="chi-lunch">
                <div class="sub__hdr chi-lunch__hero" role="img" aria-label="plate of Chinese food">
                    <img class="category__logo" src="images/logo_images/chi-lunch_logo.png" alt="Chinese Lunch logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Chinese Lunch Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Thai Lunch Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="thai-lunch">
                <div class="sub__hdr thai-lunch__hero" role="img" aria-label="Top view; plate of a Thai dish">
                    <img class="category__logo" src="images/logo_images/thai-lunch_logo.png" alt="Thai Lunch logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Thai Lunch Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Dinner Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="dinner">
                <div class="sub__hdr dinner__hero" role="img" aria-label="Plate of a Thai dinner dish">
                    <img class="category__logo" src="images/logo_images/dinner_logo.png" alt="Dinner logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Dinner Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Rice Dishes Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="rice">
                <div class="sub__hdr rice__hero" role="img" aria-label="Thai rice dish">
                    <img class="category__logo" src="images/logo_images/rice_logo.png" alt="Rice Dishes logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Rice Dishes Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Thai Salads Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="salads">
                <div class="sub__hdr salads__hero" role="img" aria-label="close up of a Thai salad">
                    <img class="category__logo" src="images/logo_images/salads_logo.png" alt="Thai Salads logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Thai Salads Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Noodles Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="noodles">
                <div class="sub__hdr noodles__hero" role="img" aria-label="bowl of Thai noodles">
                    <img class="category__logo" src="images/logo_images/noodles_logo.png" alt="Noodles logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Noodles Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Beverage Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="beverages">
                <div class="sub__hdr beverages__hero" role="img" aria-label="top view of Thai tea in cup">
                    <img class="category__logo" src="images/logo_images/beverages_logo.png" alt="Beverages logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Beverages Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>
        
        <!-- * Deserts Sub-Header and Menu -->
        <div class="menu__area">
            <header class="sub-hdr__area" id="deserts">
                <div class="sub__hdr deserts__hero" role="img" aria-label="Top view of Thai cheesecake on large plate">
                    <img class="category__logo" src="images/logo_images/deserts_logo.png" alt="Deserts logo">
                    <div class="color-overlay"></div>
                </div>
            </header>
            
            <!-- * Beverages Menu Text -->
            <div class="menu-text mbl-margins">
                <div class="menu-item">
                    <p class="star item-text">Ahi Tuna</p>
                    <p class="price">8.00</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Crab Rangoon (4)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="menu-item">
                    <p class="item-text">Chicken Fried Dumplings (5)</p>
                    <p class="price">5.95</p>
                </div>
                <div class="grid-item">
                    <p class="star item-text">Fried Tofu</p>
                    <p class="sub-text">Deep fried bean curd served with our house special peanut sauce</p>
                    <p class="price">4.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Satay Chicken (3)</p>
                    <p class="sub-text">Chicken marinated with fresh herbs, fried on skewers, served with peanut butter sauce and cucumber salad</p>
                    <p class="price">8.95</p>
                </div>
                <div class="grid-item">
                    <p class="item-text">Summer Rolls (2)</p>
                    <p class="sub-text">Rice paper wrapped chicken with fresh cilantro, lettuce and noodles served with our house special peanut sauce. Make with shrimp (Friday's only - 6.95)</p>
                    <p class="price">4.95</p>
                </div>
            </div>
        </div>

        <!-- * Call to Order Button -->
        <div class="btm-cta__btn">
            <div class="cta__btn btn-margins">
                <a class="btn" href="tel:1-217-483-8424">Call to Order</a>
            </div>
        </div>
    </main>

    <footer class="ftr__secondary ftr-paddings">
        <div class="soc-icon__wrapper">
            <a href="https://www.facebook.com/ChathamSunthai/"><img class="soc-icon" src="images/logo_images/facebook_logo.svg" alt="Facebook logo"></a>
        </div>
        <nav class="ftr__nav">
            <ul class="ftr__menu-list">
                <li class="menu__item ftr__menu__item"><a class="menu__link" href="index.html">Home</a></li>
                <li class="menu__item ftr__menu__item"><a class="menu__link" href="menu.html">Menu</a></li>
                <li class="menu__item ftr__menu__item"><a class="menu__link" href="about.html">About Us</a></li>
                <li class="menu__item ftr__menu__item"><a class="menu__link" href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <p class="copyright">&copy; 2021 Sun Thai</p>
    </footer>