<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Wakaocell</title>
   <link href="/wakaocee/image/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>
 <div class="header">
  <div class="container">
   <div class="navbar">
       <div class="logo">
         <a href="wakao1.html"> <img src="WAKAO%20MAK%20!.png" width="125px"></a>
       </div>
       <nav>
           <ul id="MenuItems">
               <li><a href="index.php">Home</a></li>
               <li><a href="index.php">Products</a></li>
               <li><a href="index.php">About us</a></li>
               <li><a href="index.php">Contact</a></li>
               <li><a href="index.php">Account</a></li>
              
                <li class="fright">
                Language
               <select onchange="set_language()" name="language">
                  <option value="en">EN</option>
                   <option value="jp">JP</option>
                   <option value="">CN</option>
                   <option value="jp">RU</option>
                   <option value="jp">UZ</option>
               </select>
               </li>
               
           </ul>
       </nav>
      <a href="/wakaocee/card.html"> <img src="cart.png" width="30px" height="30px"></a>
       <img src="menu.png" class="menu-icon" onclick="menutoggle()">
   </div>
   <div class="row">
       <div class="col-2">
           <h3>Newly born with the noble <br>Skin of the beginning !!</h3>
           <p>Only one! with Wakaocell healthy skin and makeup at the same time ! </p>
           <a href="" class="btn">Explore Now &#8594;</a>
       </div>
         
           <div class="col-2">
             <img src="gooo.png">
       </div>
   </div>
   </div>
    </div>
    
    
    <!-------- featured categories-------->
    
    
<div class="gallery mt-4">
 <h2 class="title handling-title py-5 text-center"><?php echo $langCode['OurMenu']; ?></h2>
 <div class="row mx-0">
  <div class="col-20 p-0">
   <a href="#">
    <img src="" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="" alt="slide-image2" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="" alt="slide-image3" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/11-560x560.jpg" alt="slide-image4" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/bing-slider-10.jpg" alt="slide-image5" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/bek-gallery-2-1.jpg" alt="slide-image6" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/bek-gallery-10-1.jpg" alt="slide-image7" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/Becoffee-Dessert-7-560x560.jpg" alt="slide-image8" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/grid8.jpg" alt="slide-image9" class="img-fluid" />
   </a>
  </div>
  <div class="col-20 p-0">
   <a href="#">
    <img src="<?php echo $front_img_url; ?>/index/2-560x560.jpg" alt="slide-image10" class="img-fluid" />
   </a>
  </div>
 </div>
</div>
    
       <!-------- featured products-------->
       <div class="container">
       <div class="container">
       <div class="small-container">
           <h2 class="title">Featured Products</h2>
           <div class="row">
               <div class="col-4">
                   <a href="/wakaocee/product%20detalia.html"> <img src="skin%201.jpg"></a>
                  <a href="/wakaocee/product%20detalia.html"> 
                   <h4>Wakaocell living Skin</h4> </a>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>30.000 원</p>
                   </div> 
                  <div class="col-4">
                  <a href="/wakaocee/loution.html"> <img src="loution1.jpg"> </a>
                   <h4>Wakaocell living Loution</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>70.000 원</p>
               </div> 
                  <div class="col-4">
                  <a href="/wakaocee/cream.html"> <img src="cream%201.jpg"> </a>
               <h4>Wakaocell living Cream</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>80.000 원</p>
               </div>
                   <div class="col-4">
                   <img src="pinu%201.jpg">
                   <h4>Wakaocell Soap</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>32.000 원</p>
               </div>
           </div>
       </div>
       </div>
       
       
       
    <h2 class="title">Latest Products</h2>
    <div class="row">
               <div class="col-4">
                   <img src="susomist%2001.jpg">
                   <h4>WakaocellHealion Hydrogen Mist</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>180.000 원</p>
               </div> 
                  <div class="col-4">
                   <img src="libil%20card1%20.jpg">
                   <h4>Wakaocell Hydrogen generator</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>90.000 원</p>
               </div> 
                  <div class="col-4">
                   <img src="sumka%20skin%201.jpg">
                   <h4>Wakaocell blue pearl</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>30.000 원</p>
               </div>
                   <div class="col-4">
                   <img src="pinu%200202.jpg">
                   <h4>Wakaocell Soap</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>7.000 원</p>
               </div>
                          <div class="row">
               <div class="col-4">
                   <img src="OIL%201.jpg">
                   <h4>Reha Oil</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>88.000 원</p>
               </div> 
                  <div class="col-4">
                   <img src="sumka%20=.jpg">
                   <h4>Wakaocell Loution Aurora Pouch</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>30.000 원</p>
               </div> 
                  <div class="col-4">
                   <img src="susomist%20010101-.jpg">
                   <h4>Wakaocell Hydrogen mist refill</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>45.000 원</p>
               </div>
                   <div class="col-4">
                   <img src="ww%20case%2001.jpg">
                   <h4>Wakaocell Glitter heart phone ring</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>12.250 원</p>
               </div>
           </div>
           </div>
    </div>
    
    
    
    
    <!---------offer--------->
    
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="PNG.png" class="offer-img">
                </div>
                <div class="col-2">
                   <p>Exclusively Available on Wakaocell</p>
                   <h1>Wakaocell living Series</h1>
                   <small>
                       Wakaocell's Living Line Products
contain mineral water, and its rich mineral content contributes greatly to maintaining skin health. 
                   </small>
                   <a href="" class="btn">Buy Now &#8594;</a>
                   
                    
                </div>
            </div>
        </div>
    </div>
   
    
    <!------testimonial------->
    <div class="container">
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>All of Wakaocell's products contain pearls marked as pearl extract on the label Pearls are organic minerals and natural creatures with immunity and endurance</p>
                     <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <img src="fon%201.jpg">
                   <h3>living Cream</h3>
                </div>
                  <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Pearl extracts have the innate ability to minimize the Skin's pores that have widened from daily make up and age and to regenerate the skin to a clear and transparent appearance. </p>
                     <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <img src="fon%202.jpg">
                   <h3>living Skin</h3>
                </div>
                  <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>New level  effects that haven't been seen before contains and has many purported benefits for Loution and healthy. Anti-aganin effects & helpful for trouble loution</p>
                     <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <img src="fon%203.jpg">
                   <h3>living loution</h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-------brands------>
    
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="MASTER%20CARD%20.jpg">
                </div>
                   <div class="col-5">
                    <img src="KAKAO%20PAY.jpg">
                </div>
                   <div class="col-5">
                    <img src="PAY%20PAL.jpg">
                </div>
                   <div class="col-5">
                    <img src="VISA%20.jpg">
                </div>
            </div>
        </div>
    </div>
    
   <!------footer------->
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                     <p>Download App for Android and ios mobile phone.</p>
                     <div class="app-logo">
                         <img src="2%20app%20store.png">
                         <img src="app%20store.jpg">
                     </div>
                </div>
               
                <div class="fotter-col-2">
                    <img src="00000.JPG" width="125"px>
                    <p>Our purposed is to sustainably make the delight and benefits <br>of  cosmetics accessible to the many.</p>
                    
                </div>
                <div class="footer-col-3">
                    <h3>Useful link</h3>
                    <ul>
                        <li>coupons</li>
                        <li>Blog Post</li>
                        <li>Return-Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul> 
                        <a href=" https://m.facebook.com/wakaocellkr/" > <li>Facebook</li></a>
                     <li>Twitter</li>
                      <a href="https://www.instagram.com/wakaocell_official/"> <li>Instagram</li></a>
                       <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Wakaocell-2020 cosmetics</p>
        </div>
    </div>
   
    <!-------js for toggle menu -------->
    <script>
       var MenuItems = document.getElementById("MenuItems")
       
       MenuItems.style.maxHeight = "0px";
        
        function menutoggle() {
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px"
                }
            else
                {
                    MenuItems.style.maxHeight = "0px"
                }
        }
        
        
        <!--------language-------->
        
        
        
        
    </script>
</body>
</html>