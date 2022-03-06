<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do your shopping with full confidence</title>
    <style>
        <?php
           include 'css/style.css'
        ?>
    </style>
    <link rel="stylesheet" href="css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>
<body>
    <section>
    <div id="header">
        <div id="logo">
            <img src="images/fashionhub.svg" alt="">
        </div>
        <div id="search"> 
            <input id="searchproduct" class="" placeholder="Search...." type="text">
            <div class="searchbtn">
                  
                <i class="fas fa-search"></i>
            </div>
        </div>
            <div id="calltoaction">
            <div id="profile">
                <i class="fas fa-user-alt"></i>
            </div>
            <div id="wishlist">
                <i class="fas fa-heart"></i>
            </div>
            <div id="cart">
            <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
    <div id="categories">
        <div id="list">
            <ul>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Kurti</a></li>
                <li><a href="#">T-shirt</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="#">Shirt</a></li>
                <li><a href="#">Sweater</a></li>
                <li><a href="#">Heels</a></li>
                <li><a href="#">Shoes</a></li>
            </ul>
        </div>
    </div>
    <div class="previous">
           <!-- <i class="far fa-chevron-left"></i>-->
     </div>
     <div class="containers">
        <div class="container first">
            <div class="imgBox first"><img src="images/pink_dress_80.jpg" alt=""></div>
            <div class="imgBox second"><img src="images/pink_dress_80.jpg" alt=""></div>
            <div class="imgBox third"><img src="images/pink_dress_80.jpg" alt=""></div>
            <div class="imgBox fourth"><img src="images/pink_dress_80.jpg" alt=""></div>
        </div>
        <div class="container second">
            <div class="imgBox first"><img src="images/diamond_heels_80.jpg" alt=""></div>
            <div class="imgBox second"><img src="images/diamond_heels_80.jpg" alt=""></div>
            <div class="imgBox third"><img src="images/diamond_heels_80.jpg" alt=""></div>
            <div class="imgBox fourth"><img src="images/diamond_heels_80.jpg" alt=""></div>
        </div>
        <div class="container third">
        <div class="imgBox first"><img src="images/hangedclothes_80.jpg" alt=""></div>
            <div class="imgBox second"><img src="images/hangedclothes_80.jpg" alt=""></div>
            <div class="imgBox third"><img src="images/hangedclothes_80.jpg" alt=""></div>
            <div class="imgBox fourth"><img src="images/hangedclothes_80.jpg" alt=""></div>
        </div>
        <div class="container fourth">
            <div class="imgBox first"><img src="images/white_top_70.jpg" alt=""></div>
            <div class="imgBox second"><img src="images/white_top_70.jpg" alt=""></div>
            <div class="imgBox third"><img src="images/white_top_70.jpg" alt=""></div>
            <div class="imgBox fourth"><img src="images/white_top_70.jpg" alt=""></div>
        </div>
        <div class="container fifth">
            <div class="imgBox first"><img src="images/green_shoes_80.jpg" alt=""></div>
            <div class="imgBox second"><img src="images/green_shoes_80.jpg" alt=""></div>
            <div class="imgBox third"><img src="images/green_shoes_80.jpg" alt=""></div>
            <div class="imgBox fourth"><img src="images/green_shoes_80.jpg" alt=""></div>
        </div>
     </div>
       
        <div class="next">
            <!--<i class="far fa-chevron-right"></i>-->
        </div>
        <div class="trending">
            <h1>Trending Products</h1>
            <div class="products">
            <div class="product">
                <div class="imgBox">
                    <img src="images/pants.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's pants in jogger</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>
           <!-- <div class="product">
                <div class="imgBox">
                    <img src="images/pants_2.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's pants in black</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>-->
            <div class="product">
                <div class="imgBox">
                    <img src="images/heels.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Heels for women</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>
          <!--  <div class="product">
                <div class="imgBox">
                    <img src="images/red_couple_shirts.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name"> Couple shirts</span>
                    <span class="price">Rs. 1500</span>
                </div> 
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/shirt.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Shirt for women in white</span>
                    <span class="price">Rs. 638</span>
                </div>
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/t_shirt.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's t-shirt</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>-->
            <div class="product">
                <div class="imgBox">
                    <img src="images/women_dress.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">One piece women dress in light colors</span>
                    <span class="price">Rs. 900</span>
                </div> 
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/heels_3.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's heels in open sandles</span>
                    <span class="price">Rs. 1300</span>
                </div>
            </div>
            </div>
            <div class="pagination">
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
            </div>
        </div>
        <div class="latest">
        <h1>Latest Products</h1>
            <div class="products">
            <div class="product">
                <div class="imgBox">
                    <img src="images/pants_2.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's pants in black</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/red_couple_shirts.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name"> Couple shirts</span>
                    <span class="price">Rs. 1500</span>
                </div> 
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/shirt.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Shirt for women in white</span>
                    <span class="price">Rs. 638</span>
                </div>
            </div>
            <div class="product">
                <div class="imgBox">
                    <img src="images/t_shirt.jpg" alt="">
                </div>
                <div class="desc">
                    <span class="name">Women's t-shirt</span>
                    <span class="price">Rs. 600</span>
                </div>
            </div>
            </div>
            <div class="pagination">
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        <?php
        include "js/main.js";
        ?>
    </script>
</body>
</html>