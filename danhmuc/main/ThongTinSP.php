<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Z8~Zenith_Infinity</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/doAn/Demo/style2.css" rel="stylesheet">
</head>
  <body style="overflow-x: hidden;" >   
   <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-branch" href="http://localhost/doAn/index.html">
          <img src="http://localhost/doAn/Demo/images/Logo.png" height="60"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="col-sm">
            <h5 style="color: black;">ZENITHINFINITY</h5>
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="http://localhost/doAn/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/doAn/Demo/index2.php">Services</a>
            </li>
              <li class="nav-item">
            <a class="nav-link" href="http://localhost/doAn/Demo/dangNhap.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">

        <div class="row">
            <br>
            <br>
            <div class="col-4">
               <div class="card" style="width: 18rem;">
                     <img src="http://localhost/doan/Demo/images/ASUS-ROG-Zephyrus-Duo-Review.jpg" class="card-img-top" alt="...">
                     <div class="card-body" style="color: black;">
                        <h5 class="card-title">Price: 24.000.000đ</h5>
                        <hr>
                        <div style="text-align: center;">
                            <a href="#" class="btn btn-outline-success">Buy now</a>
                        </div>                       
                     </div>
                  </div>
            </div>
            <div class="col-8" style="color:white">
                <h5 style="color:crimson">Asus ROG</h5>
                <hr class="light">
                <i>Views: 8.000.000 views </i>
                <h6>Detail product:</h6>
                <p style="color:white"><strong>GIÁ SALE KHÔNG QUÀ TẶNG chỉ 8,990,000 VNĐ</strong></p>
                <p style="color:white"><strong>Quà tặng: (Khi mua với giá 24.000.000 VNĐ)</strong></p>
                <p style="color:white"><strong>★ Tai nghe Zidli ZH 7RB trị giá 490.000 VNĐ</strong></p>
                <p style="color:white"><strong>★ Bàn phím Newmen T260 (chuyên văn phòng) trị giá 280.000 VNĐ</strong></p>
                <p style="color:white"><strong>★ Chuột Dare-U LM115G - Pink trị giá 200.000 VNĐ (KHÔNG ÁP DỤNG CÁC CTKM KHÁC)</strong></p>
                <p style="color:white"><strong>★ HÌNH ẢNH PC CHỈ MANG TÍNH CHẤT MINH HỌA CÓ THỂ THAY ĐỔI THEO THỜI GIAN</strong></p>
            </div>
        </div>
        <div class="nd">
            
            <hr>
            <h4 style="color: crimson;">Feature's Images</h4>
            <div class="slider" align="center">
                <div class="sliderContent">                
                    <div class="item" style="z-index: 1;">
                        <img src="http://localhost/doan/Demo/images/ASUS-ROG-Zephyrus-Duo-Review.jpg" alt="...">
                    </div>
                    <div class="item" style="z-index: 0;">
                        <img src="http://localhost/doan/Demo/images/ASUS-ROG-Zephyrus-Duo-Review.jpg" alt="...">
                    </div>
                </div>
            </div>
            <div id="tab6" class="content_scroll_tab" style="overflow:visible;">
                <b class="cufon title_box_scroll" style="color:white">Rates/Add Comments</b>  
                <div id="comment"><div id="comment"><div class="comment-form">
                    <img src="http://localhost/doan/Demo/images/blank-profile-picture-973460_640.png"alt="avatar" height="40" class="img-avatar">
            <form action="/ajax/post_comment.php" method="post" enctype="multipart/form-data" onsubmit="return check_field(0)" class="form-post">
                <input type="hidden" name="user_post[item_type]" value="product">
                <input type="hidden" name="user_post[item_id]" value="58">
                <input type="hidden" name="user_post[item_title]" value="PIONEER XDJ-XZ (REKORDBOX DJ & SERATO DJ PRO)">
                <input type="hidden" name="user_post[rate]" value="0">
                <input type="hidden" name="user_post[title]" value="PIONEER XDJ-XZ (REKORDBOX DJ & SERATO DJ PRO)">
                <input type="hidden" name="user_post[user_avatar]" value="0">
                <div class="relative" style="width: 100%;">
                    <textarea name="user_post[content]" placeholder="Write something.." id="content0"></textarea>   
                </div>
            </form>
            <div class="float-right">
                <input type="submit" value="Send feedback">
            </div>         
        </div>
    </div>


    <hr class="light">    
        <div class="pagination justify-content-center">
            <div class="wp-pagenavi" role="navigation">
                <span aria-current="page" class="current">1</span>
                <a class="page larger" title="Page 2" href="#">2</a>
                <a class="page larger" title="Page 3" href="#">3</a>
                <a class="page larger" title="Page 4" href="#">4</a>
                <a class="page larger" title="Page 5" href="#">5</a>
                <a class="page larger" title="Page 5" href="#">6</a>
                <a class="page larger" title="Page 5" href="#">7</a>
                <a class="page larger" title="Page 5" href="#">8</a>
                <a class="page larger" title="Page 5" href="#">9</a>
                <a class="nextpostslink" rel="next" href="#">»</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
          <div class="container-fluid padding"> 
            <div class="row text-center padding">
              <div class="col-12">
                <h2>Contact us</h2>
            </div>
            <div class="col-12 social padding">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>  
      <footer class="container">
        <div class="container-fluid padding"> 
          <div class="row text-center">
            <div class="col-md-4">
              <hr class="light">
              <h5>Z8 SHOP</h5>
              <hr class="light">
              <p>Hotline:19002048</p>
              <p>Email:rm061099@gmail.com</p>
              <p>Address:180 Cao Lo Street, Ward 4, District 8, Ho Chi Minh City</p>
            </div>
            <div class="col-md-4">        
              <hr class="light">
              <h5>Working times</h5>
              <hr class="light">
              <p>Monday - Saturday: 8:00 AM - 5:00 PM</p>
              <p>Sunday: 8:00 AM - 1:00 PM</p>
            </div>
            <div class="col-md-4">        
              <hr class="light">
              <h5>Guarantee</h5>
              <hr class="light">
              <p>Outsourcing</p>
              <p>Website development</p>
              <p>Mobile applications</p>
            </div>
            <div class="col-12">
              <hr class="light-100">
              <h5>&copy; ZENITHINFINITY</h5>
            </div>
          </div>
        </div>
      </footer>
    
            
    </body>
    
    
  </html>