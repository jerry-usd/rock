
<?php

$link=mysqli_connect('localhost','root','','rock');
   $query301=mysqli_query($link,"SELECT * FROM products where room ='KIT'");
       $query302=mysqli_query($link,"SELECT * FROM products where room ='PRODUCT' ");
     
          

?>





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
        <div class="container mt-5 mb-5 fixc" style="margin-top: 150px !important">
    <center>
      <h5>Search Products</h5>
        <div style="padding: 10px; border-radius: 30px; background: #e6d7c6; width: 500px;" class="jjk" >
             <input type="text" name="test" class="lop" id="searcht" style="width: 200px; height: 50px; border:none;  border-radius: 20px 0px 0px 20px"><button style="height: 50px; width: 70px; position: relative;top: -1px; background: #bc9364; border-radius: 0px 10px 10px 0px" class="btn"  onclick="
                  window.location='shop.php?term='+document.getElementById('searcht').value;
                    document.getElementById('m1').style.display='none';
                     document.getElementById('m2').style.display='block';
                " ><span class="iconify" data-icon="el:search" data-inline="false" data-width="25" id="m1"></span> <img src='images/785.svg' class='preloaderr' style="display: none; top: 10px; left: 16px" id="m2"> </button>
        </div>
       
    </center>
</div>


<div id="itoogood1">

  <?php 

if (!isset($_GET['term'])) {
?>

    <?php
 ?>

<div class="container-fluid fix9 " style="margin-top: 150px;">
 <h1 class="mb-3" style="padding-left: 100px">  <b> Kits</b> </h1>
  <div class="container">
         <div class="splide" id="so1" >
                              <div class="splide__track">
                                <ul class="splide__list" id="list">

                                  <?php 


    
  while ($res=mysqli_fetch_array($query301)) {


  

echo "
                        <li class=\"splide__slide\"> 
                                   <div class=\"products p-2\" onclick=\"window.location='details.php?id=".$res['id']."'\">
             <center>
              <div class=\"pimg mb-2\"><img src=\"images/".$res['image1']."\" height=\"200px;\"></div>
               
               <p style=\"margin: 0\" > <b> ".$res['name']."</b></p>
               <p class=\"mb-3\" style=\"font-family: metropoliss\">NGN ".number_format($res['price'],0)."</p>
               <button  class=\"btn\" style=\"background: #bc9364; color: white; width: 70%; height: 50px;\">View Details</button>
                <button style=\"width: 25%; background: #bc9364\" class=\"btn\"><span class=\"iconify\" data-icon=\"uil:shopping-cart-alt\" data-inline=\"false\" data-width=\"36\" style=\"color: #f4ede3\"></span></button>

             </center>
           </div>
                                                                      
</li>";






  }

                                   ?>
          

                                 
                                 
                                            </ul>
                          </div>
                        </div>
  </div>
  

</div>
<div class="container" style="padding-top: 100px">
  <div class="row"><div class="col-sm-12"><h1 style="padding-left: 30px"><b>Products</b> </h1></div></div>
<div class="row">
 
  
                                  <?php 


  while ($res1=mysqli_fetch_array($query302)) {

    echo "
                        <div class=\"col-sm-3 mb-3\"> 
                                   <div class=\"products p-2\" onclick=\"window.location='details.php?id=".$res1['id']."'\">
             <center>
              <div class=\"pimg mb-2\"><img src=\"images/".$res1['image1']."\" height=\"200px;\"></div>
               
               <p style=\"margin: 0\" > <b> ".$res1['name']."</b></p>
               <p class=\"mb-3\" style=\"font-family: metropoliss\">NGN ".number_format($res1['price'],0)."</p>
               <button  class=\"btn\" style=\"background: #bc9364; color: white; width: 70%; height: 50px;\">View Details</button>
                <button style=\"width: 25%; background: #bc9364\" class=\"btn\"><span class=\"iconify\" data-icon=\"uil:shopping-cart-alt\" data-inline=\"false\" data-width=\"36\" style=\"color: #f4ede3\"></span></button>

             </center>
           </div>
                                                                      
</div>";
   




  }

                                   ?>
  

</div>




</div>
 <?php
}

else{
$term=$_GET['term'];
  $termf=mysqli_escape_string($link,$term);
        
$query303=mysqli_query($link,"SELECT * from products  where name like '%$termf%' OR description like '%$termf%' OR room like '%$termf%' ");
?>

<div class="container" style="padding-top: 40px">
  <div class="row"><div class="col-sm-12"><h3 style="padding-left: 30px"><b>Search Results</b> </h3></div></div>
<div class="row">
 
  
                                  <?php 


  while ($res3=mysqli_fetch_array($query303)) {

    echo "
                        <div class=\"col-sm-3 mb-3\"> 
                                   <div class=\"products p-2\" onclick=\"window.location='details.php?id=".$res3['id']."'\">
             <center>
              <div class=\"pimg mb-2\"><img src=\"images/".$res3['image1']."\" height=\"200px;\"></div>
               
               <p style=\"margin: 0\" > <b> ".$res3['name']."</b></p>
               <p class=\"mb-3\" style=\"font-family: metropoliss\">NGN ".number_format($res3['price'],0)."</p>
               <button  class=\"btn\" style=\"background: #bc9364; color: white; width: 70%; height: 50px;\">View Details</button>
                <button style=\"width: 25%; background: #bc9364\" class=\"btn\"><span class=\"iconify\" data-icon=\"uil:shopping-cart-alt\" data-inline=\"false\" data-width=\"36\" style=\"color: #f4ede3\"></span></button>

             </center>
           </div>
                                                                      
</div>";
   




  }

                                   ?>
  

</div>




</div>
<?php

}

    ?>

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
              cartdom();
      new Splide( '#so1', {
  perPage: 5,
  rewind : true,
    breakpoints: {
    '640': {
      perPage: 3,
      gap    : '1rem',
    },
    '480': {
      perPage: 1,
      gap    : '1rem',
    },
  }
} ).mount();

   
      
 

</script>
  </body>
</html>