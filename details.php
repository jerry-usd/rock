<?php

$link=mysqli_connect('localhost','root','','rock');
$id=$_GET['id'];
$query30=mysqli_query($link,"SELECT * FROM products where id='$id' ");
      while ($fr=mysqli_fetch_array($query30)) {
        $name=$fr['name'];
              $id=$fr['id'];
         $image1=$fr['image1'];
         $image2=$fr['image2'];
         $image3=$fr['image3'];
         $image4=$fr['image4'];
         $image5=$fr['image5'];
      $color1=$fr['color1'];
      $color2=$fr['color2'];
       $color3=$fr['color3'];
        $price=$fr['price'];
         $price2=$fr['price2'];
          $price3=$fr['price3'];
         $description=$fr['description'];
         $room=$fr['room'];
      }


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/modules/izitoast/css/iziToast.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Rockasempire</title>
  </head>
  <body>
    <div class="main-container">
      <div class="jumbo" style="height: auto;">
           <div class="nav1">
          <div class="container-fluid">
            <div class="row">
               <div class="col-sm-1"></div>
              <div class="col-sm-4 pt-4" style="font-weight: bolder; ">
                <div class="row">
                  <div class="col-sm-3" style="cursor: pointer;" onclick="window.location='index.html'">Home</div>
                   <div class="col-sm-3" style="cursor: pointer;" onclick="window.location='index.html#about'">About</div>
                    <div class="col-sm-3" style="cursor: pointer;" onclick="window.location='shop.php'">Shop</div>
                     <div class="col-sm-3" style="cursor: pointer;" onclick="window.location='index.html#footer'">Contact</div>
                </div>
              </div>
              <div class="col-sm-2 p-2"><center><img src="images/logo.png" height="40px;"></center></div>
              
               <div class="col-sm-3 pt-3">
                <button class="btn das" style="background: #bc93645e; color:#bc9364; margin-right: 10px; width: 100px;">login</button> <button class="btn das" style="background: #bc9364; color: white">Register</button>
              </div>
              <div class="col-sm-1 pt-4">
                <div class="row">
                  <div class="col-sm-6 cart-button" style="cursor: pointer;"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="26"></span> <div class="number" id="number">0</div></div>
                  <div class="col-sm-6" onclick="window.location='shop.php'" style="cursor: pointer;"><span class="iconify" data-icon="dashicons:search" data-inline="false" data-width="26"></span></div>
                </div>
              </div>
              <div class="col-sm-1"></div>
             
            </div>
          </div>
        </div>
        <div class=" mobile-nav">
          
          <nav role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span class="io"></span>
                <span class="ioo"></span>
                <a href="index.html">  <img src="images/logo.png" height="30px" class="mobileimg"></a>
              
                 <div class="mobilelog">
                   <div class="row">
                      <div class="col-6 p-0 mt-4">
                     

                    </div>
                   <div class="col-6 p-0 mt-4 cart-button"><span class="iconify " style="cursor: pointer;" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="20"></span> <div class="number" id="number1">3</div> </div>
                   </div>
                 </div>
            <ul id="menu">
              <li class="mb-1"><a href="index.html">Home</a><br></li>
              <li class="mb-1"><a href="index.html#about">About</a><br></li>
               <li class="mb-1"><a href="shop.php">Shop</a><br></li>
                <li class="mb-1"><a href="index.html#contact">Contact</a><br></li>
                 <li class="mb-1"><a href="shop.php">Search <span class="iconify mt-2" data-icon="bx:bx-search-alt" data-inline="false" data-width="15" style="cursor: pointer; margin-bottom: 8px;"></span> </a><br></li>
             

            
            </ul>
           </div>
          </nav>
        </div>

<div class="container-fluid product" style="margin-top: 150px; background-color:white">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-4 fix11">
          
          <div class="producth mb-2 fix355" style="border:none;">
                                      
                                       <center>
                                       <img src="images/<?php echo $image1; ?>" class=" mb-3" height="90px" onclick="
                                        document.getElementById('mj').src=this.src;

                                       ">
                                      
                                    </center>
                                    </div>
                                    <div class="producth mb-2 fix355" style="border:none;">
                                      
                                       <center>
                                       <img src="images/<?php echo $image2; ?>" class=" mb-3" height="90px" onclick="
                                        document.getElementById('mj').src=this.src;

                                       ">
                                      
                                    </center>
                                    </div>
                                    <div class="producth fix355" style="border:none;">
                                      
                                       <center>
                                       <img src="images/<?php echo $image3; ?>" class=" mb-3" height="90px" onclick="
                                        document.getElementById('mj').src=this.src;

                                       ">
                                      
                                    </center>
                                    </div>
        </div>
        <div class="col-sm-8" style="border-left: 3px solid #d7d7d7">
          <img src="images/<?php echo $image1; ?>"  class="img-fluid" style="max-height: 350px;" id="mj">
        </div>
      </div>
    </div>
    <div class="col-sm-5" style="padding-top: 10px;">
      <span style="color: grey; font-size:.7em;" class="mb-4">ROCKAS EMPIRE SPECIAL</span>
      <p style="font-size: 1.4em" class="mb-3"><b><?php echo $name; ?></b></p>
      <p style="font-size: 1.4em" class="mb-3"><b >₦ <span id="ffjl"> <?php echo number_format($price,0) ; ?></span>
</b></p>
      <div style="display: flex;" class="mb-5 mt-3"> <span style="margin-right: 10px" class="mt-2">Quantity</span><input value="1" type="text" name="" style="height: 40px; width: 50px; padding: 15px;" id="quantity"> </div>
      <div class="" <?php  if ($color2=='') {
        echo "style='display:none'";
      } ?>>
        
   
<label>Size</label>
     <div class="lenght mt-4 mb-5 " style="width: 400px">
       <div class="row">





         <div class="col-3 i" >
           <span   id="i"  class="ls"   onclick='
         
  this.classList.add("ls");
  document.getElementById("m").classList.remove("ls");
    document.getElementById("n").classList.remove("ls");
    document.getElementById("ffjl").innerHTML="<?php echo $price2; ?>";

         ' style="background: white; color: black; padding: 20px; border:1px solid grey; cursor: pointer;"><?php echo $color2; ?></span>
         </div>
         <div class="col-3 m" onclick='
         '>
           <span    id="m"  onclick='
         
  this.classList.add("ls");
  document.getElementById("i").classList.remove("ls");
    document.getElementById("n").classList.remove("ls");
     document.getElementById("ffjl").innerHTML="<?php echo $price3; ?>";

         ' style="background: white; color: black; padding: 20px; border:1px solid grey; cursor: pointer;"><?php echo $color3; ?></span>
         </div>
         <div class="col-3 n" onclick='
         ' style="display: none;">
           <span  id="n"    onclick='
         
  this.classList.add("ls");
  document.getElementById("m").classList.remove("ls");
    document.getElementById("i").classList.remove("ls");

         ' style="background: white; color: black; padding: 20px; border:1px solid grey; cursor: pointer;">
           <?php echo $color3; ?>
           </span>
         </div>



      
         
         </div>
       </div>
          </div>
    <button class="btn btn-lg mt-3 fix12" style="border:2px solid black; font-size: .8em; height: 60px; width: 300px;"  onclick="cart('<?php echo $id  ?>',document.getElementById('quantity').value,document.getElementsByClassName('ls')[0].innerHTML); document.getElementById('kki').style.display='inline-block' ">ADD TO CART <span style="margin-left: 10px" ><img src="images/785.svg" style="height: 20px;" class="loaderr img-fluid" id="kki"></span></button> <button class="btn btn-lg mt-3" style="border:2px solid black; font-size: .8em; height: 60px; "><span class="iconify" data-icon="ant-design:heart-filled" data-inline="false" data-width="30"></span></button>
    </div>
   
    </div>
     <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <button class="btn btn-lg mt-5 mb-3" style="border:2px solid black; font-size: .8em; height: 60px; width: 200px; background: black; color: white">Details</button> 
    <p><?php echo $description; ?></p>
    </div>
  </div>
  </div>
 
</div>
<div class="container " style="margin-top: 100px">
  <p style="text-align: center;"> <b>You may also like</b> </p>
            <div class="splide" id="so1" >
                              <div class="splide__track">
                                <ul class="splide__list" id="list">
                                  <li class="splide__slide"> 
                                   <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/p1.png" height="200px;"></div>
               
               <p style="margin: 0" > <b> Glowing Kit</b></p>
               <p class="mb-3" style="font-family: metropoliss">NGN 30,000</p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>
                                                                      

                                  </li>
                                   <li class="splide__slide"> 
                                                        
   <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/p1.png" height="200px;"></div>
               
               <p style="margin: 0" > <b> Glowing Kit</b></p>
               <p class="mb-3" style="font-family: metropoliss">NGN 30,000</p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>
                                  </li>
                                   <li class="splide__slide"> 
                                   
                                                                      
   <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/p1.png" height="200px;"></div>
               
               <p style="margin: 0" > <b> Glowing Kit</b></p>
               <p class="mb-3" style="font-family: metropoliss">NGN 30,000</p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>
                                  </li>
                                   <li class="splide__slide"> 
                               
                                              <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/p1.png" height="200px;"></div>
               
               <p style="margin: 0" > <b> Glowing Kit</b></p>
               <p class="mb-3" style="font-family: metropoliss">NGN 30,000</p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>                           

                                  </li>
                                     <li class="splide__slide"> 
                                    <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/p1.png" height="200px;"></div>
               
               <p style="margin: 0" > <b> Glowing Kit</b></p>
               <p class="mb-3" style="font-family: metropoliss">NGN 30,000</p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>
                                   
                                   
                                                                      

                                  </li>
                                 
                                 
                                            </ul>
                          </div>
                        </div>
    </div>
                  
 
   <div class="footer" id="footer">
    <div class="container">
         <div class="row">
           <div class="col-sm-4">

            <img src="images/logo.png" height="80px"><br>
             <br><br>
            <p> <span class="iconify" data-icon="akar-icons:phone" data-inline="false" data-width="20" data-height="20" style="margin-right: 10px"></span>+234 811 633 1975</p>
             <p><span class="iconify" data-icon="carbon:email-new" data-inline="false" data-width="20" data-height="20" style="margin-right: 10px"></span>info@rockasempire.com</p>
                      <p><span class="iconify"  data-icon="akar-icons:location" data-inline="false" data-width="20" data-height="40" style="margin-right: 10px"></span>irewolede New yidi Road ,Ilorin</p>
             <img src="images/flutter.png" height="50px" class="mt-2"><br><img src="images/ban2.png" height="50px" class="">
           </div>
             <div class="col-sm-4 mt-5 ulink">
            
                  <h6 class="mb-4"><b>Useful Links</b></h6>
           <a href="index.htmk" class="footerlink">Home</a><br>
                <a href="index.html#about" class="footerlink">About</a><br>
                 <a href="checkout.html" class="footerlink">Checkout</a><br>
                  <a href="shop.php" class="footerlink">Products</a><br>
                  
                    <a href="#" class="footerlink">Privacy Policy</a><br>
                    <a href="#" class="footerlink">Usage Policy</a>
           </div>
           <div class="col-sm-4 fix9" style="margin-top: 150px">
             <label>Suscribe to never miss a thing</label><br>
             <input type="text" name="" style="height: 50px; background: #e6d7c6; border: 0px; padding-left: 10px; padding-right: 10px; width: 100%" placeholder="Enter your email here" >
           </div>
         </div>
          <div class="row">
      <div class="col-sm-12">
        <center><h6 style="font-weight: bolder; margin-top: 50px">Copyright 2021 <span class="iconify" data-icon="ant-design:copyright-outlined" data-inline="false" data-width="16" data-height="16" style="margin-right: 10px"></span> Rockas Empire</h6></center>
      </div>
    </div>
  
    </div>
   
   </div>
     <aside id="sidebar-cart" class="cart">
  <main id="cartdom">
    <a href="#" class="close-button"><span class="close-icon" style="color: black !important"><span class="iconify" data-icon="bi:x-octagon-fill" data-inline="false" data-width="20"></span></span></a>
    <h2>Shopping Bag <span class="count">2</span></h2>
    <ul class="products">
      <li class="productl">
        <a href="#" class="product-link">
          <span class="product-image">
            <img src="https://via.placeholder.com/75x50/ffffff/cccccc?text=PHOTO" alt="Product Photo">
          </span>
          <span class="product-details">
            <h3>Very Cool Product One</h3>
            <span class="qty-price">
              <span class="qty">
                <button class="minus-button" id="minus-button-1">-</button>
                <input type="number" id="qty-input-1" class="qty-input" step="1" min="1" max="1000" name="qty-input" value="1" pattern="[0-9]*" title="Quantity" inputmode="numeric">
                <button class="plus-button" id="plus-button-1">+</button>
                <input type="hidden" name="item-price" id="item-price-1" value="12.00">
              </span>
              <span class="price">$16.00</span>
            </span>
          </span>
        </a>
        <a href="#remove" class="remove-button"><span class="remove-icon">X</span></a>
      </li>
      <li class="productl">
        <a href="#" class="product-link">
          <span class="product-image">
            <img src="https://via.placeholder.com/75x50/ffffff/cccccc?text=PHOTO" alt="Product Photo">
          </span>
          <span class="product-details">
            <h3>Very Cool Product Two with Long Title</h3>
            <span class="qty-price">
              <span class="qty">
                <button class="minus-button" id="minus-button-1">-</button>
                <input type="number" id="qty-input-2" class="qty-input" step="1" min="1" max="1000" name="qty-input" value="1" pattern="[0-9]*" title="Quantity" inputmode="numeric">
                <button class="plus-button" id="plus-button-1">+</button>
                <input type="hidden" name="item-price" id="item-price-2" value="12.00">
              </span>
              <span class="price">$28.00</span>
            </span>
          </span>
        </a>
        <a href="#remove" class="remove-button"><span class="remove-icon">X</span></a>
      </li>
      <li class="productl">
        <a href="#" class="product-link">
          <span class="product-image">
            <img src="https://via.placeholder.com/75x50/ffffff/cccccc?text=PHOTO" alt="Product Photo">
          </span>
          <span class="product-details">
            <h3>Very Cool Product Three</h3>
            <span class="qty-price">
              <span class="qty">
                <form action="#" name="qty-form" id="qty-form-1">
                  <button class="minus-button" id="minus-button-1">-</button>
                  <input type="number" id="qty-input-3" class="qty-input" step="1" min="1" max="1000" name="qty-input" value="1" pattern="[0-9]*" title="Quantity" inputmode="numeric">
                  <button class="plus-button" id="plus-button-1">+</button>
                  <input type="hidden" name="item-price" id="item-price-3" value="12.00">
                </form>
              </span>
              <span class="price">$12.00</span>
            </span>
          </span>
        </a>
        <a href="#remove" class="remove-button"><span class="remove-icon">X</span></a>
      </li>
    </ul>
    <div class="totals">
      <div class="subtotal">
        <span class="label">Subtotal:</span> <span class="amount">$54.00</span>
      </div>
      <!-- <div class="shipping">
        <span class="label">Shipping:</span> <span class="amount">$7.95</span>
      </div>
      <div class="tax">
        <span class="label">Tax:</span> <span class="amount">$71.95</span>
      </div> -->
    </div>
    <div class="action-buttons">
      <a class="view-cart-button" href="#">Cart</a><a class="checkout-button" href="#">Checkout</a>
    </div>
  </main>
</aside>
<div id="sidebar-cart-curtain"></div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <script src="dist/modules/izitoast/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
   <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript">
     function rangeSlide(value) {
            document.getElementById('rangeValue').innerHTML = value;
        }
          
      new Splide( '#so1', {
  perPage: 5,
  rewind : true,
    breakpoints: {
    '640': {
      perPage: 2,
      gap    : '1rem',
    },
    '480': {
      perPage: 1,
      gap    : '1rem',
    },
  }
} ).mount();
f();
cartdom();
</script>
  </body>
</html>