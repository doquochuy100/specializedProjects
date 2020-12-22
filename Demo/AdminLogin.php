<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log_In_Methods</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/doan/style.css" rel="stylesheet">
    <style>
        .dangnhap {
            padding: 16px;
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .dangnhap h1 {
            margin-top: 0;
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .dangnhap input {
            margin: 10px 0 10px 0;
            padding: 10px 10px;
            width: 100%;
            display: inline-block;
            border: 1px solid #cccccc;
            box-sizing: border-box;
            outline: none;
        }

        .dangnhap button {
            margin-top: 20px;
            width: 100%;
            height: 40px;
            border: none;
            color: #ffffff;
            background-color: seagreen;
            font-size: 16px;
            font-weight: bold;
            outline: none;
            border-radius: 50px;
            cursor: pointer;
        }

        .dangnhap button:hover {
            opacity: 0.8;
        }
        
        .dangnhap p {
            font-size: 16px;
            font-weight: bold;
        }

        .dangnhap p a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/doan/index.html">
          <img src= "./images/Logo.png" height="50px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doan/index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/doan/danhmuc/main/danhmuc.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form class="dangnhap" action="index3.php" method="post">
        <h1>Welcome Admin..Please log in to continute the Management.</h1>
        <input type="text" name="txtTaiKhoan" placeholder="Username" required>
        <input type="password" name="txtMatKhau" placeholder="Password" required>
        <button type="submit" class="btn">Login</button>
    </form>
</body>

</html>