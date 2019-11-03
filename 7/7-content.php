<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-331">
    <div class="box">
        <div class="container ">
            <div class="row">
                <div class="boxx">
                    <div class="swiper-container">  
                       <div class="swiper-pagination"></div>                                    
                       <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <div class="menuname">
                                <h3><span class="bgmenuname">Drink</span></h3>
                            </div>
                            <div class="col-md-6">
                                <img class="snapper" src="images/7-1.png" alt="">
                                <div class="drsnapper">

                                    <span class="price">900$</span>

                                    <h4><span class="name">Sting strawberry</span></h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>


                                <img class="snapper" src="images/7-2.png" alt="">
                                <div class="drsnapper">
                                    <span class="price">500$</span>
                                    <h4><span class="name">Energy 7up drink</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>
                                <img class="snapper" src="images/7-5.png" alt="">
                                <div class="drsnapper">
                                    <span class="price">500$</span>
                                    <h4><span class="name">Clean water Aquafina</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>
                            </div>
                            <div class="col-md-6 ">

                                <img class="snapper" src="images/7-3.png" alt="">
                                <div class="drsnapper">
                                    <span class="price">500$</span>
                                    <h4><span class="name">Mirinda strawberry</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>


                                <img class="snapper" src="images/7-4.png" alt="">
                                <div class="drsnapper">
                                    <span class="price">500$</span>
                                    <h4><span class="name">Mirinda orange</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>
                                <img class="snapper" src="images/7-6.png" alt="">
                                <div class="drsnapper">
                                    <span class="price">500$</span>
                                    <h4><span class="name">Beer Truc Bach</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec dui pellentesque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="menunamemid">
                                <h3><span class="bgmenuname">Dessert</span></h3>
                            </div>
                            <div class="col-md-6 pro">
                                <div class="sp">
                                 <div class="row">
                                    <div class="col-md-2 col-xs-12">
                                        <img class="snappersup" src="images/7-7.jpg" alt="">
                                    </div>
                                    <div class="col-md-10 col-xs-12">
                                        <div class="title">
                                            <span class="price">900$</span>
                                            <h4><span class="name">Prawn Salad</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sp">
                             <div class="row">
                                 <div class="col-md-2">
                                    <img class="snappersup" src="images/7-8.jpg" alt="">
                                </div>
                                <div class="col-md-10 col-xs-12">
                                    <div class="title">
                                        <span class="price">900$</span>
                                        <h4><span class="name">Cold Meat Platter</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sp">
                         <div class="row">
                             <div class="col-md-2 ">
                                <img class="snappersup" src="images/7-9.jpg" alt="">
                            </div>
                            <div class="col-md-10 col-xs-12">
                                <div class="title">
                                    <span class="price">900$</span>
                                    <h4><span class="name">Tomato Soup</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pro">
                    <div class="sp">
                     <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <img class="snappersup" src="images/7-10.jpg" alt="">
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="title">
                                <span class="price">900$</span>
                                <h4><span class="name">Hunter Pastry</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sp">
                 <div class="row">
                     <div class="col-md-2">
                        <img class="snappersup" src="images/7-11.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <div class="title">
                            <span class="price">900$</span>
                            <h4><span class="name">Georgia Peach Salad</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp">
             <div class="row">
                 <div class="col-md-2 ">
                    <img class="snappersup" src="images/7-12.jpg" alt="">
                </div>
                <div class="col-md-10 col-xs-12">
                    <div class="title">
                        <span class="price">900$</span>
                        <h4><span class="name">Crab Claw Soup</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide" >
   <div class="menunamemid">
 <h3><span class="bgmenuname">Food</span></h3>
</div>
    <div class="col-md-6 pro">
        <div class="sp">
         <div class="row">
            <div class="col-md-2 col-xs-12">
                <img class="snappersup" src="images/7-13.jpg" alt="">
            </div>
            <div class="col-md-10 col-xs-12">
                <div class="title">
                    <span class="price">900$</span>
                    <h4><span class="name">Grilled Lamb Tenderloins</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="sp">
     <div class="row">
         <div class="col-md-2">
            <img class="snappersup" src="images/7-14.jpg" alt="">
        </div>
        <div class="col-md-10 col-xs-12">
            <div class="title">
                <span class="price">900$</span>
                <h4><span class="name">Warm Chorizo Sausage</span></h4>
            </div>
        </div>
    </div>
</div>
<div class="sp">
 <div class="row">
     <div class="col-md-2 ">
        <img class="snappersup" src="images/7-15.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Chicken Breat Saute Sec</span></h4>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-md-6 pro">
    <div class="sp">
     <div class="row">
        <div class="col-md-2 col-xs-12">
            <img class="snappersup" src="images/7-16.jpg" alt="">
        </div>
        <div class="col-md-10 col-xs-12">
            <div class="title">
                <span class="price">900$</span>
                <h4><span class="name">Fishermen’s Basket</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="sp">
 <div class="row">
     <div class="col-md-2">
        <img class="snappersup" src="images/7-17.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Hanger Steak</span></h4>
        </div>
    </div>
</div>
</div>
<div class="sp">
 <div class="row">
     <div class="col-md-2 ">
        <img class="snappersup" src="images/7-18.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">BBQ Spare Ribs – Very Hot</span></h4>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="swiper-slide" >
 <div class="menunamemid">
 <h3>
    <span class="bgmenuname">Vegetarian</span>
</h3>
</div>
    <div class="col-md-6 pro">
        <div class="sp">
         <div class="row">
            <div class="col-md-2 col-xs-12">
                <img class="snappersup" src="images/7-19.jpg" alt="">
            </div>
            <div class="col-md-10 col-xs-12">
                <div class="title">
                    <span class="price">900$</span>
                    <h4><span class="name">Peace of mind</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="sp">
     <div class="row">
         <div class="col-md-2">
            <img class="snappersup" src="images/7-20.jpg" alt="">
        </div>
        <div class="col-md-10 col-xs-12">
            <div class="title">
                <span class="price">900$</span>
                <h4><span class="name">Ninh khang wisdom</span></h4>
            </div>
        </div>
    </div>
</div>
<div class="sp">
 <div class="row">
     <div class="col-md-2 ">
        <img class="snappersup" src="images/7-21.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Reunions reunion</span></h4>
        </div>
    </div>
</div>
</div>
<div class="sp">
 <div class="row">
     <div class="col-md-2 ">
        <img class="snappersup" src="images/7-25.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Five happy forestry subjects</span></h4>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-md-6 pro">
    <div class="sp">
     <div class="row">
        <div class="col-md-2 col-xs-12">
            <img class="snappersup" src="images/7-22.jpg" alt="">
        </div>
        <div class="col-md-10 col-xs-12">
            <div class="title">
                <span class="price">900$</span>
                <h4><span class="name">Anh minh longevity</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="sp">
 <div class="row">
     <div class="col-md-2">
        <img class="snappersup" src="images/7-23.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Hieu happy mind</span></h4>
        </div>
    </div>
</div>
</div>
<div class="sp">
 <div class="row">
     <div class="col-md-2 ">
        <img class="snappersup" src="images/7-24.jpg" alt="">
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="title">
            <span class="price">900$</span>
            <h4><span class="name">Wisdom of wellbeing</span></h4>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div> 
</div>
</div>
</div>
</div>
</div>
</div>


