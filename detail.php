<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color:#8BD7D2;
        }
        .navbar {
    margin-top:1%;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px 20px;
    z-index: 1000;
}

.logo {
    color: #0096c7;
    font-size: 1.5em;
    font-weight: bold;
}
.logo a{
    color:#0096c7;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}
.logo a:hover{
    color:white;
    background-color:#0096c7;
}

.nav-links {
    display: flex;
    gap: 15px;
}

.nav-links a {
    color:  #0096c7;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}

.nav-links a:hover {
    background-color:#0096c7;
    color: white;
    border-radius: 4px;
}
        .container {
            margin-top: 5%;
            max-width: 700px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            color: #0096c7;
        }
        .product-image {
            float: left;
            width: 40%;
            margin-right: 20px;
        }
        .product-image img {
            width: 100%;
            border-radius: 10px;
        }
        .product-details {
            overflow: hidden;
        }
        .product-details h1 {
            margin-top: 0;
        }
        .product-details p {
            line-height: 1.6;
        }
        .product-price {
            font-size: 1.5em;
            color: #e67e22;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<center>
<nav class="navbar">
        <div class="logo">
            <span><a href="home.php">ZN</a></span>
        </div>
        <div class="nav-links">
            <a href="hostels.php">Hostels</a>
            <a href="about.php">About Me</a>
            <a href="login.php">Login</a>
            <a  href="hostels.php">Book Now</a>
        </div>
    </nav></center>
    <center>
<div class="container">
    <div class="product-image">
        <img src="img2.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h1>Hostel Detail</h1>
        <p>Hostel Name : XYZ Hostel</p>
        <p>Owner : Mr XYZ</p>
        <p>Contact No: 090078601</p>
        <p>Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, non!</p>
        <p class="product-price">Rent: 15k</p>
    </div>
    <div class="clear"></div>
</div>
</center>
</body>
</html>
