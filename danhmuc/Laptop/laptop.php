<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Z8~Zenith_Infinity</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<style type="text/css">
    body{
      padding: 0;
      margin: 0;
    }
    .menu ul{
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .menu ul li{
      padding: 15px;
      position: relative;
      width:  200px;
      vertical-align: middle;
      background-color: #34495E;
      cursor: pointer;
      border-right: 5px solid #71C40F;
      border-top: 1px solid #BDC3C7;
      transition: all 0.3s;
    }
    .menu ul li:hover{
      background-color: #2ECC71;
    }
    .menu > ul > li {

    }
    .menu ul ul{
      transition: all 0.3s;
      opacity: 0;
      position:  absolute;
      border-left: 5px solid #71C40F ;
      visibility: hidden;
      left: 100%;
      top: -2%;
    }
    .menu ul li:hover > ul {
      opacity: 1;
      visibility: visible;
    }
    .menu ul li a{
      color: #fff;
      text-decoration: none;
    }
    span{
      margin-right:  15px;
    }
    .menu > ul > li:nth-of-type(1)::after {
      content: "+";
      position: absolute;
      margin-left: 47%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(2)::after {
      content: "+";
      position: absolute;
      margin-left: 33%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(3)::after {
      content: "+";
      position: absolute;
      margin-left: 18%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(4)::after {
      content: "+";
      position: absolute;
      margin-left: 46.5%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(5)::after {
      content: "+";
      position: absolute;
      margin-left: 38%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(6)::after {
      content: "+";
      position: absolute;
      margin-left: 7%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(7)::after {
      content: "+";
      position: absolute;
      margin-left: 4.5%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(8)::after {
      content: "+";
      position: absolute;
      margin-left: 24.5%;
      color: #fff;
      font-size: 20px;  
    }
    .menu > ul > li:nth-of-type(9)::after {
      content: "+";
      position: absolute;
      margin-left: 43%;
      color: #fff;
      font-size: 20px;  
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row" >
    <div class="col-2">
      <a href="http://localhost/doAn/danhmuc/main/danhmuc.php"> <img src="http://localhost/doAn/Demo/images/Logo.png" width="180px" height="80px" alt=""></a>
    </div>
    <div class="col-10">
      <div class="row">
        <div class="col-6">
          <input class="form-control mr-sm-2" type="search" aria-label="Search" placeholder="Search something.">
        </div>
        <div class="mng-btn col-6">
          <button type="button"class="btn btn-dark">SEARCH</button>
          <button type="button"class="btn btn-dark">
            <a href="profile.html">INFO</a>
          </button>
          <button type="button"class="btn btn-dark">Credits</button>
          <button type="button"class="btn btn-dark">About Us</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <nav class="nav-menu navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Back to school 2020</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Chi_Tiet.html">Mainboard </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">CPU</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">VGA</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">RAM</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">SSD</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment Instructions</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">About Payment Method</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Installment Guides</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Go to Installment Tab</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warranty Policy
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">For 12 months </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">For 24 months</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">For 36 months</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<h2></h2>
<div class="row">
  <div class="col-md-2">
        <?php
        $lt = 'lt';
        $acer = 'Acer';
        $asus = 'Asus';
        $dell= 'Dell';
        $hp = 'HP';
        $msi = 'MSI';
        ?> 
    <div class="menu">
    <ul>
      <li><a href=""><span class="fa fa-laptop"></span>Laptop</a>
        <ul>
        <li><?php echo" <a href='http://localhost/doAn/danhmuc/Laptop/laptop.php?id=$lt&tennsx=$dell '> <span class='fa fa-laptop'></span>Laptop Dell</a>"?></li>
          <li><?php echo" <a href='http://localhost/doAn/danhmuc/Laptop/laptop.php?id=$lt&tennsx=$hp '> <span class='fa fa-laptop'></span>Laptop HP</a>"?></li>
          <li> <?php echo" <a href='http://localhost/doAn/danhmuc/Laptop/laptop.php?id=$lt&tennsx=$acer '> <span class='fa fa-laptop'></span>Laptop Acer</a>"?>  </li>
          <li><?php echo" <a href='http://localhost/doAn/danhmuc/Laptop/laptop.php?id=$lt&tennsx=$msi '> <span class='fa fa-laptop'></span>Laptop MSI</a>"?>   </li>
          <li><?php echo" <a href='http://localhost/doAn/danhmuc/Laptop/laptop.php?id=$lt&tennsx=$asus '> <span class='fa fa-laptop'></span>Laptop Asus</a>"?></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-gitlab"></span>PC Gaming</a>
        <ul>
          <li><a href=""><span class="fa fa-gitlab"></span>Medium PC Gaming</a></li>
          <li><a href=""><span class="fa fa-gitlab"></span>PC Custom Hi-End</a></li>
          <li><a href=""><span class="fa fa-gitlab"></span>PC Gaming by Price </a></li>
          <li><a href=""><span class="fa fa-gitlab"></span>PC Gaming by VGA</a></li>
          <li><a href=""><span class="fa fa-gitlab"></span>PC INTEL-AMD</a></li>
          <li><a href=""><span class="fa fa-gitlab"></span>PC by Manufacturer</a></li>
        </ul>
      </li> 
      <li><a href=""><span class="fa fa-microchip"></span>PC Components</a>
        <ul>
          <li><a href=""><span class="fa fa-microchip"></span>Mainboard</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>CPU</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>RAM</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>VGA</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>SSD</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>HHD</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>PSU</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>Case PC</a></li>
          <li><a href=""><span class="fa fa-microchip"></span>Fan RGB</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-desktop"></span>Screen</a>
        <ul>
          <li><a href=""><span class="fa fa-desktop"></span>By Price</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Manufacturers</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Size</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Frequency Sweep</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Curved Screen</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Resolution</a></li>
          <li><a href=""><span class="fa fa-desktop"></span>Screen Accessories</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-keyboard-o"></span>Keyboard</a>
        <ul>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Brand Razer</a></li>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Brand Leopold</a></li>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Brand Cosair</a></li>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Brand Logitech</a></li>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Other Brands</a></li>
          <li><a href=""><span class="fa fa-keyboard-o"></span>Connect</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-fire"></span>Mouse & MousePad</a>
        <ul>
          <li><a href=""><span class="fa fa-fire"></span>Mouses by Brands</a></li>
          <li><a href=""><span class="fa fa-fire"></span>Mouses by Price</a></li>
          <li><a href=""><span class="fa fa-fire"></span>Connect</a></li>
          <li><a href=""><span class="fa fa-fire"></span>MousePad by Brands</a></li>
          <li><a href=""><span class="fa fa-fire"></span>MousePad Types</a></li>
          <li><a href=""><span class="fa fa-fire"></span>MousePad by Size</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-headphones"></span>Gaming HeadPhone</a>
        <ul>
          <li><a href=""><span class="fa fa-headphones"></span>Manufacturers</a></li>
          <li><a href=""><span class="fa fa-headphones"></span>By Price</a></li>
          <li><a href=""><span class="fa fa-headphones"></span>Connect</a></li>
          <li><a href=""><span class="fa fa-headphones"></span>Headphone Types</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-wheelchair"></span>Gaming Chair</a>
        <ul>
          <li><a href=""><span class="fa fa-wheelchair"></span>Cougar</a></li>
          <li><a href=""><span class="fa fa-wheelchair"></span>AddaSeat</a></li>
          <li><a href=""><span class="fa fa-wheelchair"></span>AKRacing</a></li>
          <li><a href=""><span class="fa fa-wheelchair"></span>DXRacer</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fa fa-gamepad"></span>Console</a>
        <ul>
          <li><a href=""><span class="fa fa-gamepad"></span>Sony Playstation</a></li>
          <li><a href=""><span class="fa fa-gamepad"></span>Microsoft Xbox</a></li>
        </ul>
      </li>
    </ul>
    </div>
  </div>

  <?php 
    $tennsx = $_GET['tennsx'];
    $maloai = $_GET['id'];
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $sql = "SELECT * from sanpham WHERE tennsx = '$tennsx' && maloai ='$maloai'";
    $result= $conn-> query($sql);
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
  ?>
  <div class="col-md-10">
  <table class="table table-bordered">
    <tr style="width: 50%;">
    <?php foreach($data as $key => $value){?>

			<td class="product-data">
                <a href="#"><img src="http://localhost/DoAn/sanpham/img/<?php echo $value['hinh'] ?> "style="max-width: 300px;"> </a>
                
								<div class="product-info">
									<a href="#"><h6><?php echo $value['tensp'] ?></h6></a>
								</div>
								<div class="gia">
									<?php echo $value['gia']  ?>
								</div>
								<div class="pro_cart">
									<a href="#"> Đặt mua</a>
							</div>
      </td>
      <?php }  ?>
    </table>
                            

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
</div>
</div>
</body>